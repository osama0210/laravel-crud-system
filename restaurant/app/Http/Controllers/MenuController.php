<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function showAdminProducts()
    {
        $products = Product::all();
        $categories = Categories::all();
        return view('admin.admin-dashboard', compact('products', 'categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create($request->all());
        return redirect('/admin')->with('success', 'Product toegevoegd!');
    }

    public function story_category(Request $request){
        $request->validate([
            'name' => 'required|unique:categories,name',
        ]);

            Categories::create([
        'name' => $request->name,
    ]);

            return redirect('/admin')->with('success', 'Categorie toegevoegd!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
