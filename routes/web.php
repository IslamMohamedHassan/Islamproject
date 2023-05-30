<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Product\ProductController;
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

//root
Route::get('' , fn()=>redirect(route('home'))); 

//main page
Route::get('/home' ,[HomeController::class , 'index'])->name('home'); 

//auth
Route::get('login' ,[AuthController::class , 'register'])->name('register'); 
Route::post('store-user' ,[AuthController::class , 'storeUser'])->name('storeUser'); 
Route::get('logout' ,[AuthController::class , 'logout'])->name('logout'); 

//products
Route::get('product/{id}' ,[ProductController::class , 'viewProduct'])->name('product'); 


Route::get('dd' , function (){
    dd(session()->all()); 
}); 