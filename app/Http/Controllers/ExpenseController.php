<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller


{
    public function __construct(){
        $this->middleware('auth');
    }

    public function allExpense(){
        $expenses = Expense::orderBy('id','DESC')->get();
        return view('all_expense',compact('expenses'));
    }
    public function index(){
        
        
        return view('add_expense');
    }

    public function store(Request $request){        
   

        $expense = new Expense();
        $expense->details = $request->details;
        $expense->amount = $request->amount;
        $expense->date = $request->date;
        $expense->month = $request->month;
    

        $expense->save();
        return redirect()->route('all.expense')->with('status','Record has been added successfully !');
    }

}
