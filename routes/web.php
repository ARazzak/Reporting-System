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

Route::get('/add_report','ReportController@index');

Route::get('/add_attendance','ReportController@attendance');

Route::get('/view_attendance','ReportController@view_all_attendace');
Route::get('/view_report','ReportController@view_all_report');

//Route::get('/add_report','ReportController@index');

Route::post('/save','ReportController@save');
