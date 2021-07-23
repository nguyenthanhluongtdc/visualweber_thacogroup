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
        <header class="header" id="header">
            <div class="header-top" id="header-top">
                <div class="boder-header" id="boder-top"></div>
                <div class="container-customize ">
                    <ul class="list-item-top">
                        <li class="item-top">
                            <a href="https://tuyendung.thaco.com.vn/tieng-viet" class="item-top__link" target="_self">
                                Tuyển dụng
                            </a>
                        </li>
                        <li class="item-top">
                            <a href="" class="item-top__link">
                               Liên hệ
                            </a>
                        </li>
                        <li class="item-top ">
                            {{-- <ul class="language_list">
                                <li class="language-item">
                                    <a href="" class="item-top__link">
                                        Tiếng Việt
                                    </a>
                                    <i class="fas fa-angle-down"></i>
                                </li><li class="language-item">
                                    <a href="" class="item-top__link">
                                        English
                                    </a>
                                    <i class="fas fa-angle-down"></i>
                                </li>
                            </ul> --}}
                            <ul class="nav navbar-nav lan-menu">
                                <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                       
                                        Tiếng việt  <i class="fas fa-angle-down"></i>
                                           </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                              <a href="#">
                                                   Tiếng anh
                                            </a>
                                                <!--<a href="https://lecvietnam.com/en/">En</a>-->
                                            </li>
                                        </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="container-customize ">
                <nav class="navbar navbar-expand-lg">
                    <a class="logo_link" href="/">
                        <img src="{{Theme::asset()->url('images/home/logo.png')}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarTogglerDemo">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item nav-link  dropdown dmenu">
                                <a href="/gioi-thieu" data-toggle="dropdown">GIỚI THIỆU</a>
                                {{-- <div class="dropdown-menu sm-menu" style="display:none">
                                    <div class="cmenu">
                                        <a href="" class="dropdown-item">
                                            Về thaco
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="" class="dropdown-item">
                                            Văn hóa Thaco
                                        </a>
                                    </div>
                                </div> --}}
                            </li>
                            <li class="nav-item nav-link ">
                                <a href="/linh-vuc-hoat-dong">LĨNH VỰC HOẠT ĐỘNG</a>
                            </li>
                            <li class="nav-item nav-link ">
                                <a href="/quan-he-co-dong">QUAN HỆ CỔ ĐÔNG</a>
                            </li>
                            <li class="nav-item nav-link ">
                                <a href="/truyen-thong">TRUYỀN THÔNG</a>
                            </li>
                            <li class="nav-item nav-link ">
                                <a href="">
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
            
        </header>
        @includeIf("theme.main::views.sidebar")
        <a id="button-top" class="show-button-top"></a>
