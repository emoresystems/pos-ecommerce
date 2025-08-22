@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Messages</h1>

    @if (session('success'))
        <div class="mb-6 bg-green-100 text-green-700 p-4 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse bg-white shadow rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="p-4">#</th>
                <th class="p-4">Name</th>
                <th class="p-4">Email</th>
                <th class="p-4">Subject</th>
                <th class="p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $contact)
                <tr class="border-t">
                    <td class="p-4">{{ $contact->id }}</td>
                    <td class="p-4">{{ $contact->name }}</td>
                    <td class="p-4">{{ $contact->email }}</td>
                    <td class="p-4">{{ $contact->subject }}</td>
                    <td class="p-4 flex gap-2">
                        <a href="{{ route('contacts.show', $contact) }}"
                           class="text-blue-600 hover:underline">View</a>
                        <a href="{{ route('contacts.edit', $contact) }}"
                           class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact) }}" method="POST"
                              onsubmit="return confirm('Are you sure?');">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="p-4 text-center text-gray-500">No messages found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-6">
        {{ $contacts->links() }}
    </div>
</div>
@endsection
