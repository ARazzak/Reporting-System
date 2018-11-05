<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Attendance;
use DB;

class ReportController extends Controller
{
    public function index(){
    return view('admin.page.add_report');
    }

    public function attendance(){
    return view('admin.page.add_attendance');
    }

    public function view_all()
    {
       return view('admin.page.view_attendance');
    }

    public function view_all_report()
    {
       return view('admin.page.view_report');
    }

    public function save(Request $request)
    {
    	$att = new Attendance();

    	$att->emp_Name = $request->employeeName;
    	$att->current_Date = $request->date;
    	$att->start_Time = $request->in_time;
    	$att->end_Time = $request->out_time;
    	$att->working_Hours = $request->work_Hour;
    	$att->remarks = $request->remarks;
    	$att->status = $request->status;

    	$att->save();

    	return redirect('/add_attendance')->with('message','Data insert successfully.');

    }

    //All data show

    public function view_all_attendace()
    {
    	$atten = DB::table('attendances')->get();

    	return view('admin.page.view_attendance');
    }


}
