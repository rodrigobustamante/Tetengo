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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('doctors', 'DoctorController',['except' => 'destroy, edit, update']);
Route::get('/doctors/{doctors}/delete', 'DoctorController@destroy')->name('doctors.destroy');
Route::resource('patients', 'PatientController',['except' => 'destroy, edit, update']);
Route::get('/patients/{patients}/delete', 'PatientController@destroy')->name('patients.destroy');