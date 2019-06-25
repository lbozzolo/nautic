<?php 
Route::group(['prefix' => 'tiposCombustible'], function () {

    Route::get('/', [
        'as' => 'fueltypes.index',
        'uses' => 'FueltypeController@index'
    ]);

    Route::get('/create', [
        'as' => 'fueltypes.create',
        'uses' => 'FueltypeController@create'
    ]);

    Route::post('store', [
        'as' => 'fueltypes.store',
        'uses' => 'FueltypeController@store'
    ]);

    Route::get('/show/{id}', [
        'as' => 'fueltypes.show',
        'uses' => 'FueltypeController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'fueltypes.edit',
        'uses' => 'FueltypeController@edit'
    ]);

    Route::patch('/update/{id}', [
        'as' => 'fueltypes.update',
        'uses' => 'FueltypeController@update'
    ]);

    Route::delete('/destroy/{id}', [
        'as' => 'fueltypes.destroy',
        'uses' => 'FueltypeController@destroy'
    ]);

 

});
