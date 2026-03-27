<?php

use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/state', function () {
    return view('state');
})->name('state');

Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');
