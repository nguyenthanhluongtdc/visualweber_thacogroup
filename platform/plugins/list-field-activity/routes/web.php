<?php

Route::group(['namespace' => 'Platform\ListFieldActivity\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'list-field-activities', 'as' => 'list-field-activity.'], function () {
            Route::resource('', 'ListFieldActivityController')->parameters(['' => 'list-field-activity']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'ListFieldActivityController@deletes',
                'permission' => 'list-field-activity.destroy',
            ]);
        });
    });

});
