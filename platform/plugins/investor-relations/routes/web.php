<?php

Route::group(['namespace' => 'Platform\InvestorRelations\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'investor-relations', 'as' => 'investor-relations.'], function () {
            Route::resource('', 'InvestorRelationsController')->parameters(['' => 'investor-relations']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'InvestorRelationsController@deletes',
                'permission' => 'investor-relations.destroy',
            ]); 
        });
    });

}); 
 