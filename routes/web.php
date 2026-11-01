<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/people', [ContactController::class, 'index'])->name('people.index');

Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::get('/donation', [EventController::class, 'index'])->name('doantion.index');
