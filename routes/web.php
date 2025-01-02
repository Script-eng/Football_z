<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\MatchsController;
use App\Http\Controllers\SpectatorController;
use App\Http\Controllers\DataController;

// Public Routes
Route::get('/', function () {
    return view('home');
});

Route::resource('matches', MatchsController::class)->middleware('auth');
Route::resource('entries', EntryController::class)->middleware('auth');
Route::resource('spectators', SpectatorController::class)->middleware('auth');
Route::get('/data', [DataController::class, 'index'])->name('data.index');
Route::get('/data/form', [DataController::class, 'form'])->name('data.form');

// Route::get('/entries', [EntryController::class, 'index'])->name('entries.index');
//Route::get('/spectators', [SpectatorController::class, 'index'])->name('spectators.index');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    // Role-Specific Routes
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin', function () {
            return view('admin.dashboard');
        });
    });

    Route::middleware('role:user')->group(function () {
        Route::get('/user', function () {
            return view('user.dashboard');
        });
    });

    // Profile Management Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});

require __DIR__.'/auth.php';