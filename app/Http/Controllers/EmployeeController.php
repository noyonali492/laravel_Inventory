<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;
use App\Models\employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function allEmployees(){
        $employees = employee::orderBy('id','DESC')->get();
        return view('all_employee',compact('employees'));
    }
    public function index(){
        
        
        return view('add_employee');
    }

    public function store(Request $request){        
   

        //dd($request->all());
        $employee = new employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->experience = $request->experience;
        $employee->nid_no = $request->nid_no;
        $employee->salary = $request->salary;
        $employee->vacation = $request->vacation;
        $employee->city = $request->city;


        $image = $request->file('image');
        $file_extention = $request->file('image')->extension();
        $file_name = Carbon::now()->timestamp . '.' . $file_extention;        
        $this->GenerateEmployeeThumbailImage($image,$file_name);
        $employee->photo = $file_name;        
        $employee->save();
        return redirect()->route('add.empolyee')->with('status','Record has been added successfully !');
    }

public function GenerateEmployeeThumbailImage($image, $imageName){

        $destinationPath = public_path('uploads/employees');
        $img= Image::read($image->path());
        $img->cover(124,124,"top");
        $img->resize(124,124,function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);

    }

}
