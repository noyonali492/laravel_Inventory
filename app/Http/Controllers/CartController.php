<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index() {
        // $cartItems = Cart::content();
        // return view('pos',compact('cartItems'));
        
    }
    public function AddCart(Request $request){

        // $request->id=$request->id;
        // $request->name=$request->name;
        // $request->qty=$request->qty;
        // $request->price=$request->price;
      
        // $data=array();
        // $data['id']=$request->id;
        // $data['name']=$request->name;
        // $data['qty']=$request->qty;
        // $data['price']=$request->price;


        Cart::instance('cart')->add($request->id,$request->name,$request->qty,$request->price)->associate('App\Models\Product');        
        session()->flash('success', 'Product is Added to Cart Successfully !');        
        return Redirect()->back()->with(['status'=>200,'message'=>'Success ! Item Successfully added to your cart.']);
    }
}