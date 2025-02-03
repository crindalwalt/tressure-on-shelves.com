<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("admin.categories.index", [
            'categories' => $categories,
        ]);
    }


    public function destroy(Category $cat)
    {
        $cat->delete();
        Alert::success("Category Deleted", "The category you requested is deleted successfully");
        return redirect()->back();
    }


    public function create()
    {
        return view("admin.categories.create");
    }
    public function store(Request $request)
    {
        //? validating the request
        $request->validate([
            'category_name' => ['required', 'string'],
            'category_icon' => ['required'],
        ]);

        //? storage the image

        if ($request->hasFile("category_icon")) {
            $icon = $request->file("category_icon");
            $iconName = "Category-" . time() . "." . $icon->getClientOriginalExtension();
            $icon->move(public_path("category-images"), $iconName);
        }

        //? generate slug
        $slug = Str::slug($request->category_name, "-");
        // dd($slug);

        //? category save
        Category::create([
            'name' => $request->category_name,
            'illustration' => "category-images/" . $iconName,
            'slug' => $slug,
        ]);

        //? redirect user
        return redirect()->back();
    }
}
