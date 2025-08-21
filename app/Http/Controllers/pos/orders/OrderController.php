<?php

namespace App\Http\Controllers\pos\orders;

use App\Models\Order;
use App\Models\Perfume;
use App\Models\Customer;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function storeInvoice(Request $request)
    {
        DB::transaction(function () use ($request, &$order) {
            // Create the order
            $order = Order::create([
                'customer_id'  => $request->customer_id,
                'total_amount' => collect(session('cart'))->sum(fn($item) => $item['quantity'] * $item['price']),
                'status'       => 'pending',
            ]);

            // Add items
            foreach (session('cart') as $id => $item) {
                OrderItem::create([
                    'order_id'   => $order->id,
                    'perfume_id' => $id,
                    'quantity'   => $item['quantity'],
                    'unit_price' => $item['price'],
                    'subtotal'   => $item['quantity'] * $item['price'],
                ]);
            }

            // Clear cart
            session()->forget('cart');
        });

        return redirect()->route('orders.showInvoice', $order->id)
            ->with('success', 'Invoice created successfully!');
    }

    public function showInvoice(Order $order)
    {
        $order->load('customer', 'items.perfume');
        return view('pos.orders.invoice', compact('order'));
    }
    /**
     * Display a listing of the orders.
     */
    public function index()
    {
        $orders = Order::with(['customer', 'items.perfume'])->paginate(10);

        return view('pos.orders.index', compact('orders'));
    }

    public function pending()
    {
        $orders = Order::where('status', 'pending')->with('items')->latest()->paginate(10);
        return view('pos.orders.pending', compact('orders'))->with('title', 'Pending Orders');
    }

    public function completed()
    {
        $orders = Order::where('status', 'completed')->with('items')->latest()->paginate(10);
        return view('pos.orders.completed', compact('orders'))->with('title', 'Completed Orders');
    }

    public function markComplete(Order $order)
    {
        $order->update(['status' => 'completed']);
        return redirect()->route('orders.pending')->with('success', 'Order marked as completed.');
    }

    public function markCancelled(Order $order)
    {
        $order->update(['status' => 'cancelled']);
        return redirect()->route('orders.pending')->with('success', 'Order cancelled.');
    }


    /**
     * Show the form for creating a new order.
     */
    public function create()
    {
        $perfumes = Perfume::all();
        $customers = Customer::all();

        return view('pos.orders.create', compact('perfumes', 'customers'));
    }

    /**
     * Store a newly created order in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'items'       => 'required|array|min:1',
            'items.*.perfume_id' => 'required|exists:perfumes,id',
            'items.*.quantity'   => 'required|integer|min:1',
        ]);

        try {
            DB::beginTransaction();

            $order = Order::create([
                'customer_id'  => $validated['customer_id'],
                'total_amount' => 0,
                'status'       => 'pending',
            ]);

            $total = 0;
            foreach ($validated['items'] as $item) {
                $perfume = Perfume::findOrFail($item['perfume_id']);
                $subtotal = $perfume->retail_price * $item['quantity'];

                OrderItem::create([
                    'order_id'   => $order->id,
                    'perfume_id' => $perfume->id,
                    'quantity'   => $item['quantity'],
                    'unit_price' => $perfume->retail_price,
                    'subtotal'   => $subtotal,
                ]);

                $total += $subtotal;
            }

            $order->update(['total_amount' => $total]);

            DB::commit();

            return redirect()->route('orders.index')
                ->with('success', 'Order created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified order.
     */
    public function show(Order $order)
    {
        $order->load(['customer', 'items.perfume']);
        return view('pos.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified order.
     */
    public function edit(Order $order)
    {
        $perfumes = Perfume::all();
        $customers = Customer::all();

        return view('pos.orders.edit', compact('order', 'perfumes', 'customers'));
    }

    /**
     * Update the specified order in storage.
     */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,completed,cancelled',
        ]);

        $order->update($validated);

        return redirect()->route('orders.index')
            ->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified order from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')
            ->with('success', 'Order deleted successfully.');
    }
}
