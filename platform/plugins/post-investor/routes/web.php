<?php

Route::group(['namespace' => 'Platform\PostInvestor\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'post-investors', 'as' => 'post-investor.'], function () {
            Route::resource('', 'PostInvestorController')->parameters(['' => 'post-investor']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'PostInvestorController@deletes',
                'permission' => 'post-investor.destroy',
            ]);
        });
    });

});
