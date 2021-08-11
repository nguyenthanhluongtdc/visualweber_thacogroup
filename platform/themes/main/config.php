<?php

use Platform\Theme\Theme;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function (Theme $theme)
        {
            // Partial composer.
            // $theme->partialComposer('header', function($view) {
            //     $view->with('auth', \Auth::user());
            // });

            // You may use this event to set up your assets.
            // $theme->asset()->usePath()->add('style', 'css/style.css');
            $theme->asset()->add('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
            // $theme->asset()->container('footer')->usePath()->add('script', 'js/script.js');
            // $theme->asset()->add('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
            $theme->asset()->add('fancybox', '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
            $theme->asset()->add('aos_style', '//unpkg.com/aos@2.3.1/dist/aos.css');
            $theme->asset()->add('font-awesome-pro', '//pro.fontawesome.com/releases/v5.10.0/css/all.css');
            $theme->asset()->add('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
            
            $theme->asset()->add('carousel', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
           
           
            $theme->asset()->add('swiper', '//unpkg.com/swiper/swiper-bundle.min.css');
            $theme->asset()->add('slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
            $theme->asset()->add('Scroll_custom', '//cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css');
            $theme->asset()->add('carousel_thumb', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
            // $theme->asset()->add('semantic', '//cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css');

            $theme->asset()->usePath()->add('style', 'css/common.css', [], [], time());
               
            $theme->asset()->container('footer')->add('jquery', '//code.jquery.com/jquery-3.5.1.min.js');
            $theme->asset()->container('footer')->add('Swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js');
            // $theme->asset()->container('footer')->add('semantic', '//cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js');
            $theme->asset()->container('footer')->add('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js');
            $theme->asset()->container('footer')->add('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js');
            $theme->asset()->container('footer')->add('fancybox', '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
            $theme->asset()->container('footer')->add('aos_js', '//unpkg.com/aos@2.3.1/dist/aos.js');
            $theme->asset()->container('footer')->add('carousel', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
            $theme->asset()->container('footer')->add('carousel_thumb', '//cdn.jsdelivr.net/npm/owl.carousel2.thumbs@0.1.8/dist/owl.carousel2.thumbs.min.js');
            $theme->asset()->container('footer')->add('scroll_custom', '//cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js');
            $theme->asset()->container('footer')->add('scroll_custom2', '//cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js');
            $theme->asset()->container('footer')->add('slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
            $theme->asset()->container('footer')->add('parallax', '//cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js');
            $theme->asset()->container('footer')->usePath()->add('script', 'js/common.js', [], [], time());
          


            if (function_exists('shortcode')) {
                $theme->composer(['index', 'page', 'post'], function (\Platform\Shortcode\View\View $view) {
                    $view->withShortcodes();
                });
            }
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function ($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        ]
    ]
];
