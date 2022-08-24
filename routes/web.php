<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

Route::view('/', 'home')->name('home');


Route::middleware(['auth', 'verified'])->group(function () {
	Route::get('/topics/create', [TopicController::class, 'create'])->name('topics.create');
	Route::post('/topics/store', [TopicController::class, 'store'])->name('topics.store');
	Route::get('/topics/delete/{topic}', [TopicController::class, 'delete'])->name('topics.delete');

	Route::get('/answer/delete/{answer}', [AnswerController::class, 'delete'])->name('answer.delete');
	Route::post('/topics/{topic}/answer', [AnswerController::class, 'store'])->name('answer.store');

	Route::post('/reports', [ReportController::class, 'create'])->name('reports.create');
});

Route::prefix('profile/{userName:slug}')->group(function () {
	Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
	Route::get('/badge', [ProfileController::class, 'showBadge'])->name('profile.badge');
});

Route::prefix('topics')->group(function () {
	Route::get('/', [TopicController::class, 'index'])->name('topics.index');
	Route::get('/{topic}', [TopicController::class, 'show'])->name('topics.show');
	Route::get('/categories/{category:slug}', [CategoryController::class, 'index'])
		->name('categories.index');
});

require __DIR__ . '/auth.php';
