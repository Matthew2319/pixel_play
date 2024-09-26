<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

//For Unauthenticated users
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/browse', function () {
    return view('browse');
})->name('browse');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/trending', function () {
    return view('trending');
})->name('trending');

Route::get('/newer', function () {
    return view('newer');
})->name('newer');


//for Administrators
Route::middleware(['auth:sanctum','verified','rolecheck:admin'])->group(function(){
    Route::get('/adminposts', [AdminController::class, 'index'])->name('adminposts');
});

//for Authenticated Users
Route::middleware(['auth:sanctum','verified','rolecheck:customer'])->group(function(){
    Route::get('/customerposts', [CustomerController::class, 'index'])->name('customerposts');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
