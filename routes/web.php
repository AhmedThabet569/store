<?php

use App\Http\Controllers\DashboardController;
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


// route  to dashboard 
Route::get('/dashboard/index',[DashboardController::class,'index']);

// match passing array of allowed method you want
// Route::match(['post','get'],'/dag',controller::,method name)

