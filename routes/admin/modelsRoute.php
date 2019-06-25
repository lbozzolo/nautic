<?php

Route::group(['prefix'=> 'models'], function(){
       
        Route::get('index', [
            'as' => 'models.index',
            'uses' => 'ModelsController@index'
        ]);

        Route::get('create', [
            'as' => 'models.create',
            'uses' => 'ModelsController@create'
        ]);

        Route::post('store', [
            'as' => 'models.store',
            'uses' => 'ModelsController@store'
        ]);

        Route::group(['prefix' => '{id?}'], function() {


            Route::get('edit', [
                'as' => 'models.edit',
                'uses' => 'ModelsController@edit'        
            ]);

            Route::get('show', [
                'as' => 'models.show',
                'uses' => 'ModelsController@show'
            ]);

            Route::put('udpate', [
                'as' => 'models.update',
                'uses' => 'ModelsController@update'        
            ]);

            Route::delete('destroy', [
                'as' => 'models.destroy',
                'uses' => 'ModelsController@destroy'        
            ]);



        });
        


    });