<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function store (Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:25',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'quantity'=> 'required|integer',
            'price'=>'required|numeric',
            'status' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('products','public');

        product::create([
            'name' => $validatedData['name'],
            'image' => $imagePath,
            'quantity' => $validatedData['quantity'],
            'price'=>$validatedData['price'],
            'status' => $validatedData['status'],

        ]);
        return redirect()->back()->with("Success", 'product added successfully');
    }
}
