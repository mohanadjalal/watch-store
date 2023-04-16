<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Product;
use Gate;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC');
        $search = request('search');
        if ($search) {
            $products = $products->where('title', 'like', "%{$search}%")->orWhere('description', 'like', "%{$search}%");
        }



        return view('products', ['products' => $products->paginate(12)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('product.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {

        $credentials = $req->validate([
            "title" => ['required', 'min:3', 'max:254'],
            "price" => ['required'],
            "quantity" => ['required'],
            "description" => ['required', 'min:0'],
            "images" => [
                'required',
            ]
        ]);





        $product = Product::create([
            "title" => $req->title,
            "price" => $req->price,
            "quantity" => $req->quantity,
            "description" => $req->description,

        ]);


        foreach ($req->file("images") as $image) {
            $path = now()->minutes(2) . $image->getClientOriginalName();
            $image->storeAs('products', $path, "public");
            Images::create([
                "path" => $path,
                "product_id" => $product->id
            ]);

        }


        return redirect('/products')->with('success', "product added successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', ['product' => Product::where('id', $product->id)->first()], );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', ["product" => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, Product $product)
    {

        $credentials = $req->validate([
            "title" => ['required', 'min:3', 'max:254'],
            "price" => ['required'],
            "quantity" => [
                'required',
            ],
            "description" => ['required', 'min:0'],
        ]);

        $product->update($credentials);
        return redirect("/product/" . $product->id)->with('success', "product updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products');
    }
}