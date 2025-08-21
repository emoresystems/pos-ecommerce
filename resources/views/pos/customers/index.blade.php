@extends('pos.layout.app')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold">Customers</h2>
        <a href="{{ route('customers.create') }}"
           class="px-4 py-2 bg-primary text-white rounded-lg shadow hover:bg-purple-700">
            + Add Customer
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="p-3">Name</th>
                    <th class="p-3">Email</th>
                    <th class="p-3">Phone</th>
                    <th class="p-3">City</th>
                    <th class="p-3">Spent (Ksh)</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($customers as $customer)
                    <tr class="border-b">
                        <td class="p-3">{{ $customer->first_name }} {{ $customer->last_name }}</td>
                        <td class="p-3">{{ $customer->email ?? '-' }}</td>
                        <td class="p-3">{{ $customer->phone }}</td>
                        <td class="p-3">{{ $customer->city ?? '-' }}</td>
                        <td class="p-3 text-secondary font-semibold">{{ number_format($customer->total_spent, 2) }}</td>
                        <td class="p-3 flex space-x-2">
                            <a href="{{ route('customers.show', $customer) }}" class="text-blue-600 hover:underline">View</a>
                            <a href="{{ route('customers.edit', $customer) }}" class="text-yellow-600 hover:underline">Edit</a>
                            <form action="{{ route('customers.destroy', $customer) }}" method="POST" onsubmit="return confirm('Delete this customer?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-3 text-center text-gray-500">No customers found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $customers->links() }}
    </div>
</div>
@endsection
