<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Category;
use DB;
use Surfsidemedia\Shoppingcart\Facades\Cart;
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


    public function CreateInvoice(Request $request){
  
        $contents = Cart::instance('cart')->content();
        $customer = Customer::where('id',$request->cus_id)->first();
        return view('invoice',compact('contents','customer'));
    }

    public function FinalInvoice(Request $request){
        $data=array();
        $data['customer_id']=$request->customer_id;
        $data['order_date']=$request->order_date;
        $data['order_status']=$request->order_status;
        $data['total_product']=$request->total_products;
        $data['sub_total']=$request->sub_total;
        $data['vat']=$request->vat;
        $data['total']=$request->total;
        $data['payment_status']=$request->payment_status;
        $data['pay']=$request->pay;
        $data['due']=$request->due;

       $order_id = DB::table('orders')->insertGetId($data);
       $contents = Cart::instance('cart')->content();

       $odata=array();
       foreach($contents as $content){
            $odata['order_id']=$order_id;
            $odata['product_id']=$content->id;
            $odata['quantity']=$content->qty;
            $odata['unitcost']=$content->price;
            $odata['total']=$content->total;
            $insert = DB::table('oderdetails')->insert($odata);
       }
        
        Cart::destroy();
        return redirect()->route('home');

    }
}
