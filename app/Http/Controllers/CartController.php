<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::all()->where('user_id', auth()->user()->id);


        return view('cart.show', ["carts" => $carts]);
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
    public function store(Request $req)
    {
        if ($req->count < 1) {
            return redirect()->back()->with('cart', 'quantity must be more than one ');
        }




        $product = Product::where('id', '=', $req->product_id)->first();

        if ($product->quantity < $req->count) {
            return redirect()->back()->with('cart', 'there is no enough quantity of this product!');

        }

        // find if the product has any cart
        // dd($product->cart()->get()->first());
        // if yes increase the quantity in the cart 
        // if  no create new cart item

        if ($product->cart()->get()->first()) {
            $cart = $product->cart()->get()->first();
            $cart->update([
                "quantity" => $req->count + $cart->quantity,
            ]);


        } else {

            Cart::create([
                "total" => $product->price,
                "quantity" => $req->count,
                "product_id" => $req->product_id,
                "product_name" => $req->product_name,
                "user_id" => $req->user()->id,
            ]);
        }

        $product->update(["quantity" => $product->quantity - $req->count]);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, Cart $cart)
    {
        // dd($cart->quantity);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        $product = Product::all()->where('id', $cart->product_id)->first();
        $product->update(["quantity" => $product->quantity + $cart->quantity]);

        $cart->delete();
        return redirect()->back();



    }
}