<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Category;

class PosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $products = Product::join('categories','products.cat_id','categories.id')
        ->select('categories.cat_name','products.*')->get();
        $customers = Customer::orderBy('id','DESC')->get();
        $categories = Category::orderBy('id','DESC')->get();
        return view('pos',compact('products','customers','categories'));
    }
}
