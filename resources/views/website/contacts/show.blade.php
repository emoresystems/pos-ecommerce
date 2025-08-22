@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Message Details</h1>

    <div class="bg-white p-6 rounded-lg shadow space-y-4">
        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Subject:</strong> {{ $contact->subject }}</p>
        <p><strong>Message:</strong> <br>{{ $contact->message }}</p>
    </div>

    <div class="mt-6">
        <a href="{{ route('contacts.index') }}"
           class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Back</a>
    </div>
</div>
@endsection
