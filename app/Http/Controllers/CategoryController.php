<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        $categories = Category::all();
        return view('category', compact('categories'));
    }

    public function add(Request $request){

        $category = new Category();

        $category->cat_name = $request->cat_name;

        $category->save();

        return to_route('category');
    }


}
