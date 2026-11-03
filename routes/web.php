<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ParticipantController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/people', [ContactController::class, 'index'])->name('people.index');

Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::get('/donations', [DonationController::class, 'index'])->name('donations.index');

Route::get('/people/{contact}', [ContactController::class, 'show'])->name('people.show');

Route::get('/people/{contact}/donations/create', [DonationController::class, 'create'])->name('donations.create');

Route::post('/people/{contact}/donations', [DonationController::class, 'store'])->name('donations.store');

Route::get('/people/{contact}/events/register', [ParticipantController::class, 'create'])->name('participants.create');

Route::post('/people/{contact}/events', [ParticipantController::class, 'store'])->name('participants.store');
