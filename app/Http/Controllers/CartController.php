<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!session()->has('cart')) {
            $this->init();
        }

        return view('cart.index', ['cart' => session('cart')]);
    }

    private function init()
    {
        session([
            'cart' => [
                'amount' => 0,
                'price' => 0.00,
                'products' => [],
            ]
        ]);
    }

    public function addItem($id)
    {
        if (!session()->has('cart')) {
            $this->init();
        }

        $product = Product::where('id', $id)->first();
        session()->push('cart.products', ['id' => $product->id,'name' => $product->name, 'price' => $product->price]);
        session()->increment('cart.amount');
        session()->increment('cart.price', $product->price);

        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
