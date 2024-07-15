<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/history', [HomeController::class, 'history'])->name('home.history');
Route::get('/visi', [HomeController::class, 'visi'])->name('home.visi');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('admin/cms', [DashboardController::class, 'cms'])->name('admin.cms');
    Route::put('/admin/cms/{id}', [DashboardController::class, 'update'])->name('header.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('admin/posts', [PostController::class, 'index'])->name('admin.posts.index');
    Route::get('admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('admin/posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('admin/posts/{id}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('admin/posts/{id}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('admin/posts/{id}', [PostController::class, 'destroy'])->name('admin.posts.destroy');
    Route::get('admin/posts/data', [PostController::class, 'dataPost'])->name('posts.data');

    Route::get('admin/notes', [NoteController::class, 'index'])->name('admin.notes.index');
    Route::get('admin/notes/create', [NoteController::class, 'create'])->name('admin.notes.create');
    Route::post('admin/notes', [NoteController::class, 'store'])->name('admin.notes.store');
    Route::get('admin/notes/{id}/edit', [NoteController::class, 'edit'])->name('admin.notes.edit');
    Route::put('admin/notes/{id}', [NoteController::class, 'update'])->name('admin.notes.update');
    Route::delete('admin/notes/{id}', [NoteController::class, 'destroy'])->name('admin.notes.destroy');
    Route::get('admin/notes/data', [NoteController::class, 'dataPost'])->name('article.data');

});

require __DIR__.'/auth.php';
