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
        <header class="header nav-down d-none d-lg-block " id="header">
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


          
    <div class="nav-bar-mobile">
        <div class="nav-container">
            <div class="brand">
                <a href="{{ route('public.single') }}" class="logo">@if (theme_option('logo'))
                    <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="{{ theme_option('site_title') }}">
                @endif</a>
               
            </div>

            <ul class="language">
                <div id="wrap">
                    <form action="" autocomplete="on">
                        <i class="fas fa-search"></i>
                    <input id="search" name="search" type="text" placeholder="{!!__ ('Tìm kiếm...')!!}">
                    <input id="search_submit" value="Rechercher" type="submit">
                    </form>
                  </div>
                <li class="">
                    <a rel="alternate active" hreflang="vi" href="{{ Language::getLocalizedURL('vi') }}">
                        <span>VN</span>
                    </a>
                </li>
                <li class="">
                    <a rel="alternate" hreflang="en" href="{{ Language::getLocalizedURL('en') }}">
                        <span>EN</span>
                    </a>
                </li>
            </ul> 
            <nav class="menu-mobile">
                    <div class="nav-mobile">
                        <a id="nav-toggle" href="#"><span></span>
                        </a>
                    </div>
                    {!!
                        Menu::renderMenuLocation('main-menu-mobile', [
                            'view' => 'main-menu-mobile',
                        ])
                    !!}
            </nav>
        </div>
    </div>

@includeIf("theme.main::views.sidebar")
<a id="button-top" class=""></a>


