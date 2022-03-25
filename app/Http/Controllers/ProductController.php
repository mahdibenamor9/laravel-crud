<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products.index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'registration_number' => 'required|numeric',
        ]);

        Product::create($request->all());
        return redirect()->route('products.index')->with('success','Created Successfully.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show',compact('product'));
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit',compact('product'));
    }

    public function update(Request $request, Product $Product)
    {
        $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'registration_number' => 'required|numeric',
        ]);

        $Product->update($request->all());
        return redirect()->route('products.index')->with('success','Updated Successfully.');
    }


    public function destroy(Product $Product)
    {
        $Product->delete();
        return redirect()->route('products.index')->with('success','Student deleted successfully.');
    }
}
