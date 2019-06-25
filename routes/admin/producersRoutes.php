<?php 
Route::group(['prefix' => 'productores'], function () {

    Route::get('/', [
        'as' => 'producers.index',
        'uses' => 'ProducerController@index'
    ]);

    Route::get('/create', [
        'as' => 'producers.create',
        'uses' => 'ProducerController@create'
    ]);

    Route::post('store', [
        'as' => 'producers.store',
        'uses' => 'ProducerController@store'
    ]);

    Route::get('/show/{id}', [
        'as' => 'producers.show',
        'uses' => 'ProducerController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'producers.edit',
        'uses' => 'ProducerController@edit'
    ]);

    Route::patch('/update/{id}', [
        'as' => 'producers.update',
        'uses' => 'ProducerController@update'
    ]);

    Route::delete('/destroy/{id}', [
        'as' => 'producers.destroy',
        'uses' => 'ProducerController@destroy'
    ]);

});
