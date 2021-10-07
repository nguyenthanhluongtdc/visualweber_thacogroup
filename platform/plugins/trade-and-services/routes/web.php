<?php

Route::group(['namespace' => 'Platform\TradeAndServices\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'trade-and-services', 'as' => 'trade-and-services.'], function () {
            Route::resource('', 'TradeAndServicesController')->parameters(['' => 'trade-and-services']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'TradeAndServicesController@deletes',
                'permission' => 'trade-and-services.destroy',
            ]);
        });
    });

});
