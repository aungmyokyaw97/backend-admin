<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\DashboardController;
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

Route::controller(LoginController::class)->group(function(){
    Route::get( '/', 'login' )->name('login');    
    Route::post('/login', 'loginSubmit' )->name('loginSubmit');
});

Route::middleware('auth')->group(function(){

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::post('/logout',[LogoutController::class,'logout'])->name('logout');

    Route::resource('users',UserController::class);    
    Route::resource('departments',DepartmentController::class);
    Route::resource('roles',RoleController::class);
    Route::get('profile',[UserController::class,'profile'])->name('profile');    
    Route::patch('profile/update',[UserController::class,'profileUpdate'])->name('profile.update');


});