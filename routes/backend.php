<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Backend', 'as' => 'admin.'], function () {

    Route::get('/', 'Index\IndexController@main')->name('index');

    // Properties
    Route::group(['prefix' => 'properties', 'namespace' => 'Properties', 'as' => 'properties.'], function () {
        Route::get('/', 'PropertiesController@index')->name('index');
        Route::get('/create/', 'PropertiesController@create')->name('create');
        Route::post('/create/', 'PropertiesController@store')->name('store');
        Route::get('/{id}/', 'PropertiesController@edit')->name('edit');
        Route::post('/{id}/', 'PropertiesController@update')->name('update');
        Route::get('delete/{id}/', 'PropertiesController@destroy')->name('destroy');
    });

    // Kitchens
    Route::group(['prefix' => 'kitchens', 'namespace' => 'Kitchens', 'as' => 'kitchens.'], function () {
        Route::get('/', 'KitchensController@index')->name('index');
        Route::get('/create/', 'KitchensController@create')->name('create');
        Route::post('/create/', 'KitchensController@store')->name('store');
        Route::get('/{id}/', 'KitchensController@edit')->name('edit');
        Route::post('/{id}/', 'KitchensController@update')->name('update');
        Route::get('delete/{id}/', 'KitchensController@destroy')->name('destroy');
    });

    // Events
    Route::group(['prefix' => 'events', 'namespace' => 'Events', 'as' => 'events.'], function () {
        Route::get('/', 'EventsController@index')->name('index');
        Route::get('/create/', 'EventsController@create')->name('create');
        Route::post('/create/', 'EventsController@store')->name('store');
        Route::get('/{id}/', 'EventsController@edit')->name('edit');
        Route::post('/{id}/', 'EventsController@update')->name('update');
        Route::get('delete/{id}/', 'EventsController@destroy')->name('destroy');
    });

    // Restaurant Types
    Route::group(['prefix' => 'restaurant_types', 'namespace' => 'RestaurantTypes', 'as' => 'restaurant_types.'], function () {
        Route::get('/', 'RestaurantTypesController@index')->name('index');
        Route::get('/create/', 'RestaurantTypesController@create')->name('create');
        Route::post('/create/', 'RestaurantTypesController@store')->name('store');
        Route::get('/{id}/', 'RestaurantTypesController@edit')->name('edit');
        Route::post('/{id}/', 'RestaurantTypesController@update')->name('update');
        Route::get('delete/{id}/', 'RestaurantTypesController@destroy')->name('destroy');
    });

    // Restaurants
    Route::group(['prefix' => 'restaurants', 'namespace' => 'Restaurants', 'as' => 'restaurants.'], function () {
        Route::get('/', 'RestaurantsController@index')->name('index');
        Route::get('/create/', 'RestaurantsController@create')->name('create');
        Route::post('/create/', 'RestaurantsController@store')->name('store');
        Route::get('/{id}/', 'RestaurantsController@edit')->name('edit');
        Route::post('/{id}/', 'RestaurantsController@update')->name('update');
        Route::get('delete/{id}/', 'RestaurantsController@destroy')->name('destroy');
    });


});