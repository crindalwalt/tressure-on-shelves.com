<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function homepage()
    {
        $categories = Category::all();
        $products = Product::paginate(12);
        return view("shop.index", [
            'categories' => $categories,
            'products' => $products,
        ]);
    }


    public function shoppage()
    {
        $products = Product::latest()->get();
        $categories = Category::all();
        return view("shop.shop", [
            'products' => $products,
            'categories' => $categories,
        ]);
    }


    public function product_detail($product)
    {

        $prod = Product::find($product);
        $similarProducts = Product::paginate(4);

        return view("shop.product", [
            "product" => $prod,
            'similar_product' => $similarProducts,
        ]);
    }

    public function checkout(Product $product)
    {
        $shipping = 10;
        $vat = 14;
        $vat_calc = ($product->price + $shipping)* $vat/100;
        // dd($product);
        return view("shop.order", [
            'product' => $product,
            'shipping' => $shipping,
            'vat' => $vat,
            'vat_calc' => $vat_calc,
            'total' => ($product->price + $shipping)+ $vat_calc,
        ]);
    }

    public function notFound()
    {
        return view("admin.setting.404");
    }
}
