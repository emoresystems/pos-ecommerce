<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return response()->json(Supplier::with('perfumes')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'nullable|email|unique:suppliers,email',
            'phone'   => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        $supplier = Supplier::create($data);

        return response()->json($supplier, 201);
    }

    public function show(Supplier $supplier)
    {
        return response()->json($supplier->load('perfumes'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $data = $request->validate([
            'name'    => 'sometimes|string|max:255',
            'email'   => 'nullable|email|unique:suppliers,email,' . $supplier->id,
            'phone'   => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        $supplier->update($data);

        return response()->json($supplier);
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return response()->json(['message' => 'Supplier deleted successfully']);
    }
}
