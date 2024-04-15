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
//Index Page
Route::get('/Lab','App\Http\Controllers\Admin_controller@Lab');

//Admin Module
Route::get('/Laboratory_registration','App\Http\Controllers\Admin_controller@Laboratory_registration');
Route::post('/lab_insert','App\Http\Controllers\Admin_controller@lab_insert');
Route::get('/Laboratory_login','App\Http\Controllers\Admin_controller@Laboratory_login');
Route::post('/lab_Login_check','App\Http\Controllers\Admin_controller@lab_Login_check');
Route::get('/lab_profile','App\Http\Controllers\Admin_controller@lab_profile');
Route::get('/add_category','App\Http\Controllers\Admin_controller@add_category');
Route::post('/category_insert','App\Http\Controllers\Admin_controller@category_insert');
Route::get('/manage_category','App\Http\Controllers\Admin_controller@manage_category');
Route::get('/category_delete/{category_id}','App\Http\Controllers\Admin_controller@category_delete');
Route::get('/edit_category/{category_id}','App\Http\Controllers\Admin_controller@edit_category');
Route::post('/update_category/{category_id}','App\Http\Controllers\Admin_controller@update_category');
Route::get('/test','App\Http\Controllers\Admin_controller@test');
Route::post('/test_insert','App\Http\Controllers\Admin_controller@test_insert');
Route::get('/verify_booking','App\Http\Controllers\Admin_controller@verify_booking');
Route::get('/approve_booking/{booking_id}','App\Http\Controllers\Admin_controller@approve_booking');
Route::get('/reject_booking/{booking_id}','App\Http\Controllers\Admin_controller@reject_booking');
Route::get('/registered_patients','App\Http\Controllers\Admin_controller@registered_patients');
Route::get('/payment_details','App\Http\Controllers\Admin_controller@payment_details');
Route::post('/Lab_profile_updation','App\Http\Controllers\Admin_controller@Lab_profile_updation');
Route::get('/manage_test','App\Http\Controllers\Admin_controller@manage_test');
Route::get('/test_delete/{test_id}','App\Http\Controllers\Admin_controller@test_delete');
Route::get('/test_fetch/{test_id}','App\Http\Controllers\Admin_controller@test_fetch');

Route::post('/test_update/{test_id}','App\Http\Controllers\Admin_controller@test_update');
//Patient Module
Route::post('/patient_insert','App\Http\Controllers\Patient_controller@patient_insert');
Route::get('/patient_profile','App\Http\Controllers\Patient_controller@patient_profile');
Route::post('/patient_profile_update','App\Http\Controllers\Patient_controller@patient_profile_update');
Route::get('/patient_signout','App\Http\Controllers\Patient_controller@patient_signout');
Route::post('/Login_check','App\Http\Controllers\Patient_controller@Login_check');
Route::get('/Patient_home','App\Http\Controllers\Patient_controller@Patient_home');
Route::get('/fetch_test/{category_id}','App\Http\Controllers\Patient_controller@fetch_test');
Route::get('/booking/{test_id}','App\Http\Controllers\Patient_controller@booking');
Route::post('/booking_insert','App\Http\Controllers\Patient_controller@booking_insert');
Route::get('/mybooking','App\Http\Controllers\Patient_controller@mybooking');
Route::get('/payment/{booking_id}','App\Http\Controllers\Patient_controller@payment');
Route::post('/payment_insert','App\Http\Controllers\Patient_controller@payment_insert');
