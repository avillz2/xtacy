<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingsController;

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


//Route::get('/admin', function () {
  // return view('admin.home');
//});

/*Route::get('/admin/addbooking', function () {
   return view('admin.addbooking');
 });


 Route::get('/admin/addroomt', function () {
    return view('admin.addroomt');
 });

 Route::get('/admin/adduser', function () {
    return view('admin.adduser');
 });

 Route::get('/admin/user', function () {
    return view('admin.user');
 });


 Route::get('/admin/roomt', function () {
    return view('admin.roomt');
 });*/


 //Route::get('/bookings/index', function () {
   //return view('bookings.index');
 //});
/*
 Route::get('/admin/setting', function () {
    return view('admin.setting');
 });

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/accommodation', function () {
    return view('accommodation');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
  return view('contact');
});*/

//Route::get('/bookings/index', 'App\Http\Controllers\BookingsControlle@index');
Route::resource('/bookings','App\Http\Controllers\BookingsController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
