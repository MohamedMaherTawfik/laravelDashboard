<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/protofolio',[HomeController::class ,'index'])->name('home');


Route::get('/dashboard',[AdminController::class ,'index'])->name('dashboard');
Route::get('/dashboard/create',[AdminController::class ,'create'])->name('admin.create');
Route::post('/dashboard/store',[AdminController::class ,'store'])->name('admin.store');
