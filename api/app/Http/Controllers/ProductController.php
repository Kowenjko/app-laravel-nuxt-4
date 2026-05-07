<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user_id = auth()->user()->id;
        $products = Product::where('user_id', $user_id)->get();
        return response()->json(['status' => true, 'message' => 'Products retrieved successfully', 'products' => $products], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "required|string"
        ]);

        $data['user_id'] = auth()->user()->id;

        if ($request->hasFile('banner_img')) {
            $data['banner_img'] = $request->file('banner_img')->store('products', 'public');
        }

        Product::create($data);
        return response()->json(['status' => true, 'message' => 'Product created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->json(['status' => true, 'message' => 'Product retrieved successfully', 'product' => $product], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            "title" => "required|string"
        ]);

        if ($request->hasFile('banner_img')) {
            if ($product->banner_img) {
                Storage::disk('public')->delete($product->banner_img);
            }
            $data['banner_img'] = $request->file('banner_img')->store('products', 'public');
        }

        $product->update($data);
        return response()->json(['status' => true, 'message' => 'Product updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['status' => true, 'message' => 'Product deleted successfully'], 200);
    }
}
