<?php

Route::get('/', 'IndexController@readItems');
Route::post('addItem', 'IndexController@addItem');
Route::post('editItem', 'IndexController@editItem');
Route::post('deleteItem', 'IndexController@deleteItem');
