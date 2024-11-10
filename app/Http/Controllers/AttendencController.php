<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatAttendencegory;
use DB;
class AttendencController extends Controller


{
    public function __construct(){
        $this->middleware('auth');
    }

    public function TakeAttendence(){
       $employee=DB::table('employees')->get();
        return view('take_attendence',compact('employee'));
    }

    public function allAttendence(){
        $attendencs = Attendenc::orderBy('id','DESC')->get();
        return view('all_attendence',compact('attendencs'));
    }
    public function index(){
        
        
        return view('add_attendence');
    }

    public function store(Request $request){        
   

        $attendencs = new Attendenc();
        $attendencs->user_id = $request->user_id;
        $attendencs->att_date = $request->att_date;
        $attendencs->att_year = $request->att_year;
        $attendencs->attendece = $request->attendece;

        $attendencs->save();
        return redirect()->route('all.category')->with('status','Record has been added successfully !');
    }

}
