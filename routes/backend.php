<?php

/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::redirect('/', \Shopper\Framework\Shopper::prefix() . '/dashboard', 301);
Route::prefix('dashboard')->group(function() {
    Route::get('/', 'DashboardController@index')->name('dashboard');
});