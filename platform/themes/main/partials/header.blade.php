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
        <header class="header nav-down d-none d-lg-block" id="header">
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
        <div class="header-mobie" id="header-mobie">
            <a class="logo_link-blue" href="{{ route('public.single') }}" >
                @if (theme_option('logo'))
                    <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="{{ theme_option('site_title') }}">
                @endif
            </a>
            <div class="box-search-mobile">
                <form action="{{route('public.search')}}" method="GET">
                    <input type="text" placeholder="{!! __('Tìm kiếm') !!}"
                    name="keyword" value="{{ request()->get('keyword') }}">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <li class="item-top ">
                <ul class="language">
                    <li class="lang lang-vi">
                        <a class="item-top__link" rel="alternate" hreflang="vi" href="{{ Language::getLocalizedURL('vi') }}">
                            <span>VN</span>
                        </a>
                    </li>
                    <li class="lang lang-en ">
                        <a class="item-top__link" rel="alternate" hreflang="en" href="{{ Language::getLocalizedURL('en') }}">
                            <span>EN</span>
                        </a>
                    </li>
                </ul>
            </li>
        </div>
        @includeIf("theme.main::views.sidebar")
        <a id="button-top" class=""></a>
