<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SimpleQRcodeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/users', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('users');
Route::get('/dashboard/users/qrcode/{id}', [SimpleQRcodeController::class, 'generate'])->middleware(['auth', 'verified'])->name('generate-qrcode');
Route::get('/dashboard/users/qrcode/delete/{id}', [SimpleQRcodeController::class, 'delete'])->middleware(['auth', 'verified'])->name('delete-qrcode');
Route::get('/users/badged/{id}', [UserController::class, 'badged'])->name('badged');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/dashboard/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/dashboard/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
