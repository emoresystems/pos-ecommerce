@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Edit Message</h1>

    @if ($errors->any())
        <div class="mb-6 bg-red-100 text-red-700 p-4 rounded-lg">
            <ul class="list-disc pl-6">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts.update', $contact) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-gray-700 mb-2">Full Name *</label>
            <input type="text" id="name" name="name" value="{{ old('name', $contact->name) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" required>
        </div>

        <div>
            <label for="email" class="block text-gray-700 mb-2">Email Address *</label>
            <input type="email" id="email" name="email" value="{{ old('email', $contact->email) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" required>
        </div>

        <div>
            <label for="subject" class="block text-gray-700 mb-2">Subject *</label>
            <input type="text" id="subject" name="subject" value="{{ old('subject', $contact->subject) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" required>
        </div>

        <div>
            <label for="message" class="block text-gray-700 mb-2">Message *</label>
            <textarea id="message" name="message" rows="5"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent"
                required>{{ old('message', $contact->message) }}</textarea>
        </div>

        <button type="submit"
            class="w-full bg-pink-600 text-white py-3 rounded-lg hover:bg-pink-700 transition-colors font-semibold">
            Update Message
        </button>
    </form>
</div>
@endsection
