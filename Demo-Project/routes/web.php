<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});                                                             
Route::resource('users',UserController::class);
Route::get('login', [UserController::class,'index'])->name('users.loginShow');
Route::post('login', [UserController::class,'login'])->name('login');
Route::get('dashbord', [UserController::class,'dashboardShow'])->name('blogs.dashboard')->middleware('auth');
Route::resource('blogs',BlogController::class)->middleware('auth');