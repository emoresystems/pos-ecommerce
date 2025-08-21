@extends('pos.layout.app')

@section('content')
<div class="p-6 max-w-3xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Order #{{ $order->id }}</h1>

    <p><strong>Customer:</strong> {{ $order->customer->first_name }} {{ $order->customer->last_name }}</p>
    <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
    <p><strong>Total:</strong> KES {{ number_format($order->total_amount, 2) }}</p>

    <h2 class="mt-4 text-lg font-semibold">Items</h2>
    <table class="w-full border-collapse border mt-2">
        <thead class="bg-gray-100">
            <tr>
                <th class="border p-2 text-left">Perfume</th>
                <th class="border p-2 text-left">Qty</th>
                <th class="border p-2 text-left">Unit Price</th>
                <th class="border p-2 text-left">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
            <tr>
                <td class="border p-2">{{ $item->perfume->name }}</td>
                <td class="border p-2">{{ $item->quantity }}</td>
                <td class="border p-2">KES {{ number_format($item->unit_price,2) }}</td>
                <td class="border p-2">KES {{ number_format($item->subtotal,2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        <a href="{{ route('orders.index') }}" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Back</a>
    </div>
</div>
@endsection
