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
                    <ul class="list-item-top">
                        <li class="item-top">
                            <a href="https://tuyendung.thaco.com.vn/tieng-viet" class="item-top__link" target="_self">
                                Tuyển dụng
                            </a>
                        </li>
                        <li class="item-top">
                            <a href="/lien-he" class="item-top__link">
                               Liên hệ
                            </a>
                        </li>
                        <li class="item-top ">
            
                            {{-- <ul class="nav navbar-nav lan-menu">
                                <li class="dropdown  dmenu">
                                        <a href="#" class="item-top__link" data-toggle="">
                                          EN <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                              <a href="#">
                                               VN
                                            </a>
                                               
                                            </li>
                                        </ul>
                                        
                                </li>
                            </ul> --}}
                            <ul class="language">
                                <li class="lang lang-vi">
                                    <a class="item-top__link" rel="alternate" hreflang="vi" href="#">
                
                                        <span>VN</span>
                                    </a>
                                </li>
                                <li class="lang lang-en ">
                                    <a class="item-top__link" rel="alternate" hreflang="en" href="#">
                
                                        <span>EN</span>
                                    </a>
                                </li>
                
                                {{-- <li class="nav-item dropdown dmenu">
                                    <div class="search-btn c-search-toggler open-search">
                                        <i class="fa fa-search"></i>
                
                                    </div>
                                </li> --}}
                                
                            </ul>
                        </li>
                    </ul>
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
