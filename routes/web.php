<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::prefix('places')->group(function(){
    Route::view('/tokyo','places.tokyo')->name('places.tokyo');
    Route::view('/yokohama','places.yokohama')->name('places.yokohama');
    Route::view('/kyoto','places.kyoto')->name('places.kyoto');
    Route::view('/osaka','places.osaka')->name('places.osaka');
    Route::view('/sapporo','places.sapporo')->name('places.sapporo');
    Route::view('/nagoya','places.nagoya')->name('places.nagoya');

});
