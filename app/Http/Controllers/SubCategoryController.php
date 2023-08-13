<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        $subcategories = SubCategory::all();
        $categories = Category::all();
        return view('subcategory', compact('categories','subcategories'));
    }

    public function add(Request $request){

        $subcategory = new SubCategory();

        $subcategory->cat_id = $request->cat_id;
        $subcategory->sub_cat_name = $request->sub_cat_name;

        $subcategory->save();

        return to_route('subcategory');
    }

}
