<?php 
Route::group(['prefix' => 'models'], function () {

    Route::get('/', [
        'as' => 'models.index',
        'uses' => 'ModelsController@index'
    ]);

    Route::get('/models', [
        'as' => 'permissions.create',
        'uses' => 'ModelsController@present'
    ]);

    Route::get('/edit', [
        'as' => 'models.edit',
        'uses' => 'ModelsController@works'
    ]);

    Route::get('/update', [
        'as' => 'models.update',
        'uses' => 'ModelsController@update'
    ]);

    Route::get('/destroy', [
        'as' => 'models.destroy',
        'uses' => 'ModelsController@destroy'
    ]);

 

});
