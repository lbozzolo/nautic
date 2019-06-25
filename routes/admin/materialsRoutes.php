<?php 
Route::group(['prefix' => 'materials'], function () {

    Route::get('/', [
        'as' => 'materials.index',
        'uses' => 'MaterialController@index'
    ]);

    Route::get('/create', [
        'as' => 'materials.create',
        'uses' => 'MaterialController@create'
    ]);

    Route::post('store', [
        'as' => 'materials.store',
        'uses' => 'MaterialController@store'
    ]);

    Route::get('/show/{id}', [
        'as' => 'materials.show',
        'uses' => 'MaterialController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'materials.edit',
        'uses' => 'MaterialController@edit'
    ]);

    Route::patch('/update/{id}', [
        'as' => 'materials.update',
        'uses' => 'MaterialController@update'
    ]);

    Route::delete('/destroy/{id}', [
        'as' => 'materials.destroy',
        'uses' => 'MaterialController@destroy'
    ]);

 

});
