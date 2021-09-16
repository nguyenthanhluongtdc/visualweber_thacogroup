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
                <a href="" class="logo">@if (theme_option('logo'))
                    <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="{{ theme_option('site_title') }}">
                @endif</a>
               
            </div>
            
            
            <ul class="language">
                <div id="wrap">
                    <form action="" autocomplete="on">
                        <ion-icon name="search-outline"></ion-icon>
                    <input id="search" name="search" type="text" placeholder="Search..">
                    <input id="search_submit" value="Rechercher" type="submit">
                    </form>
                  </div>
                <li class="active">
                    <a rel="alternate" hreflang="vi" href="{{ Language::getLocalizedURL('vi') }}">
                        <span>VN</span>
                    </a>
                </li>
                <li class="">
                    <a rel="alternate" hreflang="en" href="{{ Language::getLocalizedURL('en') }}">
                        <span>EN</span>
                    </a>
                </li>
            </ul>
            <nav>
                    <div class="nav-mobile">
                        <a id="nav-toggle" href="#!"><span></span>
                        </a>
                    </div>
                    <ul class="nav-list">
                        <li>
                            <a href="#">Trang chủ</a>
                        </li>
                        <li>
                            <a href="#">Lĩnh vực hoạt động</a>
                        </li>
                        <li>
                            <a href="#">Quan hệ cổ đông</a>
                            <ul class="nav-dropdown">
                            <li>
                                <a href="#">Công bô thông tin</a>
                            </li>
                            <li>
                                <a href="#">abc</a>
                            </li>
                            <li>
                                <a href="#">xyz</a>
                            </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Trang chủ</a>
                        </li>
                        <li>
                            <a href="#">Lĩnh vực hoạt động</a>
                        </li>
                        <li>
                            <a href="#">Quan hệ cổ đông</a>
                            <ul class="nav-dropdown">
                            <li>
                                <a href="#">Công bô thông tin</a>
                            </li>
                            <li>
                                <a href="#">abc</a>
                            </li>
                            <li>
                                <a href="#">xyz</a>
                            </li>
                            </ul>
                        </li>
                        <li class="icon-social">
                            <a href="#" >
                                <img src="{{Theme::asset()->url('images/home/logo/fb.png') }}" alt="" style="width: 40px; height: 40px;">
                            </a>
                            <a href="#" >
                                <img src="{{Theme::asset()->url('images/home/logo/youtube.png') }}" alt="" style="width: 40px; height: 40px;">
                            </a>
                            <a href="#" >
                                <img src="{{Theme::asset()->url('images/home/logo/linkedin.png') }}" alt="" style="width: 40px; height: 40px;">
                            </a>
                            <a href="#" >
                                <img src="{{Theme::asset()->url('images/home/logo/phone.png') }}" alt="" style="width: 40px; height: 40px;">
                            </a>
                            <a href="#" >
                                <img src="{{Theme::asset()->url('images/home/logo/mail.png') }}" alt="" style="width: 40px; height: 40px;">
                            </a>
                        </li>
                    </ul>
            </nav>
        </div>
    </div>

@includeIf("theme.main::views.sidebar")
<a id="button-top" class=""></a>


