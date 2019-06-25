<?php 
Route::group(['prefix' => 'astilleros'], function () {

    Route::get('/', [
        'as' => 'shipyards.index',
        'uses' => 'ShipyardController@index'
    ]);

    Route::get('/create', [
        'as' => 'shipyards.create',
        'uses' => 'ShipyardController@create'
    ]);

    Route::post('store', [
        'as' => 'shipyards.store',
        'uses' => 'ShipyardController@store'
    ]);

    Route::get('/show/{id}', [
        'as' => 'shipyards.show',
        'uses' => 'ShipyardController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'shipyards.edit',
        'uses' => 'ShipyardController@edit'
    ]);

    Route::patch('/update/{id}', [
        'as' => 'shipyards.update',
        'uses' => 'ShipyardController@update'
    ]);

    Route::delete('/destroy/{id}', [
        'as' => 'shipyards.destroy',
        'uses' => 'ShipyardController@destroy'
    ]);

});
