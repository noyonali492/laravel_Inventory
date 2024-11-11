<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;
use App\Models\setting;

class SettingController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    // public function allProduct(){
    //     $setting = setting::orderBy('id','DESC')->get();
    //     return view('all_product',compact('products'));
    // }
    public function index(){
       
        return view('setting');
    }

    public function store(Request $request){        
   

        //dd($request->all());
        $setting = new setting();
        $setting->company_name = $request->company_name;
        $setting->company_address = $request->company_address;
        $setting->company_email = $request->company_email;
        $setting->company_phone = $request->company_phone;
        $setting->company_mobile = $request->company_mobile;
        $setting->company_city = $request->company_city;
        $setting->company_country = $request->company_country;
        $setting->company_zipcode = $request->company_zipcode;


        $image = $request->file('company_logo');
        $file_extention = $request->file('company_logo')->extension();
        $file_name = Carbon::now()->timestamp . '.' . $file_extention;        
        $this->GenerateSettingImage($image,$file_name);
        $setting->company_logo = $file_name;        
        $setting->save();
        return redirect()->route('all.setting')->with('status','Record has been added successfully !');
    }

public function GenerateSettingImage($image, $imageName){

        $destinationPath = public_path('uploads/products');
        $img= Image::read($image->path());
        $img->cover(124,124,"top");
        $img->resize(124,124,function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);

    }

}
