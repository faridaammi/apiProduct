<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    function liste(){
        return response()->json(Produit::all());
    } 
    
    function show(int $id){
        $produit = Produit::find($id);
        return response()->json($produit);
    }

    function addProduct(Request $request){
        // return response()->json($request->all());
        $validated = $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'lien_image' => 'required',
            'prix' => 'between:0,1000',
            'tva' => 'between:0,10',
            
        ]);

        $produit = Produit::create($validated);

        return response()->json($produit);
    }

}
