@extends('pos.layout.app')

@section('content')
<div class="p-6 max-w-3xl mx-auto">
    <h2 class="text-xl font-semibold mb-6">Add Perfume</h2>

    <form action="{{ route('perfumes.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 bg-white p-6 rounded-lg shadow">
        @csrf

        <div>
            <label class="block text-sm font-medium">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" required
                class="w-full border rounded-lg px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium">Profile Picture</label>
            <input type="file" name="profile_pic" class="w-full border rounded-lg px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium">Description</label>
            <textarea name="description" class="w-full border rounded-lg px-3 py-2">{{ old('description') }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Category</label>
                <select name="category_id" class="w-full border rounded-lg px-3 py-2">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium">Supplier</label>
                <select name="supplier_id" class="w-full border rounded-lg px-3 py-2">
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Stock Quantity</label>
                <input type="number" name="stock_quantity" value="{{ old('stock_quantity') }}" required class="w-full border rounded-lg px-3 py-2">
            </div>
            <div>
                <label class="block text-sm font-medium">Buying Date</label>
                <input type="date" name="buying_date" value="{{ old('buying_date') }}" class="w-full border rounded-lg px-3 py-2">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Expire Date</label>
                <input type="date" name="expire_date" value="{{ old('expire_date') }}" class="w-full border rounded-lg px-3 py-2">
            </div>
            <div>
                <label class="block text-sm font-medium">Buying Price</label>
                <input type="number" step="0.01" name="buying_price" value="{{ old('buying_price') }}" class="w-full border rounded-lg px-3 py-2">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium">Retail Price</label>
            <input type="number" step="0.01" name="retail_price" value="{{ old('retail_price') }}" class="w-full border rounded-lg px-3 py-2">
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-primary text-white px-4 py-2 rounded-lg">Save</button>
        </div>
    </form>
</div>
@endsection
