<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function allProduct(){
        $products = Product::orderBy('id','DESC')->get();
        return view('all_product',compact('products'));
    }
    public function index(){
        $categorys = Category::all();
        $suppliers = Supplier::all();
        return view('add_product',compact('categorys','suppliers'));
    }

    public function store(Request $request){        
   

        //dd($request->all());
        $customer = new Product();
        $customer->product_name = $request->product_name;
        $customer->cat_id = $request->cat_id;
        $customer->sup_id = $request->sup_id;
        $customer->product_code = $request->product_code;
        $customer->product_garage = $request->product_garage;
        $customer->product_route = $request->product_route;
        $customer->product_image = $request->product_image;
        $customer->buy_date = $request->buy_date;
        $customer->expire_date = $request->expire_date;
        $customer->buying_price = $request->buying_price;
        $customer->selling_price = $request->selling_price;


        $image = $request->file('product_image');
        $file_extention = $request->file('product_image')->extension();
        $file_name = Carbon::now()->timestamp . '.' . $file_extention;        
        $this->GenerateProductImage($image,$file_name);
        $customer->product_image = $file_name;        
        $customer->save();
        return redirect()->route('all.product')->with('status','Record has been added successfully !');
    }

public function GenerateProductImage($image, $imageName){

        $destinationPath = public_path('uploads/products');
        $img= Image::read($image->path());
        $img->cover(124,124,"top");
        $img->resize(124,124,function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);

    }

}
