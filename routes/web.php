<?php

Auth::routes();

Route::redirect('/','/login');

Route::group(['middleware' => ['auth']],function() { 

    Route::get('/dashboard','DashboardController@index')->name('dashboard.index');

    Route::group(['middleware' => ['role:admin']],function() { 

        Route::group(['middleware' => ['role:admin']],function() { 
            Route::resource('users','UsersController');                
        });
    });    
});