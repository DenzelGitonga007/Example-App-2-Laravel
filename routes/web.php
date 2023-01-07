<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

// Middleware for categories
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // Middleware for both categories and posts
    Route::group(['middleware' => ['is_admin']], function () {
        // Return the category resources/crud
        Route::resource('categories', CategoryController::class);
        // Posts routes
        Route::resource('posts', PostController::class);
    });
    
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



