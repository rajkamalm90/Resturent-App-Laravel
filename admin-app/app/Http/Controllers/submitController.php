<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class submitController extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }

    public function indextable()
    {
        $products = Product::all();
        return view('frontend.indextable', compact('products'));
    }

    
// Product Management Methods

    public function productIndex()
    {
        $products = Product::all();
        return view('forntend.productindex', compact('products'));
    }

    //public function productIndex()
    //{
        //return view('frontend.productIndex');
    //}

    public function addProduct(Request $request)
    {
        // Validate the request data as needed
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            // Add more validation rules if necessary
        ]);

        // Create a new product
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        // Add more fields as needed

        $product->save();

        return redirect()->back()->with('message', 'Product added successfully');
    }

    public function editProduct($id)
    {
        $product = Product::find($id);

        return view('forntend.editproduct', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        // Validate the request data as needed
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            // Add more validation rules if necessary
        ]);

        // Update the product
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        // Update more fields as needed

        $product->save();

        return redirect()->back()->with('message', 'Product updated successfully');
    }

    public function deleteProduct($id)
    {
        // Delete the product
        $product = Product::find($id);
        $product->delete();

        return redirect()->back()->with('message', 'Product deleted successfully');
    }
}
