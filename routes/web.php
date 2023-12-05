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

include('admin.php');
Route::get('login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('admin.login');
Route::post('login/auth', [\App\Http\Controllers\Auth\AuthController::class, 'authLogin'])->name('admin.auth');
