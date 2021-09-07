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

Route::get('/', [\App\Http\Controllers\WebsiteController::class, 'home'])->name("home");
Route::get("/about", [\App\Http\Controllers\WebsiteController::class, 'about'])->name("about");

Route::get("/auth/login", [\App\Http\Controllers\Admin\AuthController::class, 'loginPage'])->name("login_page");
Route::get("/admin/dashboard", [\App\Http\Controllers\Admin\AdminController::class, 'dashboardPage'])->name("dashboard");
