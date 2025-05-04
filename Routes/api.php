<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\BookingController;

//rate limiting to protect api
Route::prefix('v1')->middleware('throttle:60,1')->group(function () {

    // attendees can book/register without authentication
    Route::post('/attendees', [AttendeeController::class, 'store']);
    Route::get('/attendees/{id}', [AttendeeController::class, 'show']);

    Route::post('/bookings', [BookingController::class, 'store']);
    Route::get('/bookings', [BookingController::class, 'index']);

    // events list is public
    Route::get('/events', [EventController::class, 'index']);
    Route::get('/events/{id}', [EventController::class, 'show']);

    // Protected routes for authenticated users 
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/events', [EventController::class, 'store']);
        Route::put('/events/{id}', [EventController::class, 'update']);
        Route::delete('/events/{id}', [EventController::class, 'destroy']);
    });
});
