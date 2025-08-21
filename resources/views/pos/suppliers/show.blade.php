@extends('pos.layout.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Supplier Details</h1>

    <div class="bg-white border rounded-lg shadow p-6">
        <p><strong>Name:</strong> {{ $supplier->name }}</p>
        <p><strong>Email:</strong> {{ $supplier->email }}</p>
        <p><strong>Phone:</strong> {{ $supplier->phone }}</p>
        <p><strong>Address:</strong> {{ $supplier->address }}</p>
    </div>

    <a href="{{ route('suppliers.index') }}" class="mt-4 inline-block bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Back</a>
</div>
@endsection
