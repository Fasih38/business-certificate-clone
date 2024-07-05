<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/florida-certificate-of-status', [HomeController::class, 'florida_certificate_of_status']);
Route::get('/irs-ein-registration-service', [HomeController::class, 'irs_ein_registration_service']);
Route::get('/pricing', [HomeController::class, 'pricing']);
Route::get('/refund', [HomeController::class, 'refund']);
Route::get('/privacy', [HomeController::class, 'privacy']);
Route::get('/terms', [HomeController::class, 'terms']);
Route::prefix('document')->group(function () {
    Route::get('/', [DocumentController::class, 'index']);
    Route::post('/get_detail', [DocumentController::class, 'detail']);
});
