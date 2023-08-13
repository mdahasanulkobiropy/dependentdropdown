<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ProSubCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProSubCategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('proSubCategory', compact('categories'));
    }

    public function feachsubCategory(Request $request){
        // dd($request->cat_id);
        $subCategories = SubCategory::where('cat_id', $request->cat_id)->get();

        return response()->json([
            'subcategory' => $subCategories
        ],200);

    }

    public function add(Request $request){

        $pro_sub_cat = new ProSubCategory();

        $pro_sub_cat->cat_id = $request->cat_id;
        $pro_sub_cat->sub_cat_id = $request->sub_cat_id;
        $pro_sub_cat->pro_sub_cat_name = $request->pro_sub_cat_name;

        $pro_sub_cat->save();

        return to_route('prosubcategory');

    }

    public function ok(Request $request){

        return response()->json([
            'ok' => 'ok',
        ]);
    }
}
