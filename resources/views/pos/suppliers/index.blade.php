@extends('pos.layout.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Suppliers</h1>

    <a href="{{ route('suppliers.create') }}" 
       class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Supplier</a>

    <table class="min-w-full mt-6 bg-white border border-gray-300 rounded-lg shadow">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border">Name</th>
                <th class="py-2 px-4 border">Email</th>
                <th class="py-2 px-4 border">Phone</th>
                <th class="py-2 px-4 border">Address</th>
                <th class="py-2 px-4 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
                <tr>
                    <td class="py-2 px-4 border">{{ $supplier->name }}</td>
                    <td class="py-2 px-4 border">{{ $supplier->email }}</td>
                    <td class="py-2 px-4 border">{{ $supplier->phone }}</td>
                    <td class="py-2 px-4 border">{{ $supplier->address }}</td>
                    <td class="py-2 px-4 border space-x-2">
                        <a href="{{ route('suppliers.show', $supplier) }}" class="text-blue-600">View</a>
                       @can('edit-pos')
                            <a href="{{ route('suppliers.edit', $supplier) }}" class="text-green-600">Edit</a>
                       @endcan
                        <form action="{{ route('suppliers.destroy', $supplier) }}" 
                              method="POST" 
                              class="inline"
                              onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
