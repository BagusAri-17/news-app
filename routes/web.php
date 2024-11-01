<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Dashboard\NewsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', LandingController::class);
Route::get('/detail', [LandingController::class, 'detail_news']);

// Route::get('/dashboard', function () {
//     return view('pages.dashboard.admin.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/create', function () {
//     return view('pages.dashboard.admin.create');
// })->middleware(['auth', 'verified'])->name('create');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'verified']], function() {
    Route::resource('dashboard', NewsController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
