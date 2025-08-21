@extends('pos.layout.app')

@section('content')
<div class="p-6 max-w-3xl mx-auto">
    <h2 class="text-xl font-semibold mb-6">Edit Perfume</h2>

    <form action="{{ route('perfumes.update', $perfume) }}" method="POST" enctype="multipart/form-data" 
          class="space-y-4 bg-white p-6 rounded-lg shadow">
        @csrf 
        @method('PUT')

        <!-- Perfume Name -->
        <div>
            <label class="block text-sm font-medium">Name</label>
            <input type="text" name="name" 
                   value="{{ old('name', $perfume->name) }}" 
                   required
                   class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-primary">
        </div>

        <!-- Description -->
        <div>
            <label class="block text-sm font-medium">Description</label>
            <textarea name="description" rows="3" 
                      class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-primary">{{ old('description', $perfume->description) }}</textarea>
        </div>

        <!-- Price -->
        <div>
            <label class="block text-sm font-medium">Price (KES)</label>
            <input type="number" name="price" step="0.01" 
                   value="{{ old('price', $perfume->price) }}" 
                   required
                   class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-primary">
        </div>

        <!-- Stock -->
        <div>
            <label class="block text-sm font-medium">Stock</label>
            <input type="number" name="stock" 
                   value="{{ old('stock', $perfume->stock) }}" 
                   required
                   class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-primary">
        </div>

        <!-- Category -->
        <div>
            <label class="block text-sm font-medium">Category</label>
            <select name="category_id" required 
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-primary">
                <option value="">-- Select Category --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" 
                        {{ old('category_id', $perfume->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Supplier -->
        <div>
            <label class="block text-sm font-medium">Supplier</label>
            <select name="supplier_id" required 
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-primary">
                <option value="">-- Select Supplier --</option>
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}" 
                        {{ old('supplier_id', $perfume->supplier_id) == $supplier->id ? 'selected' : '' }}>
                        {{ $supplier->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Perfume Image -->
        <div>
            <label class="block text-sm font-medium">Image</label>
            <input type="file" name="image" accept="image/*"
                   class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-primary">
            
            @if($perfume->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $perfume->image) }}" 
                         alt="Current Image" 
                         class="h-24 rounded-lg shadow">
                </div>
            @endif
        </div>

        <!-- Submit -->
        <div class="flex justify-end">
            <button type="submit" 
                    class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-opacity-90">
                Update
            </button>
        </div>
    </form>
</div>
@endsection
