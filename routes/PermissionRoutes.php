<?php 
Route::group(['prefix' => 'permissions'], function () {

    Route::get('/', [
        'as' => 'permissions.index',
        'uses' => 'PermissionsController@index'
    ]);

    Route::get('/create', [
        'as' => 'permissions.create',
        'uses' => 'PermissionsController@present'
    ]);

    Route::get('/edit', [
        'as' => 'permissions.edit',
        'uses' => 'PermissionsController@works'
    ]);

    Route::get('/update', [
        'as' => 'permissions.update',
        'uses' => 'PermissionsController@update'
    ]);

    Route::get('/destroy', [
        'as' => 'permissions.destroy',
        'uses' => 'PermissionsController@destroy'
    ]);

 

});
