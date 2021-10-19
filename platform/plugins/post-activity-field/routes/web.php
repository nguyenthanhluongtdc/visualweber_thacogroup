<?php

Route::group(['namespace' => 'Platform\PostActivityField\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'post-activity-fields', 'as' => 'post-activity-field.'], function () {
            Route::resource('', 'PostActivityFieldController')->parameters(['' => 'post-activity-field']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'PostActivityFieldController@deletes',
                'permission' => 'post-activity-field.destroy',
            ]);
        });
    });

});
 