<?php

use App\Models\LicensePlate;
use App\Models\Offense;
use Illuminate\Http\Request;
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
    return redirect('/auth');
});
Route::get('/admin1413914', function () {
    return redirect('/admin1413914/auth');
});

Route::get('/auth', '\App\Http\Controllers\UserController@index')->name('auth.index');
Route::post('/auth/login', '\App\Http\Controllers\UserController@authenticate')->name('auth.login');
Route::get('/auth/logout', '\App\Http\Controllers\UserController@logout')->name('auth.logout');

Route::get('/home', '\App\Http\Controllers\UserController@home')->middleware('user')->name('home');

Route::get('/admin1413914/auth', '\App\Http\Controllers\AdminController@index')->name('authAd.index');
Route::post('/admin1413914/auth/login', '\App\Http\Controllers\AdminController@authenticate')->name('authAd.login');
Route::get('/admin1413914/auth/logout', '\App\Http\Controllers\AdminController@logout')->name('authAd.logout');

Route::get('/admin1413914/home', '\App\Http\Controllers\AdminController@adminHome')->middleware('admin')->name('admin.home');

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/get/offense', function () {
    return Offense::all();
});
Route::get('/delete/offense', function (Request $request) {
    return Offense::where('id',$request->id)->delete();
});
Route::get('/get/license', function () {
    return LicensePlate::all();
});
