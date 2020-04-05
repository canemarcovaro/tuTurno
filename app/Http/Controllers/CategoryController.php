<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function create(Request $request){
        
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->market_id = $request->market_id;
        $category->save();

        return $category;
    
    }

    public function index($id){
        
     
        $categories =  Category::where('market_id','=',$id)->get();

        return $categories;
    
    }
}
