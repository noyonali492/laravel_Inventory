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

    // public function allAttendence(){
    //     $attendencs = Attendenc::orderBy('id','DESC')->get();
    //     return view('all_attendence',compact('attendencs'));
    // }
    // public function index(){
        
        
    //     return view('add_attendence');
    // }

    public function store(Request $request){        
        $data=$request->att_date;
        $att_date=DB::table('attendencs')->where('att_date',$data)->first();

        if ($att_date) {
            return redirect()->back()->with('status','Record has been already Added !');
        }else{
            foreach($request->user_id as $id){
                $data[]=[ 
                   "user_id"=>$id,
                    "attendece"=>$request->attendece[$id],
                   "att_date"=>$request->att_date,
                    "att_year"=>$request->att_year,
                    "edit_date"=>date("d_m_y"),
                ];
            }
            $att=DB::table('attendencs')->insert($data);
         return redirect()->back()->with('status','Record has been added successfully !');
        }
 
    }

}
