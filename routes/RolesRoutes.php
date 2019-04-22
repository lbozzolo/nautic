<?php 
Route::group(['prefix' => 'roles'], function () {

    Route::get('/', [
        'as' => 'roles.index',
        'uses' => 'RolesController@index'
    ]);

    Route::get('/create', [
        'as' => 'roles.create',
        'uses' => 'RolesController@present'
    ]);

    Route::get('/edit', [
        'as' => 'roles.edit',
        'uses' => 'RolesController@works'
    ]);

    Route::get('/update', [
        'as' => 'roles.update',
        'uses' => 'RolesController@update'
    ]);

    Route::get('/destroy', [
        'as' => 'roles.destroy',
        'uses' => 'RolesController@destroy'
    ]);


});
