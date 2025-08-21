@extends('pos.layout.app')

@section('content')
<div class="p-6 max-w-3xl mx-auto">
    <h2 class="text-2xl font-semibold mb-6">Customer Details</h2>

    <div class="bg-white shadow rounded-lg p-6 space-y-4">
        <p><span class="font-semibold">Name:</span> {{ $customer->first_name }} {{ $customer->last_name }}</p>
        <p><span class="font-semibold">Email:</span> {{ $customer->email ?? '-' }}</p>
        <p><span class="font-semibold">Phone:</span> {{ $customer->phone }}</p>
        <p><span class="font-semibold">Address:</span> {{ $customer->address ?? '-' }}</p>
        <p><span class="font-semibold">City:</span> {{ $customer->city ?? '-' }}</p>
        <p><span class="font-semibold">Country:</span> {{ $customer->country ?? '-' }}</p>
        <p><span class="font-semibold">Total Spent:</span> <span class="text-secondary font-bold">Ksh {{ number_format($customer->total_spent, 2) }}</span></p>
    </div>

    <div class="flex justify-end space-x-3 mt-6">
        <a href="{{ route('customers.edit', $customer) }}" class="px-4 py-2 bg-yellow-500 text-white rounded">Edit</a>
        <a href="{{ route('customers.index') }}" class="px-4 py-2 bg-gray-200 rounded">Back</a>
    </div>
</div>
@endsection
