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

    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {
        Route::get('{slug}/search', 'PublicController@getSearch')
        ->name('public.search-post-investor');

        
        Route::group(['prefix'=>'api', 'as'=> 'api-investor.'], function() {
            Route::get('investor/download', [
                'as'    => 'download',
                'uses'  => 'PublicController@zipDownload',
            ]);
    
            Route::get('sharehoder',[
                'as'    => 'sharehoder',
                'uses'  => 'PublicController@getShareholder'
            ]);
        });

    });
});
