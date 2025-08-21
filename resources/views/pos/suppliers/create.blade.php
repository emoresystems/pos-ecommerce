@extends('pos.layout.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Add Supplier</h1>

    <form action="{{ route('suppliers.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block font-semibold">Name</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-semibold">Email</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-semibold">Phone</label>
            <input type="text" name="phone" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-semibold">Address</label>
            <textarea name="address" class="w-full border rounded px-3 py-2"></textarea>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Save</button>
        <a href="{{ route('suppliers.index') }}" class="ml-2 text-gray-600">Cancel</a>
    </form>
</div>
@endsection
