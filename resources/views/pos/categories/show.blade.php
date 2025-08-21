@extends('pos.layout.app')

@section('content')
<div class="p-6 max-w-xl mx-auto bg-white shadow rounded-lg">
    <h1 class="text-2xl font-bold mb-4">{{ $category->name }}</h1>
    <p class="mb-4 text-gray-600">{{ $category->description }}</p>

    <div class="flex gap-3">
        <a href="{{ route('categories.edit', $category) }}" class="bg-yellow-500 text-white px-3 py-2 rounded-lg hover:bg-yellow-600">Edit</a>
        <a href="{{ route('categories.index') }}" class="bg-gray-600 text-white px-3 py-2 rounded-lg hover:bg-gray-700">Back</a>
    </div>
</div>
@endsection
