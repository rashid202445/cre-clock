<?php

use Illuminate\Support\Facades\Route;
use Cre\Clock\ClockProv\ClockFacdecs;
//use Webkul\Shop\Http\Controllers\CartController;
//use Webkul\Shop\Http\Controllers\OnepageController;
Route::get('maptest',function(){
   // return ClockFacdecs::map();
})->name('shop.checkout.cart.index');
 /**
Route::group(['middleware' => ['locale', 'theme', 'currency']], function () {

     * Cart routes.

    Route::controller(CartController::class)->prefix('checkout/cart')->group(function () {
        Route::get('', 'index')->name('shop.checkout.cart.index');
    });

    Route::controller(OnepageController::class)->prefix('checkout/onepage')->group(function () {
        Route::get('', 'index')->name('shop.checkout.onepage.index');

        Route::get('success', 'success')->name('shop.checkout.onepage.success');
    });
});
 */
