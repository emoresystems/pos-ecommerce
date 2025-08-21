<?php

namespace App\Http\Controllers\Pos\Perfumes;

use App\Http\Controllers\Controller;

use App\Models\Perfume;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    /**
     * Display a listing of the perfumes.
     */
    public function index()
    {
        $perfumes = Perfume::with(['category', 'supplier'])->latest()->paginate(10);
        return view('pos.perfumes.index', compact('perfumes'));
    }

    /**
     * Show the form for creating a new perfume.
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('pos.perfumes.create', compact('categories', 'suppliers'));
    }

    /**
     * Store a newly created perfume in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'           => 'required|string|max:255',
            'profile_pic'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description'    => 'nullable|string',
            'category_id'    => 'required|exists:categories,id',
            'supplier_id'    => 'required|exists:suppliers,id',
            'stock_quantity' => 'required|integer|min:0',
            'buying_date'    => 'required|date',
            'expire_date'    => 'nullable|date|after_or_equal:buying_date',
            'buying_price'   => 'required|numeric|min:0',
            'retail_price'   => 'required|numeric|min:0',
        ]);

        if ($request->hasFile('profile_pic')) {
            $validated['profile_pic'] = $request->file('profile_pic')->store('perfumes', 'public');
        }

        Perfume::create($validated);

        return redirect()->route('perfumes.index')->with('success', 'Perfume added successfully.');
    }

    /**
     * Display the specified perfume.
     */
    public function show(Perfume $perfume)
    {
        return view('pos.perfumes.show', compact('perfume'));
    }

    /**
     * Show the form for editing the specified perfume.
     */
    public function edit(Perfume $perfume)
    {
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('pos.perfumes.edit', compact('perfume', 'categories', 'suppliers'));
    }

    /**
     * Update the specified perfume in storage.
     */
    public function update(Request $request, Perfume $perfume)
    {
        $validated = $request->validate([
            'name'           => 'required|string|max:255',
            'profile_pic'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description'    => 'nullable|string',
            'category_id'    => 'required|exists:categories,id',
            'supplier_id'    => 'required|exists:suppliers,id',
            'stock_quantity' => 'required|integer|min:0',
            'buying_date'    => 'required|date',
            'expire_date'    => 'nullable|date|after_or_equal:buying_date',
            'buying_price'   => 'required|numeric|min:0',
            'retail_price'   => 'required|numeric|min:0',
        ]);

        if ($request->hasFile('profile_pic')) {
            $validated['profile_pic'] = $request->file('profile_pic')->store('perfumes', 'public');
        }

        $perfume->update($validated);

        return redirect()->route('perfumes.index')->with('success', 'Perfume updated successfully.');
    }

    /**
     * Remove the specified perfume from storage.
     */
    public function destroy(Perfume $perfume)
    {
        $perfume->delete();

        return redirect()->route('perfumes.index')->with('success', 'Perfume deleted successfully.');
    }
}
