@extends('pos.layout.app')

@section('content')
<div class="p-6 max-w-lg mx-auto">
    <h1 class="text-2xl font-bold mb-6">Add New Category</h1>

    <form action="{{ route('categories.store') }}" method="POST" class="space-y-4 bg-white p-6 shadow rounded-lg">
        @csrf
        <div>
            <label class="block font-medium">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" required
                   class="w-full border px-3 py-2 rounded-lg focus:ring focus:ring-primary">
        </div>

        <div>
            <label class="block font-medium">Description</label>
            <textarea name="description" rows="3" class="w-full border px-3 py-2 rounded-lg focus:ring focus:ring-primary">{{ old('description') }}</textarea>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-purple-700">
                Save
            </button>
        </div>
    </form>
</div>
@endsection
