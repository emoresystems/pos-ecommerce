@extends('pos.layout.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow p-6 rounded-lg mt-6">
    <h2 class="text-2xl font-bold mb-4">Invoice #{{ $order->id }}</h2>
    <p><strong>Date:</strong> {{ $order->created_at->format('d M, Y H:i') }}</p>
    <p><strong>Customer:</strong> {{ $order->customer->first_name }} {{ $order->customer->last_name }}</p>
    <p><strong>Status:</strong> <span class="capitalize">{{ $order->status }}</span></p>

    <table class="w-full mt-6 border-collapse">
        <thead>
            <tr class="bg-gray-100">
                <th class="border p-2 text-left">Product</th>
                <th class="border p-2 text-center">Qty</th>
                <th class="border p-2 text-center">Unit Price</th>
                <th class="border p-2 text-right">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
            <tr>
                <td class="border p-2">{{ $item->perfume->name }}</td>
                <td class="border p-2 text-center">{{ $item->quantity }}</td>
                <td class="border p-2 text-center">ksh {{ number_format($item->unit_price, 2) }}</td>
                <td class="border p-2 text-right">ksh {{ number_format($item->subtotal, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="flex justify-end mt-4">
        <h3 class="text-xl font-bold">Total: ksh {{ number_format($order->total_amount, 2) }}</h3>
    </div>

    <div class="mt-6 flex space-x-3">
        <a href="{{ route('orders.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back</a>
        <button onclick="window.print()" class="bg-primary text-white px-4 py-2 rounded">Print Invoice</button>
    </div>
</div>
@endsection
