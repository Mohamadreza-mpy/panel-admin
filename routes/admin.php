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
        Route::get('role/create', 'getCreate')->name('role.create');
        Route::post('role/store', 'postCreate')->name('role.create');
        Route::get('role/edit/{id}', 'getEdit')->name('role.edit');
        Route::post('role/update/{id}', 'postEdit')->name('role.edit');
        Route::get('role/delete/{id}', 'delete')->name('role.delete');
    });

    Route::controller(\App\Http\Controllers\Admin\UserController::class)->group(function (){
        Route::get('users', 'index')->name('users.index');
        Route::get('users/create', 'getCreate')->name('users.create');
        Route::post('users/store', 'postCreate')->name('users.create');
        Route::get('users/edit/{id}', 'getEdit')->name('users.edit');
        Route::post('users/update/{id}', 'postEdit')->name('users.edit');
        Route::get('users/delete/{id}', 'delete')->name('users.delete');
    });

    Route::controller(\App\Http\Controllers\Admin\ArticleController::class)->group(function (){
        Route::get('article', 'index')->name('article.index');
        Route::get('article/create', 'getCreate')->name('article.create');
        Route::post('article/store', 'postCreate')->name('article.create');
        Route::get('article/edit/{id}', 'getEdit')->name('article.edit');
        Route::post('article/update/{id}', 'postEdit')->name('article.edit');
        Route::get('article/delete/{id}', 'delete')->name('article.delete');
    });







});
