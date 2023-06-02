<?php

use App\Http\Controllers\Api\CheckoutController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\BookmarkController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\Auth;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('auth/register', Auth\RegisterController::class);
Route::post('auth/login', Auth\LoginController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('profile', [Auth\ProfileController::class, 'show']);
    Route::put('profile', [Auth\ProfileController::class, 'update']);
    Route::put('password', Auth\PasswordUpdateController::class);
    Route::post('auth/logout', Auth\LogoutController::class);
    Route::apiResource('events', EventController::class);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('bookmarks', BookmarkController::class)->only(['store', 'destroy']);
    Route::post('checkout', [CheckoutController::class, 'payConfirm'])->name('checkout.payConfirm');
    Route::get('allBookings', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::get('getBooking', [CheckoutController::class, 'getBooking'])->name('checkout.getBooking');
    Route::get('getBookings', [CheckoutController::class, 'getBookings'])->name('checkout.getBookings');
    Route::get('getBookingsByEvent', [CheckoutController::class, 'getBookingsByEvent'])->name('checkout.getBookingsByEvent');
    Route::get('getBookingsByUser', [CheckoutController::class, 'getBookingsByUser'])->name('checkout.getBookingsByUser');
    Route::post('useTicket', [CheckoutController::class, 'useTicket'])->name('checkout.useTicket');

});

//Route::apiResource('products', ProductController::class);
