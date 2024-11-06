<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;

class SalaryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function allSalary(){
        $salarys = Salary::orderBy('id','DESC')->get();
        return view('all_salary',compact('salarys'));
    }
    public function index(){
        
        
        return view('add_salary');
    }

    public function store(Request $request){        
   

        //dd($request->all());
        $supplier = new Salary();
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
        $supplier->save();
        return redirect()->route('all.salary')->with('status','Record has been added successfully !');
    }

}

