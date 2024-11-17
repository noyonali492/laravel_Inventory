<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Category;
use Cart;
class PosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $cartItemss = Cart::instance('cart')->content();
        $products = Product::join('categories','products.cat_id','categories.id')
        ->select('categories.cat_name','products.*')->get();
        $customers = Customer::orderBy('id','DESC')->get();
        $categories = Category::orderBy('id','DESC')->get();
        return view('pos',compact('products','customers','categories','cartItemss'));
    }
}
