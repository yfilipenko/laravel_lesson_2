<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{id}', [BlogController::class, 'show'])->name('show');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::prefix('dashboard')->group(function(){
        Route::resource('posts', PostController::class);
        Route::view('/users', 'users.index');
        Route::view('/users/show', 'users.show');
        Route::view('/users/edit', 'users.edit');
        Route::view('/users/create', 'users.create');
    });
});