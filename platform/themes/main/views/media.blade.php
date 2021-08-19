
<section class="media-content">
    <div class="container-customize">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                    @if ($i != (count(Theme::breadcrumb()->getCrumbs()) - 1))
                        <li class="breadcrumb-item">
                            <a href="{{ $crumb['url'] }}">Trang chủ</a>
                        </li>
                    @else
                        <li class="breadcrumb-item active">Media</li>
                    @endif
                @endforeach
            </ol>
        </nav>
    </div>
    <div class="media-wrapper">
        <div class="container-customize">
            <div class="image__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                <img src="{{ Theme::asset()->url('images/introduce/arrow.png') }}" alt="">
                <h1  class="font50 big-title">Hình ảnh</h1>
            </div>
            <div class="tab-image mb-100">
                <div class="media__tabs">
                    <ul class=" nav nav-tabs" id="tab-media" role="tablist">
                        <li class="__tabs__item " role="media">
                            <a class="__tabs__link nav-link active" id="media-image-tab" data-toggle="tab" role="tab" aria-controls="media-image" aria-selected="true" href="#media-image" title="Tất Cả">
                                <i class="far fa-images"></i>
                             Albums
                            
                            </a>
                          
                        </li>
                        <li class="__tabs__item" role="media">
                          
                            <a class="__tabs__link nav-link" id="media-video-tab" data-toggle="tab" role="tab" aria-controls="media-video" aria-selected="true" href="#media-video" title="Tất Cả">
                                <i class="fas fa-image"></i>
                            Hình ảnh
                          
                            </a>
                           
                        </li>
                        
                    </ul>
                    <div class="list-tool">
                        <div class="search">
                            <input type="text" class=" form-control form-control-sm " placeholder="Nhập nội dung cần tìm" value="" name="q">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <div class="calender">
                            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
                                       <input type="date" id="datepicker" name="calendars" autocomplete="off" class="font15">
                              </div>
                            
                            
                        </div>
                        <div class="filter">
                            <label for="">Filter</label>    
                            <select class="filler">
                               
                                {{-- <option value="1"></option> --}}
                            </select>
                        </div>
                        <div class="arrange">
                            <img src="{{ Theme::asset()->url('images/media/Sort.png') }}" alt="">
                        </div>
                    </div>
                
                </div>
                <div class="tab-content" id="nav-tabContent tab-content2">
                    <div class="tab-pane fade active show" id="media-image" role="tabpanel" aria-labelledby="field-1-tab">
                        <div class="media-banner">
                          
                            <div class="list-album">
                                <div class="album-item "data-target="#album_modal" data-toggle="modal">
                                    <img src="{{ Theme::asset()->url('images/media/1.jpg') }}" alt="">
                                    <div class="album-item__name ">
                                        <p class="name font20">THACO trao tặng 126 xe chuyên dụng vận
                                            chuyển vắc xin và phục vụ tiêm chủng lưu động
                                            </p>
                                    </div>
                                    <div class="album-item__count">
                                       
                                        <i class="far fa-image"></i>
                                        <p class="quantity font18">100</p>
                                    </div>
                                    <div class="album-item__download">
                                        <i class="fas fa-download"></i>
                                    </div>
                                </div>
                                <div class="album-item">
                                    <img src="{{ Theme::asset()->url('images/media/2.jpg') }}" alt="">
                                    <div class="album-item__name ">
                                        <p class="name font20">50 tấn tinh bột sắn của Doanh nghiệp Việt Nam
                                            vừa được xuất khẩu qua Cảng Chu Lai                                            
                                            </p>
                                    </div>
                                    <div class="album-item__count">
                                       
                                        <i class="far fa-image"></i>
                                        <p class="quantity font18">100</p>
                                    </div>
                                    <div class="album-item__download">
                                        <i class="fas fa-download"></i>
                                    </div>
                                </div>
                                <div class="album-item">
                                    <img src="{{ Theme::asset()->url('images/media/3.jpg') }}" alt="">
                                    <div class="album-item__name ">
                                        <p class="name font20">THACO tài trợ trang thiết bị, vật tư y tế phòng
                                            chống dịch cho Công an TP.HCM                                            
                                            </p>
                                    </div>
                                    <div class="album-item__count">
                                       
                                        <i class="far fa-image"></i>
                                        <p class="quantity font18">100</p>
                                    </div>
                                    <div class="album-item__download">
                                        <i class="fas fa-download"></i>
                                    </div>
                                </div>
                                <div class="album-item">
                                    <img src="{{ Theme::asset()->url('images/media/4.jpg') }}" alt="">
                                    <div class="album-item__name ">
                                        <p class="name font20">Những trái tim nhiệt huyết
                                            </p>
                                    </div>
                                    <div class="album-item__count">
                                       
                                        <i class="far fa-image"></i>
                                        <p class="quantity font18">100</p>
                                    </div>
                                    <div class="album-item__download">
                                        <i class="fas fa-download"></i>
                                    </div>
                                </div>
                                <div class="album-item">
                                    <img src="{{ Theme::asset()->url('images/media/5.jpg') }}" alt="">
                                    <div class="album-item__name ">
                                        <p class="name font20">Tiêm vaccine Covid-19 cho người lao động
                                            tại KCN THACO Chu Lai
                                            
                                            </p>
                                    </div>
                                    <div class="album-item__count">
                                       
                                        <i class="far fa-image"></i>
                                        <p class="quantity font18">100</p>
                                    </div>
                                    <div class="album-item__download">
                                        <i class="fas fa-download"></i>
                                    </div>
                                </div>
                                <div class="album-item">
                                    <img src="{{ Theme::asset()->url('images/media/6.jpg') }}" alt="">
                                    <div class="album-item__name ">
                                        <p class="name font20">Mazda “trình làng” loạt xe mới tại VMS 2016
                                            </p>
                                    </div>
                                    <div class="album-item__count">
                                       
                                        <i class="far fa-image"></i>
                                        <p class="quantity font18">100</p>
                                    </div>
                                    <div class="album-item__download">
                                        <i class="fas fa-download"></i>
                                    </div>
                                </div>
                              
                            </div>
                            <div class="page-pagination mt-40 mb-40">
                                <ul class="pagination font18">
                                    <li class="page-item active">
                                        <a href="" class="page-link">
                                            1
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link">
                                            2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link">
                                            3
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link">
                                            4
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link">
                                            5
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link">
                                            6
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link">
                                            7
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link">
                                            >
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link">
                                            >>
                                        </a>
                                    </li>
                                   
                                </ul>
                             </div>
                        </div>
                    </div>
                    {{-- <div class="tab-pane fade" id="media-video" role="tabpanel" aria-labelledby="field-1-tab">
                        <div class="media-banner">
                                <div class="swiper-container media-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">             
                                            <div class="video-wrapper">
                                                <video muted   autoplay class="__video w-100">
                                                    <source src="{{ Theme::asset()->url('images/video/chuc-mung-nam-moi.mp4') }}" type="video/mp4">
                                                </video> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                
                                <a href="" class="read-more">Xem thêm</a>
                            
                        </div>
                    </div> --}}
                    
                </div>
            </div>

            <div class="video__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                <img src="{{ Theme::asset()->url('images/introduce/arrow.png') }}" alt="">
                <h2  class="font50 big-title">Video</h2> 
            </div>
            <div class="tab-video mb-100">
                <div class="media__tabs">
                    <ul class=" nav nav-tabs" id="tab-media" role="tablist">
                        <li class="__tabs__item " role="media">
                            <a class="__tabs__link nav-link active" id="media-image-tab" data-toggle="tab" role="tab" aria-controls="media-image" aria-selected="true" href="#media-image" title="Tất Cả">
                                <i class="far fa-images"></i>
                             Albums
                            
                            </a>
                          
                        </li>
                        <li class="__tabs__item" role="media">
                          
                            <a class="__tabs__link nav-link" id="media-video-tab" data-toggle="tab" role="tab" aria-controls="media-video" aria-selected="true" href="#media-video" title="Tất Cả">
                                <i class="fas fa-image"></i>
                           Video
                          
                            </a>
                           
                        </li>
                        
                    </ul>
                    <div class="list-tool">
                        <div class="search">
                            <input type="text" class=" form-control form-control-sm " placeholder="Nhập nội dung cần tìm" value="" name="q">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <div class="calender">
                            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
                                <input type="date" id="datepicker" name="calendars" autocomplete="off" class="font15">
                            </div>

                        </div>
                        <div class="filter">
                            <label for="">Filter</label>    
                            <select class="filler">
                            </select>
                        </div>
                        <div class="arrange">
                            <img src="{{ Theme::asset()->url('images/media/Sort.png') }}" alt="">
                        </div>
                    </div>
                
                </div>
                <div class="col-md-12 col-12 search-cate">
                    
                    <div class="box">
                        <input id="one" type="checkbox">
                        <span class="check"></span>
                        <label for="one" class="font-pri font15">THACO</label>
                    </div>
                    <div class="box">
                        <input id="two" type="checkbox">
                        <span class="check"></span> 
                        <label for="two" class="">Ô tô & Cơ khí</label>
                    </div>
                    <div class="box">
                        <input id="three" type="checkbox">
                        <span class="check"></span>
                        <label for="three" class="font-pri font15">Nông Lâm Nghiệp</label>
                    </div>
                    <div class="box">
                        <input id="four" type="checkbox">
                        <span class="check"></span>
                        <label for="four" class="font-pri font15">Đầu Tư - Xây Dựng</label>
                    </div>
                    <div class="box">
                        <input id="five" type="checkbox">
                        <span class="check"></span>
                        <label for="five" class="font-pri font15">Thương Mại - Dịch Vụ</label>
                    </div>
                    <div class="box">
                        <input id="six" type="checkbox">
                        <span class="check"></span>
                        <label for="six" class="font-pri font15">Logistics</label>
                    </div>
                    
                </div>
                <div class="tab-content" id="nav-tabContent tab-content2">
                    <div class="tab-pane fade active show" id="media-image" role="tabpanel" aria-labelledby="field-1-tab">
                        <div class="media-video mCustomScrollbar" data-mcs-theme="dark">
                            <div class="list-video" >
                                <div class="left">
                                    <div class="video-main">
                                        {{-- <img src="{{ Theme::asset()->url('images/media/video-main.jpg') }}" alt="">
                                         --}}
                                         <div class="video-wrapper">
                                            <video muted   autoplay class="__video w-100">
                                                <source src="{{ Theme::asset()->url('images/video/chuc-mung-nam-moi.mp4') }}" type="video/mp4">
                                            </video> 
                                        </div>
                                        <p class="name font30">
                                            THACO CHÚC MỪNG NĂM MỚI – XUÂN TÂN SỬU 2021
                                        </p>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="list-video-left">
                                        <div class="video-item">
                                            <a href="" class="img-button">
                                                <img src="{{ Theme::asset()->url('images/media/video-1.jpg') }}" alt="">
                                                <i class="far fa-play-circle button-video"></i>

                                            </a>
                                           <p class="name font20">
                                            MAZDA CX-30: TÂN BINH PHÂN KHÚC SUV ĐÔ THỊ CÓ GÌ HẤP DẪN KHÁCH HÀNG?
                                           </p>                         
                                        </div>
                                        <div class="video-item ">
                                            <a href="" class="img-button">
                                                <img src="{{ Theme::asset()->url('images/media/video-2.jpg') }}" alt="">
                                                <i class="far fa-play-circle button-video"></i>
                                            </a>
                                            
                                          <p class="name  font20">
                                            10 ĐIỂM GIÚP MAZDA6 MỚI THUYẾT PHỤC KHÁCH HÀNG VIỆT NAM
                                          </p>
                                        </div>
                                        <div class="video-item ">
                                            <a href="" class="img-button">
                                                <img src="{{ Theme::asset()->url('images/media/video-2.jpg') }}" alt="">
                                                <i class="far fa-play-circle button-video"></i>
                                            </a>
                                          
                                          <p class="name  font20">
                                            10 ĐIỂM GIÚP MAZDA6 MỚI THUYẾT PHỤC KHÁCH HÀNG VIỆT NAM
                                          </p>
                                        </div>
                                    </div>

                                    </div>
                                    
                                </div>
                                
                            </div>
                         
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="album_modal" tabindex="-1" role="dialog" aria-labelledby="info_admin_modallLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        
        <div class="modal-content">
            <div class="modal-header">
                
                <div class="title_modal">
                    <h3 class="name font30">THACO trao tặng 126 xe chuyên dụng vận chuyển vắc xin và phục vụ tiêm chủng lưu động
                    </h3>
                    
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fal fa-times"></i>
                </button>
              </div>
           
            <div class="modal-body mCustomScrollbar p-0" data-mcs-theme="dark">
                    
                    <div class="list-album">
                        <div class="album-item "data-target="#album_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/1-detail.jpg') }}" alt="">
                            
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item">
                            <img src="{{ Theme::asset()->url('images/media/2-detail.jpg') }}" alt="">
                          
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item">
                            <img src="{{ Theme::asset()->url('images/media/3-detail.jpg') }}" alt="">
                            
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item">
                            <img src="{{ Theme::asset()->url('images/media/4-detail.jpg') }}" alt="">
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item">
                            <img src="{{ Theme::asset()->url('images/media/5-detail.jpg') }}" alt="">
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item">
                            <img src="{{ Theme::asset()->url('images/media/6-detail.jpg') }}" alt="">
                            
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item">
                            <img src="{{ Theme::asset()->url('images/media/5-detail.jpg') }}" alt="">
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item">
                            <img src="{{ Theme::asset()->url('images/media/6-detail.jpg') }}" alt="">
                            
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item">
                            <img src="{{ Theme::asset()->url('images/media/6-detail.jpg') }}" alt="">
                            
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        
                      
                    </div>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="album_modal-detail" tabindex="-1" role="dialog" aria-labelledby="info_admin_modallLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        
        <div class="modal-content">
            <div class="modal-header">     
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fal fa-times"></i>
                </button>
               
              </div>
              <div class="slide-content">
                <div class="swiper-container gallery-top">
                    <div class="title_modal">
                        <h3 class="name font30">THACO trao tặng 126 xe chuyên dụng vận chuyển vắc xin và phục vụ tiêm chủng lưu động
                        </h3>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ Theme::asset()->url('images/media/img-slide.jpg') }}" alt="">
                            <p class="">THACO trao tặng 126 xe trong đó bao gồm 63 xe chuyên dụng vận chuyển vắcxin</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ Theme::asset()->url('images/media/img-slide.jpg') }}" alt="">
                            <p class="">THACO trao tặng 126 xe trong đó bao gồm 63 xe chuyên dụng vận chuyển vắcxin</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ Theme::asset()->url('images/media/img-slide.jpg') }}" alt="">
                            <p class="">THACO trao tặng 126 xe trong đó bao gồm 63 xe chuyên dụng vận chuyển vắcxin</p>
                        </div>
                         <div class="swiper-slide">
                            <img src="{{ Theme::asset()->url('images/media/img-slide.jpg') }}" alt="">
                            <p class="">THACO trao tặng 126 xe trong đó bao gồm 63 xe chuyên dụng vận chuyển vắcxin</p>
                        </div>
                        
                    </div>
                   
                    <div class="swiper-scrollbar"></div>
                    <div class="swiper-button-next">  </div>
                    <div class="swiper-button-prev"> </div>
                </div>
              </div>
             
            
        </div>
        
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.0.0-alpha.34/swiper-bundle.min.js"></script>
<script>
            var gallery_top = new Swiper(".gallery-top", {
    slidesPerView: 1,
    speed: 400,
    scrollbar: {
        el: ".swiper-scrollbar",

    },
    navigation: {
        nextEl: '.gallery-top .swiper-button-next',
        prevEl: '.gallery-top .swiper-button-prev',
    },

});
</script>
<style>
    .list-social-sidebar {
    display: none;
}

.page-content {
    padding-top: 96px;
}

.header {
    background-color: white !important;
    box-shadow: 0 5px 8px -5px #555;
    
    
}
.navbar .navbar-nav .nav-item a {
        color: rgb(38, 38, 38)!important;
    }
.header-top {

        background-color: #F6F6F7 !important;  
    }
    .header .header-top .list-item-top .item-top__link{
        color: rgb(38, 38, 38)!important;
    }
    .header .header-top::after{
        visibility: visible;
        opacity: 1;
    }
    
    .logo_link-white {
            display: none!important;
        }
        .logo_link-blue {
            display: block!important;
        }

</style>

