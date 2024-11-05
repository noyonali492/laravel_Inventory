<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;
use App\Models\Supplier;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function allSupplier(){
        $suppliers = Supplier::orderBy('id','DESC')->get();
        return view('all_supplier',compact('suppliers'));
    }
    public function index(){
        
        
        return view('add_supplier');
    }

    public function store(Request $request){        
   

        //dd($request->all());
        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        $supplier->shop = $request->shop;
        $supplier->type = $request->type;
        $supplier->accountholder = $request->accountholder;
        $supplier->accountnumber = $request->accountnumber;
        $supplier->bankname = $request->bankname;
        $supplier->branchname = $request->branchname;
        $supplier->city = $request->city;


        $image = $request->file('image');
        $file_extention = $request->file('image')->extension();
        $file_name = Carbon::now()->timestamp . '.' . $file_extention;        
        $this->GenerateSupplierImage($image,$file_name);
        $supplier->photo = $file_name;        
        $supplier->save();
        return redirect()->route('all.supplier')->with('status','Record has been added successfully !');
    }

public function GenerateSupplierImage($image, $imageName){

        $destinationPath = public_path('uploads/suppliers');
        $img= Image::read($image->path());
        $img->cover(124,124,"top");
        $img->resize(124,124,function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);

    }

}

