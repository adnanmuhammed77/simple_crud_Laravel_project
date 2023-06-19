<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get('/dashboard',[DashboardController::class,'index']);
});

//product details

Route::get('/productup', [ProductController::class, 'index']);

Route::post('/productup', [ProductController::class, 'store']);


//admin side

Route::get('/productdetails',[DashboardController::class,'ProductDetails']);

Route::get('/adminregister',[DashboardController::class,'UserDetails']);

//user registr admin side

Route::get('/reg',[DashboardController::class,'UserReg']);

//edit products
Route::get('/edit/{id}',[ProductController::class,'edit']); 
Route::put('update/{id}',[ProductController::class,'update']);
//delete products

Route::get('/delete/{id}',[ProductController::class,'destroy']); 

Route::get('/userview', [HomeController::class, 'UserView']);

