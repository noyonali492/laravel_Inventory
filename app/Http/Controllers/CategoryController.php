<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller

{
    public function __construct(){
        $this->middleware('auth');
    }

    public function allCategory(){
        $categorics = Category::orderBy('id','DESC')->get();
        return view('all_category',compact('categorics'));
    }
    public function index(){
        
        
        return view('add_category');
    }

    public function store(Request $request){        
   

        $employee = new Category();
        $employee->cat_name = $request->cat_name;

        $employee->save();
        return redirect()->route('all.category')->with('status','Record has been added successfully !');
    }

}
