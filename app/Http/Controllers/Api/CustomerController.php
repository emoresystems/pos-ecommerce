<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of customers.
     */
    public function index()
    {
        return response()->json(Customer::all(), 200);
    }

    /**
     * Store a newly created customer.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'nullable|string|max:255',
            'email'      => 'nullable|email|unique:customers,email',
            'phone'      => 'required|string|unique:customers,phone',
            'address'    => 'nullable|string',
            'city'       => 'nullable|string|max:255',
            'country'    => 'nullable|string|max:255',
            'total_spent'=> 'nullable|numeric|min:0',
        ]);

        $customer = Customer::create($validated);

        return response()->json($customer, 201);
    }

    /**
     * Display the specified customer.
     */
    public function show(Customer $customer)
    {
        return response()->json($customer, 200);
    }

    /**
     * Update the specified customer.
     */
    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'first_name' => 'sometimes|required|string|max:255',
            'last_name'  => 'nullable|string|max:255',
            'email'      => 'nullable|email|unique:customers,email,' . $customer->id,
            'phone'      => 'sometimes|required|string|unique:customers,phone,' . $customer->id,
            'address'    => 'nullable|string',
            'city'       => 'nullable|string|max:255',
            'country'    => 'nullable|string|max:255',
            'total_spent'=> 'nullable|numeric|min:0',
        ]);

        $customer->update($validated);

        return response()->json($customer, 200);
    }

    /**
     * Remove the specified customer.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return response()->json(null, 204);
    }
}
