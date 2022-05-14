<?php

use App\Http\Controllers\add_delays;
use App\Http\Controllers\addvoyage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\delays;
use App\Http\Controllers\forgot_password;
use App\Http\Controllers\login;
use App\Http\Controllers\profile;
use App\Http\Controllers\register;
use App\Http\Controllers\reports;
use App\Http\Controllers\shipdschedule;
use Illuminate\Support\Facades\Auth;

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
//route that send back a view
Route::get('/', function () {
    return view('welcome');
});
//laravel 8 (new)
Route::get('Dashboard',[Dashboard::class,'index'])->name('Dashboard');
Route::get('add_delays',[add_delays::class,'index']);
Route::get('delays',[delays::class,'index']);
Route::get('addvoyage',[addvoyage::class,'index']);
Route::get('forgot_password',[forgot_password::class,'index']);
Route::get('login',[login::class,'index']);
Route::get('profile',[profile::class,'index']);
Route::get('register',[register::class,'index']);
Route::get('reports',[reports::class,'index']);
Route::get('shipdschedule',[shipdschedule::class,'index']);
Route::get('Dashboard/{id}',[Dashboard::class,'show']);







//example of routes

// //routes to the user 
// Route::get('/users', function () {
//     return 'welcome to the user page';
// });
// //routes to the user with array(JSON)
// Route::get('/users', function () {
//     return ['php','larvel'];
// });
// //routes to the user with JSON object
// Route::get('/users', function () {
//     return response()->json([
//         'name' => 'Driane',
//         'course' => 'laravel'
//     ]);
// });
// //redirect to home page
// Route::get('/users',function(){
//     return redirect('/');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
