<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
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


Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('/show/{id}', [PostController::class, 'show'])->name('posts.show'); 


Route::get('/about', function () {
     return view('about');
});


Route::middleware(['auth'])->group(function () {
    
    Route::controller(CommentController::class)->group(function () {
            Route::post('/comment/store', 'store')->name('comment.store');
            Route::delete('/comment/{id}/destroy', 'destroy')->name('comment.destroy');
    });
});


Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
     Route::resource('posts', PostController::class)
         ->except(['index', 'show']);
    
    
    Route::get('/category', [CategoryController::class, 'index'])
            ->name('category');
     Route::resource('categories', CategoryController::class);

});

require __DIR__.'/auth.php';
