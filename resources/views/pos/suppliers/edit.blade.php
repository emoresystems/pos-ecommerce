@extends('pos.layout.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Edit Supplier</h1>

    <form action="{{ route('suppliers.update', $supplier) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold">Name</label>
            <input type="text" name="name" value="{{ $supplier->name }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-semibold">Email</label>
            <input type="email" name="email" value="{{ $supplier->email }}" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-semibold">Phone</label>
            <input type="text" name="phone" value="{{ $supplier->phone }}" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-semibold">Address</label>
            <textarea name="address" class="w-full border rounded px-3 py-2">{{ $supplier->address }}</textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        <a href="{{ route('suppliers.index') }}" class="ml-2 text-gray-600">Cancel</a>
    </form>
</div>
@endsection
