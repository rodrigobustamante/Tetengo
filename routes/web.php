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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('doctors', 'DoctorController',['except' => 'destroy, edit, update']);
Route::get('/doctors/{doctors}/delete', 'DoctorController@destroy')->name('doctors.destroy');
Route::resource('patients', 'PatientController',['except' => 'destroy, edit, update']);
Route::get('/patients/{patients}/delete', 'PatientController@destroy')->name('patients.destroy');
Route::resource('attentions', 'AttentionController',['except' => 'destroy, edit, update']);
Route::get('/attentions/{attentions}/delete', 'PatientController@destroy')->name('attentions.destroy');

//Login routes
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Route::get('password/reset', ['as' => 'password.reset', 'uses' => 
  'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/email', ['as' => 'password.email', 'uses' => 
  'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 
  'Auth\ResetPasswordController@showResetForm']);
Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 
  'Auth\ResetPasswordController@reset']);