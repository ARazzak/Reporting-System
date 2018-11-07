<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Attendance;
use DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page.add_attendance');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request)
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
    

    public function view_all_attendace()
    {
        //$att = Attendance::all();
    	$atten = DB::table('attendances')->get();

    	return view('admin.page.view_attendance',['att'=>$atten]);
    }


    //Edit data into database table
    public function edit_attendance($id)
    {
      $attendanceEdit = Attendance::where('id',$id)->first();

      return view('admin.page.edit_attendance',['attendance'=>$attendanceEdit]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attendance = Attendance::find($request->id);

      $attendance->emp_Name = $request->employeeName;
      $attendance->current_Date = $request->date;
      $attendance->start_Time = $request->in_time;
      $attendance->end_Time = $request->out_time;
      $attendance->working_Hours = $request->work_Hour;
      $attendance->remarks = $request->remarks;
    

      $attendance->save();

      return redirect('/view_attendance')->with('message','Update date successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //Delete data into database table
    public function delete($id)
    {
      $attendance = Attendance::find($id);

      $attendance->delete();

      return redirect('/view_attendance')->with('message','Delete date successfully.');
    }
}
