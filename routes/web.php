<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//Route::resource('users', UserController::class)->except(['store', 'destroy']); //exceto store e destroy
Route::resource('users', UserController::class)->only(['index', 'show']); //apenas index e show
// Route::get('/', function () {
//     return view('welcome');
// });
