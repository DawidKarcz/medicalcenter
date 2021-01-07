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
Route::get('/doctor/visits', 'App\Http\Controllers\Doctor\VisitController@index')->name('doctor.visits.index');
Route::get('/doctor/visits/create', 'App\Http\Controllers\Doctor\VisitController@create')->name('doctor.visits.create');
Route::post('/doctor/visits/store', 'App\Http\Controllers\Doctor\VisitController@store')->name('doctor.visits.store');
Route::get('/doctor/patient/{id}', 'App\Http\Controllers\Doctor\PatientController@index')->name('doctor.patient.view');
Route::get('/doctor/visits/{id}/edit','App\Http\Controllers\Doctor\VisitController@edit')->name('doctor.visits.edit');
Route::put('/doctor/visits/{id}', 'App\Http\Controllers\Doctor\VisitController@update')->name('doctor.visits.update');
Route::get('/patient/home', 'App\Http\Controllers\Patient\HomeController@index')->name('patient.home');
Route::get('/patient/doctor/{id}', 'App\Http\Controllers\Patient\DoctorController@index')->name('patient.doctor.view');
Route::delete('/patient/visit/{id}', 'App\Http\Controllers\Patient\VisitController@destroy')->name('patient.visit.destroy');
Route::delete('/doctor/visit/{id}', 'App\Http\Controllers\Doctor\VisitController@destroy')->name('doctor.visit.destroy');
//Route::resource: The Route::resource method is a restful Controller that generates all the basic routes requited for an application and can be easily handled
//using the controller class. It takes two arguments, where first is the base incoming request URI (Uniform Resource Identifier) and second is the
// class name of the controller which is used to handle the request. With this method, we get route names and path defined by default with 7
//different actions which are required for any application.
Route::resource('admin/doctors', 'App\Http\Controllers\Admin\DoctorController', array('as'=>'admin'));
Route::resource('admin/patients', 'App\Http\Controllers\Admin\PatientController', array('as'=>'admin'));
Route::resource('admin/visits', 'App\Http\Controllers\Admin\VisitController', array('as'=>'admin'));
