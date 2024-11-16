<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function allCustomer(){
        $customers = Customer::orderBy('id','DESC')->get();
        return view('all_customer',compact('customers'));
    }
    public function index(){
        
        
        return view('add_customer');
    }

    public function store(Request $request){        
   

        //dd($request->all());
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->shopename = $request->shopename;
        $customer->account_holder = $request->account_holder;
        $customer->account_number = $request->account_number;
        $customer->bank_branch = $request->bank_branch;
        $customer->city = $request->city;


        $image = $request->file('image');
        $file_extention = $request->file('image')->extension();
        $file_name = Carbon::now()->timestamp . '.' . $file_extention;        
        $this->GenerateCustomerImage($image,$file_name);
        $customer->photo = $file_name;        
        $customer->save();
        return redirect()->back()->with('status','Record has been added successfully !');
    }

public function GenerateCustomerImage($image, $imageName){

        $destinationPath = public_path('uploads/customers');
        $img= Image::read($image->path());
        $img->cover(124,124,"top");
        $img->resize(124,124,function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);

    }

}
