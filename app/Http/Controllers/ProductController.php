<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function liste(){
        return response()->json(Product::all());
    } 
    
    function show(int $id){
        $product = Product::find($id);
        return response()->json($product);
    }

    function addProduct(Request $request){
        // return response()->json($request->all());
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|max:2048',
            'price' => 'required|numeric',
            'tva' => 'sometimes|nullable|numeric',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images/products', 'public');
            $validated['image'] = $path;
        }

        $products = Product::create($validated);

        return response()->json($products, 200);
    }

}
