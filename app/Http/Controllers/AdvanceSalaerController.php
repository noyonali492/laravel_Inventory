<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdvanceSalary;

class AdvanceSalaerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function allSalary(){
        $advancesalarys = AdvanceSalary::orderBy('id','DESC')->get();
        return view('advancesalary',compact('advancesalarys'));
    }
    public function index(){
        
        return view('add_advance_salary');
    }

    public function store(Request $request){        
   

        //dd($request->all());
        $supplier = new AdvanceSalary();
        $supplier->emp_id = $request->emp_id;
        $supplier->month = $request->month;
        $supplier->advance_salary = $request->advance_salary;
        $supplier->year = $request->year;     
        $supplier->save();
        return redirect()->route('add.advance.salary')->with('status','Record has been added successfully !');
    }

}

