<?php


use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::view('/','home.index')->name('home');
Route::redirect('/home','/')->name('home.redirect');
Route::get('blog', [BlogController::class,'index'])->name('blog');
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::get('blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');
//Route::middleware('guest')->group(function (){
    Route::get('registration', [RegistrationController::class, 'index'])->name('registration');
    Route::post('registration', [RegistrationController::class, 'store'])->name('registration.store');

    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');
    Route::get('login/{user}/confirmation', [LoginController::class, 'confirmation'])->name('login.confirmation');
    Route::post('login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');
//});



