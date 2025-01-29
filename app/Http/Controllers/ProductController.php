<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(20);
        return view("admin.products.index", [
            "products" => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        // dd($categories);
        return view("admin.products.create", [
            "categories" => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // dd($request->product_image);

        if($request->hasFile("product_image")){
            $image = $request->file("product_image");
            $imageName = "Product-" . time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path("product-images"), $imageName);
            // return $imageName;
        }else{
            return "image ni hy";
        }
        Product::create([
            'name' => $request->product_name,
            'description' => $request->product_description,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->id ?? "0",
            'image' =>  "product-images/" . $imageName,

        ]);
        return redirect()->route("admin.products.all");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
