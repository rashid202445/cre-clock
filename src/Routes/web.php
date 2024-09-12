<?php


use Illuminate\Support\Facades\Route;
//use Cre\Clock\ClockProv\ClockFacdecs;
/**
 * Store front routes.
 */
//require 'store-front-routes.php';
Route::get('maptest',function(){
    return view("clock::map");
    //return ClockFacdecs::map();
});//->name('shop.checkout.cart.index');

Route::Get('map',[Cre\Clock\Http\Controllers\ClockFacdecs::class, 'map']);
