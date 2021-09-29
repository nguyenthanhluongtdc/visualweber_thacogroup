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
            // Route::post('/get/album/image', 'ApiController@getAlbumImage');
            Route::post('/get/menu/', 'ApiController@getMenuByLocation');
        });

        Route::group(['prefix' => 'api', 'as' => 'api.media.'], function() {
            Route::get('media/gallery',[
                'as'    => 'gallery',
                'uses'  => 'ApiController@getFilterGallery'
            ]);

            Route::get('album/image', [
                'as'    => 'album.image',
                'uses'  => 'ApiController@getAlbumImage'
            ]);

            Route::get('album/video', [
                'as'    => 'album.video',
                'uses'  => 'ApiController@getAlbumVideo'
            ]);

            Route::get('/download/album/image', [
                'as'    => 'download.album.image',
                'uses'  => 'ApiController@zipDownload'
            ]);


            //jquery
            Route::get('load/category',[
                'as'    => 'load.category',
                'uses'  => 'MainController@getMedia'
            ]);
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
