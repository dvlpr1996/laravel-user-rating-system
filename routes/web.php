<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\ProfileController;

Route::view('/', 'home')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
	Route::get('/profile/{userName:slug}', [ProfileController::class, 'index'])->name('profile.index');
	Route::get('/topics/create', [ProfileController::class, 'create'])->name('topics.create');
});


Route::get('/topics', [TopicController::class, 'index'])->name('topics.index');

Route::get('/dashboard', function () {
	return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
