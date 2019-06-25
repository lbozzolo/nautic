<?php 
Route::group(['prefix' => 'modelos'], function () {

    Route::get('/', [
        'as' => 'models.index',
        'uses' => 'ModelController@index'
    ]);

    Route::get('/create', [
        'as' => 'models.create',
        'uses' => 'ModelController@create'
    ]);

    Route::post('store', [
        'as' => 'models.store',
        'uses' => 'ModelController@store'
    ]);

    Route::get('/show/{id}', [
        'as' => 'models.show',
        'uses' => 'ModelController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'models.edit',
        'uses' => 'ModelController@edit'
    ]);

    Route::patch('/update/{id}', [
        'as' => 'models.update',
        'uses' => 'ModelController@update'
    ]);

    Route::delete('/destroy/{id}', [
        'as' => 'models.destroy',
        'uses' => 'ModelController@destroy'
    ]);

 

});
