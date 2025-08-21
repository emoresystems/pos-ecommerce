@extends('pos.layout.app')

@section('content')
<div class="p-6 max-w-3xl mx-auto">
    <h2 class="text-2xl font-semibold mb-6">Edit Customer</h2>

    <form action="{{ route('customers.update', $customer) }}" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium">First Name</label>
            <input type="text" name="first_name" value="{{ old('first_name', $customer->first_name) }}" required
                   class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium">Last Name</label>
            <input type="text" name="last_name" value="{{ old('last_name', $customer->last_name) }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium">Email</label>
            <input type="email" name="email" value="{{ old('email', $customer->email) }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium">Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $customer->phone) }}" required
                   class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium">Address</label>
            <textarea name="address" class="w-full border rounded px-3 py-2">{{ old('address', $customer->address) }}</textarea>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">City</label>
                <input type="text" name="city" value="{{ old('city', $customer->city) }}"
                       class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-sm font-medium">Country</label>
                <input type="text" name="country" value="{{ old('country', $customer->country) }}"
                       class="w-full border rounded px-3 py-2">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium">Total Spent</label>
            <input type="number" step="0.01" name="total_spent" value="{{ old('total_spent', $customer->total_spent) }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('customers.index') }}" class="px-4 py-2 bg-gray-200 rounded">Cancel</a>
            <button type="submit" class="px-4 py-2 bg-primary text-white rounded">Update</button>
        </div>
    </form>
</div>
@endsection
