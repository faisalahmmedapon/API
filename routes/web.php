<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubscribeController;
use Illuminate\Support\Facades\Route;


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store')->name('login.store');

    Route::get('/logout', 'logout')->name('logout');
});
Route::controller(RegisterController::class)->as('register.')->group(function () {
    Route::get('/register', 'create')->name('create');
    Route::post('/register', 'store')->name('store');
});

Route::middleware('auth')->controller(BackendController::class)->group(function () {
    Route::get('/admin/dashboard', 'index')->name('admin.dashboard');
});



Route::middleware('auth')->group(function(){
    Route::resource('admin/dashboard/plans', PlanController::class);

    Route::get('/subscribe/{id}', [SubscribeController::class, 'store'])->name('subscribe');
});





Route::get('/users', [FrontendController::class, 'users'])->name('users');



