<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

Route::view('/', 'home')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
	Route::get('/topics/create', [ProfileController::class, 'create'])
	->name('topics.create');

	Route::get('/app', [DashboardController::class, 'index'])
	->name('app.index');

	Route::get('/app/profile', [DashboardController::class, 'profile'])
	->name('app.profile');

	Route::get('/app/profile/delete', [DashboardController::class, 'delete'])
	->middleware('password.confirm')
	->name('app.delete');
});

Route::get('/profile/{userName:slug}', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/topics', [TopicController::class, 'index'])->name('topics.index');
Route::get('/topics/{topic}', [TopicController::class, 'show'])->name('topics.show');
Route::get('/topics/categories/{category:name}', [CategoryController::class, 'index'])
->name('categories.index');



require __DIR__ . '/auth.php';
