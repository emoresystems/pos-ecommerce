@extends('pos.layout.app')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold">All Perfumes</h2>
        <a href="{{ route('perfumes.create') }}" 
           class="bg-primary text-white px-4 py-2 rounded-lg flex items-center">
            <i class="fas fa-plus-circle mr-2"></i> Add Perfume
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-left">Image</th>
                    <th class="px-4 py-3 text-left">Name</th>
                    <th class="px-4 py-3 text-left">Category</th>
                    <th class="px-4 py-3 text-left">Supplier</th>
                    <th class="px-4 py-3 text-left">Stock</th>
                    <th class="px-4 py-3 text-left">Price</th>
                    <th class="px-4 py-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @forelse($perfumes as $perfume)
                <tr>
                    <td class="px-4 py-3">
                        @if($perfume->profile_pic)
                            <img src="{{ asset('storage/'.$perfume->profile_pic) }}" class="h-10 w-10 rounded object-cover">
                        @else
                            <i class="fas fa-spray-can text-gray-400 text-lg"></i>
                        @endif
                    </td>
                    <td class="px-4 py-3">{{ $perfume->name }}</td>
                    <td class="px-4 py-3">{{ $perfume->category->name ?? '-' }}</td>
                    <td class="px-4 py-3">{{ $perfume->supplier->name ?? '-' }}</td>
                    <td class="px-4 py-3">{{ $perfume->stock_quantity }}</td>
                    <td class="px-4 py-3 font-bold">ksh {{ number_format($perfume->retail_price, 2) }}</td>
                    <td class="px-4 py-3 text-right space-x-2">
                        <a href="{{ route('perfumes.show', $perfume) }}" class="text-blue-600 hover:underline">View</a>
                        <a href="{{ route('perfumes.edit', $perfume) }}" class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('perfumes.destroy', $perfume) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Delete this perfume?')" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-4 py-6 text-center text-gray-500">No perfumes found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
