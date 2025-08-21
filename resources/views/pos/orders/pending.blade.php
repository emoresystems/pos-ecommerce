@extends('pos.layout.app')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-semibold mb-4">Pending Orders</h2>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if($orders->isEmpty())
        <p class="text-gray-500">No pending orders found.</p>
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
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-600">
                    @foreach($orders as $order)
                        <tr class="border-t hover:bg-gray-50">
                            <td class="px-4 py-2">#{{ $order->id }}</td>
                            <td class="px-4 py-2">{{ $order->customer_name ?? 'N/A' }}</td>
                            <td class="px-4 py-2">KES {{ number_format($order->total, 2) }}</td>
                            <td class="px-4 py-2">
                                <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                            <td class="px-4 py-2">{{ $order->created_at->format('d M, Y h:i A') }}</td>
                            <td class="px-4 py-2 flex space-x-2">
                                <!-- Mark as Completed -->
                                <form action="{{ route('orders.complete', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded text-xs hover:bg-green-600">
                                        Complete
                                    </button>
                                </form>

                                <!-- Cancel Order -->
                                <form action="{{ route('orders.cancel', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded text-xs hover:bg-red-600">
                                        Cancel
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
