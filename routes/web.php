<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;

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
Route::get('Dashboard',[Dashboard::class,'index']);





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
