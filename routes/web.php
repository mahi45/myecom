<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\TestimonialController;

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
// Route::get('/', function () {
//     return view('frontend.pages.home');
// });

Route::prefix('')->group(function(){
    Route::get('/', [HomeController::class, 'home'])->name('home');
});


Route::prefix('admin/')->group(function(){
    Route::get('login', [LoginController::class, 'loginPage'])->name('admin.loginpage');
    Route::POST('login', [LoginController::class, 'login'])->name('admin.login');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth')->group(function(){
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    });

    // Category Route
    Route::resource('category', CategoryController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('product', ProductController::class);

});


