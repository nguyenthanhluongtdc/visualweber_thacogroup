<?php

// Custom routes
// You can delete this route group if you don't need to add your custom routes.
Route::group(['namespace' => 'Theme\Main\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        // Add your custom route here
        // Ex: Route::get('hello', 'MainController@getHello');
       

        Route::get('/search', 'MainController@getSearch')
                ->name('public.search');

        //video

        Route::prefix('api')->group(function () {
            Route::get('/filter/album/image', 'ApiController@getFilterImage');
            Route::post('/download/album/image', 'ApiController@zipDownload');

            Route::get('/get/video/post/{id}', 'ApiController@getGalleryVideoPost');
            Route::get('/get/gallery/post/{id}', 'ApiController@getGalleryPost');
            Route::post('/get/album/image', 'ApiController@getAlbumImage');
            Route::post('/get/menu/', 'ApiController@getMenuByLocation');
        });
        Route::group(['prefix' => 'ajax'],function(){
            Route::get('sharehoder','MainController@getShareholder')->name('public.ajax.getShareholder');
           
            });

    });
});

Theme::routes();

Route::group(['namespace' => 'Theme\Main\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/', 'MainController@getIndex')
            ->name('public.index');

        Route::get('sitemap.xml', 'MainController@getSiteMap')
            ->name('public.sitemap');

        Route::get('{slug?}' . config('core.base.general.public_single_ending_url'), 'MainController@getView')
            ->name('public.single');

    });
});
