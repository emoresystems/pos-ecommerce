<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Perfume;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    public function index()
    {
        return response()->json(Perfume::with(['category', 'supplier'])->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'profile_pic'   => 'nullable|string',
            'description'   => 'required|string',
            'category_id'   => 'required|exists:categories,id',
            'supplier_id'   => 'required|exists:suppliers,id',
            'stock_quantity'=> 'required|integer|min:0',
            'buying_date'   => 'required|date',
            'expire_date'   => 'required|date|after:buying_date',
            'buying_price'  => 'required|numeric|min:0',
            'retail_price'  => 'required|numeric|min:0',
        ]);

        $perfume = Perfume::create($data);

        return response()->json($perfume->load(['category', 'supplier']), 201);
    }

    public function show(Perfume $perfume)
    {
        return response()->json($perfume->load(['category', 'supplier']));
    }

    public function update(Request $request, Perfume $perfume)
    {
        $data = $request->validate([
            'name'          => 'sometimes|string|max:255',
            'profile_pic'   => 'nullable|string',
            'description'   => 'sometimes|string',
            'category_id'   => 'sometimes|exists:categories,id',
            'supplier_id'   => 'sometimes|exists:suppliers,id',
            'stock_quantity'=> 'sometimes|integer|min:0',
            'buying_date'   => 'sometimes|date',
            'expire_date'   => 'sometimes|date|after:buying_date',
            'buying_price'  => 'sometimes|numeric|min:0',
            'retail_price'  => 'sometimes|numeric|min:0',
        ]);

        $perfume->update($data);

        return response()->json($perfume->load(['category', 'supplier']));
    }

    public function destroy(Perfume $perfume)
    {
        $perfume->delete();

        return response()->json(['message' => 'Perfume deleted successfully']);
    }
}
