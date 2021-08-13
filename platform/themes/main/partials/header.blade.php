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
                <nav class="navbar navbar-expand-lg">
                    <a class="logo_link-white" href="/">
                        <img src="{{Theme::asset()->url('images/home/logo-white.png')}}" alt="">
                    </a>
                    <a class="logo_link-blue" href="/" >
                        <img src="{{Theme::asset()->url('images/home/logo.png')}}" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarTogglerDemo">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item nav-link  dropdown dmenu">
                                <a class="item__link" href="/gioi-thieu">GIỚI THIỆU</a> 
                                <div class="dropdown-menu sm-menu" style="display:none">
                                    <div class="cmenu">
                                        <a href="/gioi-thieu" class="dropdown-item">
                                            Về thaco
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="" class="dropdown-item">
                                            Văn hóa Thaco
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-link  dropdown dmenu fade-in ">
                                <a class="item__link" href="/linh-vuc-hoat-dong">LĨNH VỰC HOẠT ĐỘNG</a>
                                <div class="dropdown-menu sm-menu" style="display:none">
                                    <div class="cmenu">
                                        <a href="" class="dropdown-item">
                                           Ô tô & Cơ khí
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="" class="dropdown-item">
                                          Nông nghiệp
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="" class="dropdown-item">
                                         Logistics
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="" class="dropdown-item">
                                        Đầu tư - Xây dựng
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="" class="dropdown-item">
                                       Thương mại - Dịch vụ
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-link dropdown dmenu">
                                <a class="item__link" href="/quan-he-co-dong">QUAN HỆ CỔ ĐÔNG</a>
                                <div class="dropdown-menu sm-menu" style="display:none">
                                    <div class="cmenu">
                                        <a href="" class="dropdown-item">
                                            Điều lệ & Quy chế
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="/cong-bo-thong-tin" class="dropdown-item">
                                            Công bố thông tin
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="" class="dropdown-item">
                                            Thông tin cổ đông
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="" class="dropdown-item">
                                            Báo cáo thường niên
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="" class="dropdown-item">
                                            Báo cáo tài chính
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-link dropdown dmenu">
                                <a class="item__link" href="/truyen-thong">TRUYỀN THÔNG</a>
                                <div class="dropdown-menu sm-menu" style="display:none">
                                    <div class="cmenu">
                                        <a href="/thong-cao-bao-chi" class="dropdown-item">
                                            Thông cáo báo chí
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="/con-nguoi" class="dropdown-item">
                                            Con người
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="/ban-tin" class="dropdown-item">
                                            Bản tin
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="/su-kien" class="dropdown-item">
                                            Sự kiện 
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="/thong-diep" class="dropdown-item">
                                            Thông điệp
                                        </a>
                                    </div>
                                    <div class="cmenu">
                                        <a href="/thu-vien-anh-va-video" class="dropdown-item">
                                         Media
                                        </a>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="nav-item nav-link ">
                                <a class="item__link" href="">
                                    <i class="fas fa-search"></i>
                                </a>
                            </li> --}}
                            <li class="nav-item nav-link dropdown dmenu">
                                <a class="item__link" href="#" id="navbardrop" data-toggle="dropdown" >
                                    <i class="fas fa-search"></i>
                                </a>
                                <div class="dropdown-menu sm-menu dropdown--search">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="">
                                                <div class="search-box input-group">
                                                    <input type="text" name="query" value="" aria-label="Search" class="form-control" placeholder="Tìm kiếm... ">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary" type="submit">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
            
        </header>
        @includeIf("theme.main::views.sidebar")
        <a id="button-top" class=""></a>
