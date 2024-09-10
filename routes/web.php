<?php

use App\Http\Controllers\SimpleQRcodeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route pour générer un QR Code
Route::get('/qrcode/{id}', [SimpleQRcodeController::class, 'generate']);
Route::get('/badged/{id}')->name('badged'); // Badgé ma présence.