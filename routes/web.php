<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

  Route::get('/admin',function(){
      return view('admin_layout');
 });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registers','UserRegistration@register_form');

Route::post('/user_login','UserRegistration@admin_login');


//Attendance Route
 Route::get('/add_attendance','AttendanceController@index');

// Route::get('/add_attendance','AttendanceController@attendance');

Route::get('/view_attendance','AttendanceController@view_all_attendace');

// //Route::get('/view_attendance','AttendanceController@view_all_attendance');

Route::post('/saves','AttendanceController@store');

Route::get('/attendance/edit/{id}','AttendanceController@edit_attendance');

Route::post('/attendance/update/{id}','AttendanceController@update');

Route::get('/attendance/delete/{id}','AttendanceController@delete');



//Report Route
Route::get('/add_report','ReportController@index');

//Route::get('/add_report','ReportController@report');

//Route::get('/view_report','ReportController@view_allreport');

Route::get('/view_all_report','ReportController@view_all_report');

Route::post('/save','ReportController@save');

Route::get('/report/edit/{report_id}','ReportController@edit_report');

Route::post('/report/update/{report_id}','ReportController@update');

Route::get('/report/delete/{report_id}','ReportController@delete');




