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
   

        $month =$request->month;
        $emp_id =$request->emp_id;
        $advancesalary = AdvanceSalary::where('month',$month)
        ->where('emp_id',$emp_id)
        ->first();

        if ($advancesalary == null) {
            $advancesalary = new AdvanceSalary();
        $advancesalary->emp_id = $request->emp_id;
        $advancesalary->month = $request->month;
        $advancesalary->advance_salary = $request->advance_salary;
        $advancesalary->year = $request->year;     
        $advancesalary->save();
        return redirect()->route('add.advance.salary')->with('status','Record has been added successfully !');
        }else{
            return redirect()->route('add.advance.salary')->with('status','Salary already advance  !');
        }
      
       
    }

}

