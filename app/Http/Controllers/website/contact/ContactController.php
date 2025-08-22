<?php

namespace App\Http\Controllers\website\Contact;

use App\Http\Controllers\controller;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('website.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Add honeypot field check (spam prevention)
        if ($request->filled('website')) {
            return redirect()->route('contact')
                ->with('error', 'Spam detected. Please try again.');
        }

        // Validate user input
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Rate limiting (prevent spam by email or IP)
        $recentMessage = Contact::where('email', $validated['email'])
            ->where('created_at', '>=', now()->subMinutes(2)) // adjust minutes as needed
            ->exists();

        if ($recentMessage) {
            return redirect()->route('contact')
                ->with('error', 'You are sending messages too quickly. Please wait a bit before trying again.');
        }

        // Save contact
        Contact::create($validated);

        return redirect()->route('contact')
            ->with('success', 'Your message has been sent successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('website.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('website.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact->update($validated);

        return redirect()->route('contacts.index')
            ->with('success', 'Contact updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')
            ->with('success', 'Contact deleted successfully!');
    }
}
