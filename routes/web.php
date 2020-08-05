<?php

use Illuminate\Support\Facades\Route;

// vuejs, react, angular

Route::group([ 'prefix' => 'app' ], function() {
    // Will catch any request and links below this one will act as dummy placeholder named routes
    Route::get('/{any_path?}', 'SpaController@index')->where('any_path', '(.*)');

    Route::get('/profile/{username}', 'SpaController@nonexisting')->name('app.profile');
    Route::get('/about', 'SpaController@nonexisting')->name('app.about');

});
