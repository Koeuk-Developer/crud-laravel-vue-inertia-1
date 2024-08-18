<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return Inertia::render('Frontend/Product/Index',[
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        return Inertia::render('Frontend/Product/Create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $request -> validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer'],
        ]);
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return  redirect()->to('/products')->with('message','success');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
        return Inertia::render('Frontend/Product/Show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        // $product = Product::find($product);
        return Inertia::render('Frontend/Product/Edit',[
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => ['required', 'string','max:255'],
            'price' => ['required', 'integer'],
        ]);
        Product::find($id)->update([
            'name' => $request->name,
            'price' => $request->price,
            
        ]);
        return redirect()->to('/products')->with('message','successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
        $product->delete();
        return redirect()->to('/products')->with('message','success for product');
       
    }
}