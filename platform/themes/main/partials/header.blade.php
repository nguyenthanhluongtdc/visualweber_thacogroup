<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Roboto')) }}" rel="stylesheet" type="text/css">
        <!-- CSS Library-->

        {{-- <style>
            :root {
                --primary-color: {{ theme_option('primary_color', '#ff2b4a') }};
                --primary-font: '{{ theme_option('primary_font', 'Roboto') }}', sans-serif;
            }
        </style> --}}

        {!! Theme::header() !!}
    </head>
    <body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
        {!! apply_filters(THEME_FRONT_BODY, null) !!}
        <header class="header nav-down" id="header">
            <div class="header-top" id="header-top">
                {{-- <div class="boder-header" id="boder-top"></div> --}}
                <div class="container-customize ">
                    {!!
                        Menu::renderMenuLocation('header-menu', [
                            'options' => [],
                            'theme' => true,
                            'view' => 'header-menu',
                        ])
                    !!}
                    
                </div>
                
            </div>
            <div class="container-customize ">
                {!!
                    Menu::renderMenuLocation('main-menu', [
                        'options' => [],
                        'theme' => true,
                        'view' => 'main-menu',
                    ])
                !!}
            </div>
            
        </header>
        @includeIf("theme.main::views.sidebar")
        <a id="button-top" class=""></a>
