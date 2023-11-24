<?php

use Illuminate\Support\Facades\Route;

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



Route::prefix('admin')->name('admin.')->group(function (){



    Route::controller(\App\Http\Controllers\Admin\HomeController::class)->group(function (){
        Route::get('/', 'index')->name('dashboard');
    });

    Route::controller(\App\Http\Controllers\Admin\RoleController::class)->group(function (){
        Route::get('role','index')->name('role.index');
    });






});
