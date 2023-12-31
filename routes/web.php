<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FavoriteController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts/create', 'create')->name('create');
    Route::get('/posts/{post}', 'show')->name('show');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', 'delete')->name('delete');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');

});

Route::post('/{id}/favorite', [FavoriteController::class, 'store'])->name('favorites.favorite');
Route::delete('/{id}/unfavorite', [FavoriteController::class, 'delete'])->name('favorites.unfavorite');

//Route::get('/comments', [CommentController::class]);

Route::post('/posts/{post}/comments', [CommentController::class, 'show']);
Route::get('/comment', [CommentController::class, 'create'])->name('comment.create');
Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
Route::post('/comments/{post}', [CommentController::class, 'store']);
Route::delete('/comments/{comment}', [CommentController::class, 'delete']);
Route::get('/categories/{category}', [CategoryController::class,'index'])->middleware("auth");


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});


require __DIR__.'/auth.php';