<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DonationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/people', [ContactController::class, 'index'])->name('people.index');

Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::get('/donations', [DonationController::class, 'index'])->name('donations.index');

Route::get('/people/{contact}', [ContactController::class, 'show'])->name('people.show');

