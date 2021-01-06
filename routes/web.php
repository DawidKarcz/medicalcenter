<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('/doctor/home', 'App\Http\Controllers\Doctor\HomeController@index')->name('doctor.home');
Route::get('/doctor/patient/{id}', 'App\Http\Controllers\Doctor\PatientController@index')->name('doctor.patient.view');
Route::get('/patient/home', 'App\Http\Controllers\Patient\HomeController@index')->name('patient.home');
Route::get('/patient/doctor/{id}', 'App\Http\Controllers\Patient\DoctorController@index')->name('patient.doctor.view');

//Route::resource: The Route::resource method is a restful Controller that generates all the basic routes requited for an application and can be easily handled
//using the controller class. It takes two arguments, where first is the base incoming request URI (Uniform Resource Identifier) and second is the
// class name of the controller which is used to handle the request. With this method, we get route names and path defined by default with 7
//different actions which are required for any application.
Route::resource('admin/doctors', 'App\Http\Controllers\Admin\DoctorController', array('as'=>'admin'));
Route::resource('admin/patients', 'App\Http\Controllers\Admin\PatientController', array('as'=>'admin'));
Route::resource('admin/visits', 'App\Http\Controllers\Admin\VisitController', array('as'=>'admin'));
