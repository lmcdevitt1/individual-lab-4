<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use Inertia\Inertia;


Route::controller(ItemController::class)->group(function () {

    Route::get('/', 'welcome')->name('home');

});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

});

Route::controller(ItemController::class)->group(function () {

    Route::get('/items', 'index')->name('items.index');

});

require __DIR__.'/settings.php';
Route::middleware(['auth', 'verified'])->group(function() {

	Route::get('/dashboard', function() {
		return Inertia::render('dashboard');
	})->name('dashboard');

});
Route::controller(ItemController::class)->group(function () {
    Route::get('/items', 'index')->name('items.index');
});

require __DIR__.'/settings.php';
