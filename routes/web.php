<?php

use App\Http\Controllers\customAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formDataController;

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
Route::post('/form',[formDataController::class,'addData'])->name('form');
Route::get('/deleterow/{id}',[formDataController::class,'deleterow'])->name('deleter')->Middleware('islogin');
Route::post('/form2',[formDataController::class,'addData2'])->name('form2');
Route::view('/login','login')->name('login')->Middleware('islogout');
Route::post('/dashboards',[customAuthController::class,'loginuser'])->name('loginuserss');
Route::get('/dashboard',[customAuthController::class,'dashboard'])->Middleware('islogin');
Route::get('/logout',[customAuthController::class,'logout'])->name('Logout');