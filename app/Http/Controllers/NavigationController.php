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
        return view("index", [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
