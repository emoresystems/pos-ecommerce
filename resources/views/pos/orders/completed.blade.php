@extends('pos.layout.app')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-semibold mb-4">Completed Orders</h2>

    @if($orders->isEmpty())
        <p class="text-gray-500">No completed orders yet.</p>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-100 text-left text-sm font-semibold text-gray-700">
                        <th class="px-4 py-2">Order ID</th>
                        <th class="px-4 py-2">Customer</th>
                        <th class="px-4 py-2">Total</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Date</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-600">
                    @foreach($orders as $order)
                        <tr class="border-t hover:bg-gray-50">
                            <td class="px-4 py-2">#{{ $order->id }}</td>
                            <td class="px-4 py-2">{{ $order->customer_name ?? 'N/A' }}</td>
                            <td class="px-4 py-2">KES {{ number_format($order->total, 2) }}</td>
                            <td class="px-4 py-2">
                                <span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                            <td class="px-4 py-2">{{ $order->created_at->format('d M, Y h:i A') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
