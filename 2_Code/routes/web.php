<?php
// written by: Driane PPerez
    // tested by: Driane Perez
    // debugged by: Driane Perez

use App\Http\Controllers\add_delays;
use App\Http\Controllers\addvoyage;
use App\Http\Controllers\Controllerdelay;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\delays;
use App\Http\Controllers\forgot_password;
use App\Http\Controllers\login;
use App\Http\Controllers\profile;
use App\Http\Controllers\register;
use App\Http\Controllers\reports;
use App\Http\Controllers\ship_schedule;
use App\Http\Controllers\VesselController;

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
Route::get('ship',[ship_schedule::class,'index'])->name('ship');
Route::get('delays',[delays::class,'index']);
Route::get('addvoyage',[addvoyage::class,'index']);
Route::get('forgot_password',[forgot_password::class,'index']);
Route::get('login',[login::class,'index']);
Route::get('profile',[profile::class,'index']);
Route::get('register',[register::class,'index']);
Route::get('reports',[reports::class,'index']);
Route::get('shipdschedule',[ship_schedule::class,'index']);
Route::get('Dashboard/{id}',[Dashboard::class,'show']);
Route::resource('/vessels',VesselController::class);
Route::resource('/delay',Controllerdelay::class);







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
