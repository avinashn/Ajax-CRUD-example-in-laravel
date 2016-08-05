<?php

/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register all of the routes for an application.
 * | It's a breeze. Simply tell Laravel the URIs it should respond to
 * | and give it the controller to call when that URI is requested.
 * |
 */
Route::get ( '/', 'IndexController@readItems' );
Route::post ( '/addItem', 'IndexController@addItem' );
Route::post ( '/editItem', 'IndexController@editItem' );
Route::post ( '/deleteItem', 'IndexController@deleteItem' );
