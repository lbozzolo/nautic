<?php 
Route::group(['prefix' => 'tipos'], function () {

    Route::get('/', [
        'as' => 'types.index',
        'uses' => 'TypeController@index'
    ]);

    Route::get('/create', [
        'as' => 'types.create',
        'uses' => 'TypeController@create'
    ]);

    Route::post('store', [
        'as' => 'types.store',
        'uses' => 'TypeController@store'
    ]);

    Route::get('/show/{id}', [
        'as' => 'types.show',
        'uses' => 'TypeController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'types.edit',
        'uses' => 'TypeController@edit'
    ]);

    Route::patch('/update/{id}', [
        'as' => 'types.update',
        'uses' => 'TypeController@update'
    ]);

    Route::delete('/destroy/{id}', [
        'as' => 'types.destroy',
        'uses' => 'TypeController@destroy'
    ]);

});
