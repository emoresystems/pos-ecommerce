@extends('pos.layout.app')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Orders</h1>
        <a href="{{ route('orders.create') }}"
           class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
           + New Order
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse border border-gray-200 shadow-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="border p-2 text-left">#</th>
                <th class="border p-2 text-left">Customer</th>
                <th class="border p-2 text-left">Total</th>
                <th class="border p-2 text-left">Status</th>
                <th class="border p-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr class="hover:bg-gray-50">
                <td class="border p-2">{{ $order->id }}</td>
                <td class="border p-2">{{ $order->customer->first_name }} {{ $order->customer->last_name }}</td>
                <td class="border p-2">KES {{ number_format($order->total_amount,2) }}</td>
                <td class="border p-2">
                    <span class="px-2 py-1 rounded text-sm
                        @if($order->status == 'pending') bg-yellow-100 text-yellow-800
                        @elseif($order->status == 'completed') bg-green-100 text-green-800
                        @else bg-red-100 text-red-800 @endif">
                        {{ ucfirst($order->status) }}
                    </span>
                </td>
                <td class="border p-2 flex space-x-2">
                    <a href="{{ route('orders.show', $order) }}"
                       class="text-blue-600 hover:underline">View</a>
                    <a href="{{ route('orders.edit', $order) }}"
                       class="text-green-600 hover:underline">Edit</a>
                    <form action="{{ route('orders.destroy', $order) }}" method="POST" onsubmit="return confirm('Delete this order?')">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $orders->links() }}
    </div>
</div>
@endsection
