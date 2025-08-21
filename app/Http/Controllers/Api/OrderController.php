<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the orders.
     */
    public function index()
    {
        // Get all orders with customer and items
        $orders = Order::with(['customer', 'items.perfume'])->get();

        return response()->json($orders);
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

            $total = 0;
            $order = Order::create([
                'customer_id'  => $validated['customer_id'],
                'total_amount' => 0, // temporary, will update later
                'status'       => 'pending',
            ]);

            foreach ($validated['items'] as $item) {
                $perfume = \App\Models\Perfume::findOrFail($item['perfume_id']);
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

            return response()->json([
                'message' => 'Order created successfully',
                'order'   => $order->load(['customer', 'items.perfume'])
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified order.
     */
    public function show(Order $order)
    {
        return response()->json($order->load(['customer', 'items.perfume']));
    }

    /**
     * Update the specified order in storage.
     */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'status' => 'in:pending,completed,cancelled',
        ]);

        $order->update($validated);

        return response()->json([
            'message' => 'Order updated successfully',
            'order'   => $order->load(['customer', 'items.perfume']),
        ]);
    }

    /**
     * Remove the specified order from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return response()->json(['message' => 'Order deleted successfully']);
    }
}
