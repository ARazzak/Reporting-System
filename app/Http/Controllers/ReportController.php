<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Report;
use DB;
//use App\Data;

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

    // public function view_all_report()
    // {
    //    return view('admin.page.view_report');
    // }

    public function save(Request $request)
    {
    	$rep = new Report();

    	$rep->org_Name = $request->organizationName;
    	$rep->org_Head = $request->orgHeadName;
    	$rep->head_Mobile = $request->orgHeadMobile;
    	$rep->total_Stu = $request->orgTotalStu;
    	$rep->class_room = $request->orgClassRoom;
    	// $rep->remarks = $request->remarks;
    	// $rep->status = $request->status;

    	$rep->save();

    	return redirect('/add_report')->with('message','Data insert successfully.');

    }

    //All data show

    public function view_all_report()
    {
        //$att = Attendance::all();
    	$rep = DB::table('reports')->get();

    	return view('admin.page.view_all_report',['rep'=>$rep]);
    }


    //Edit data into database table
    public function edit_report($id)
    {
      $reportEdit = Report::where('id',$id)->first();

      return view('admin.page.edit_report',['report'=>$reportEdit]);
    }


    //update data into database table
    public function update(Request $request, $id)
    {
        //dd($request->all());
    
      $report = Report::find($request->id);

      $report->org_Name = $request->organizationName;
      $report->org_Head = $request->orgHeadName;
      $report->head_Mobile = $request->orgHeadMobile;
      $report->total_Stu = $request->orgTotalStu;
      $report->class_room = $request->orgClassRoom;
     
    

      $report->save();

      return redirect('/view_all_report')->with('message','Update date successfully.');
    }
//Delete data into database table
    public function delete($id)
    {
      $report = Report::find($id);

      $report->delete();

      return redirect('/view_all_report')->with('message','Delete date successfully.');
    }




}
