<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\publicController;
use App\Http\Controllers\admController;
use App\Http\Controllers\userController;
use App\Http\Middleware\publik;
use App\Http\Middleware\admin;
use App\Http\Middleware\user;

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

Route::view('/test', 'adm-layout');

Route::middleware([publik::class])->group(function () {
    Route::get('/', [publicController::class, 'landing'])->name('landing');
    // Route::get('/login', [publicController::class, 'login'])->name('login');
    // Route::post('/login/auth', [publicController::class, 'login_auth'])->name('login-auth');
    // Route::get('/register', [publicController::class, 'register'])->name('register');
    // Route::post('/register/submit', [publicController::class, 'register_submit'])->name('register-submit');

    Route::get('/adm/login', [admController::class, 'login'])->name('adm-login');
    Route::post('/adm/login/auth', [admController::class, 'login_auth'])->name('adm-login-auth');
    Route::get('/adm/register', [admController::class, 'register'])->name('adm-register');
    Route::post('/adm/register/submit', [admController::class, 'register_submit'])->name('adm-register-submit');
});

Route::middleware([user::class])->group(function () {
    // Route::get('/beranda', [userController::class, 'beranda'])->name('beranda');
    Route::get('/logout', [userController::class, 'logout'])->name('logout');
});

Route::middleware([admin::class])->group(function () {
    Route::get('/adm/beranda', [admController::class, 'beranda'])->name('adm-beranda');
    Route::get('/adm/logout', [admController::class, 'logout'])->name('adm-logout');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
