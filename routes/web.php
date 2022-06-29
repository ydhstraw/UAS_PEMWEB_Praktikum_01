<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestingDev;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// HOME
Route::get('/',[HomeController::class,'home']);
Route::get('/details/{id}',[HomeController::class,'details']);
Route::get('/aboutUs',[HomeController::class,'aboutUs']);
Route::post('/search',[HomeController::class,'search']);

// USER
Route::get('/register',[UserController::class,'register']);
Route::post('/registerValidity',[UserController::class,'registerValidity']);
Route::get('/login',[UserController::class,'login']);
Route::post('/loginValidity',[UserController::class,'loginValidity']);
Route::get('/logout',[UserController::class,'logout']);

// MIDDLEWARE GROUP ADMIN
Route::group(['middleware'=>['adminProtectedPage']], function(){

    // ADMIN
    Route::get('/admin/hotels',[AdminController::class,'hotels']);
    Route::get('/admin/insert',[AdminController::class,'insert']);
    Route::post('/admin/insertValidity',[AdminController::class,'insertValidity']);
    Route::get('/admin/details/{id}',[AdminController::class,'details']);
    Route::get('/admin/action/{id}',[AdminController::class,'action']);
    Route::post('/admin/updateValidity',[AdminController::class,'updateValidity']);
    Route::get('/admin/delete/{id}',[AdminController::class,'delete']);
    Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
    Route::get('/admin/bookings',[AdminController::class,'bookings']);
});

// MIDDLEWARE GROUP USER
Route::group(['middleware'=>['userProtectedPage']], function(){
    
    // MUST LOGIN FIRST
    Route::get('/profile',[UserController::class,'profile']);
    Route::post('/profileUpdate',[UserController::class,'profileUpdate']);
    Route::get('/details/{id}',[HomeController::class,'details']);
    Route::post('/booking',[HomeController::class,'booking']);
    Route::get('/history',[HomeController::class,'history']);
    Route::get('/invoice/{id}',[HomeController::class,'invoice']);
});

// FORBIDDEN
Route::view('/notAdmin','forbidden.notAdmin');

// TESTING DEV TOOLS
Route::get('/testConnection',[TestingDev::class,'testConnection']);
Route::get('/getSession',[TestingDev::class,'getSession']);
Route::get('/deleteSession',[TestingDev::class,'deleteSession']);