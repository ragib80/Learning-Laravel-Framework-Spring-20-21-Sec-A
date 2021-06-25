<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function index()
    {
          $product = Product::all();
          return view('product.list')->with('productList', $product);
    }


    public function create()
    {
        return view('product.create');
    }

    public function insert(Request $request)
    {
        $product=new Product;
        $product->name=$request->productname;
        $product->buying_Price=$request->buying_Price;
        $product->selling_Price=$request->selling_Price;
        $product->save();
        return redirect()->route('product.index');
        
    }

    public function details($id)
    {
        
        $product = Product::find($id);
        return view('product.details')->with('product', $product);
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name=$request->productname;
        $product->buying_Price=$request->buying_Price;
        $product->selling_Price=$request->selling_Price;
        $product->save();
        return redirect()->route('product.index');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        return view('product.delete')->with('product', $product);
    }

    public function destroy(Product $product, $id)
    {
        Product::destroy($id);
        return redirect()->route('product.index');
    }
}
