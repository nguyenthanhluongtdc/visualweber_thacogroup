
@if(!blank($category) && isset($category))
    @php
        $albumImage = get_posts_type_by_category($category->id, 6, 'gallery');
        $albumVideo = get_posts_type_by_category($category->id, 6, 'video');
    @endphp

    <div id="app">
        <page-media category-id="{{$category->id}}"> </page-media>
    </div>

    <script src="themes/main/js/app.js"></script>
@endif

{{-- <section class="media-content">
    <div class="container-customize">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Trang chủ</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/truyenthong">Truyền thông</a>
                </li>
                <li class="breadcrumb-item active">Media</li>
            </ol>
        </nav>
    </div>
    <div class="media-wrapper">
        <div class="container-customize">
            <div class="image__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                <img src="{{ Theme::asset()->url('images/introduce/arrow.png') }}" alt="">
                <h1  class="font50 big-title">{!! __('Hình ảnh') !!}</h1>
            </div>
            <div class="tab-image">
                <div class="media__tabs">
                    <ul class=" nav nav-tabs" id="tab-media" role="tablist">
                        <li class="__tabs__item " role="media">
                            <a class="__tabs__link nav-link active" id="media-album-tab" data-toggle="tab" role="tab" aria-controls="media-image" aria-selected="true" href="#media-album" title="{!! __('Tất Cả') !!}">
                                <i class="far fa-images"></i>
                                {!! __('Albums') !!}
                            </a>
                        </li>
                        <li class="__tabs__item" role="media">
                            <a class="__tabs__link nav-link" id="media-single-image-tab" data-toggle="tab" role="tab" aria-controls="media-video" aria-selected="true" href="#media-single-image" title="{!! __('Tất Cả') !!}">
                                <i class="fas fa-image"></i>
                                {!! __('Hình ảnh') !!}
                            </a>
                        </li>
                    </ul>
                    {!! do_shortcode('[filter-media][/filter-media]') !!}
                </div>
                <div class="tab-content" id="nav-tabContent3 tab-content2">
                    <div class="tab-pane fade active show" id="media-album" role="tabpanel" aria-labelledby="field-1-tab">
                        <div class="media-banner">
                            <div class="list-album">
                                @if(!empty($albumImage))
                                    @foreach($albumImage as $post) 
                                        <div class="album-item" data-target="#album_modal" data-toggle="modal">
                                            <a data-fancybox data-type="ajax" data-src="{{$post->url}}" data-filter="#album_modal" >
                                                <img src="{{ get_object_image($post->image) }}" alt="{!! $post->name !!}">
                                                <div class="album-item__name ">
                                                    <p class="name font20">
                                                        {!! $post->name !!}
                                                    </p>
                                                </div>
                                                <span class="album-item__date"> {{$post->created_at->format('d/m/y')}} </span>
                                                <div class="album-item__count">
                                                    <i class="far fa-image"></i>
                                                    <p class="quantity font18">{{!empty($galleries = gallery_meta_data($post)) ? count($galleries): '0'}}</p>
                                                </div>
                                                <div class="album-item__download">
                                                    <i class="fas fa-download"></i>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                               
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="media-single-image" role="tabpanel" aria-labelledby="field-2-tab">
                        <div class="media-banner">
                            <div class="list-image">
                                @if(!empty($albumImage))
                                    @foreach($albumImage as $post)
                                        <div class="image-item">
                                            <div class="img-click" data-fancybox data-type="ajax" data-src="{{$post->url}}" data-filter="#album_modal-detail">
                                                <img class="" src="{{ get_image_url($post->image) }}" alt="">
                                            </div>
                                            <div class="image-item__back">
                                                <i class="far fa-image"></i>
                                                <p data-fancybox data-type="ajax" data-src="{{$post->url}}" data-filter="#album_modal"  class="text font18">{!! __('Album') !!}</p>
                                            </div>
                                            <div class="image-item__download">
                                                <a download href="{{ get_image_url($post->image) }}" title="{!! __('Tải xuống') !!}">
                                                    <i class="fas fa-download text-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                               
                            </div>
                            
                        </div>
                    </div>
                  
                    @if(!empty($albumImage))
                        {{ $albumImage->links('vendor.pagination.custom') }}
                    @endif
                </div>
            </div>

            <div class="video__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                <img src="{{ Theme::asset()->url('images/introduce/arrow.png') }}" alt="">
                <h2  class="font50 big-title">{!! __('Video') !!}</h2> 
            </div>
            <div class="tab-video">
                <div class="media__tabs">
                    <ul class=" nav nav-tabs" id="tab-media" role="tablist">
                        <li class="__tabs__item " role="media">
                            <a class="__tabs__link nav-link active" id="media-video-tab" data-toggle="tab" role="tab" aria-controls="media-video" aria-selected="true" href="#media-video" title="{!! __('Tất Cả') !!}">
                                <i class="far fa-images"></i>
                                {!! __('Albums') !!}
                            </a>
                          
                        </li>
                        <li class="__tabs__item" role="media">
                            <a class="__tabs__link nav-link" id="media-single-video-tab" data-toggle="tab" role="tab" aria-controls="media-single-video" aria-selected="true" href="#media-single-video" title="{!! __('Tất Cả') !!}">
                                <i class="fas fa-image"></i>
                                {!! __('Video') !!}
                            </a>
                        </li>
                    </ul>
                    {!! do_shortcode('[filter-media][/filter-media]') !!}
                </div>

                <div class="tab-content" id="nav-tabContent tab-content2">
                    <div class="tab-pane fade active show" id="media-video" role="tabpanel" aria-labelledby="field-1-tab">
                      <div class="list-video-wrapper">
                        <div class="list-video">
                            @if(!empty($albumVideo))
                                @foreach($albumVideo as $video) 
                                    <div class="video-item" data-fancybox data-type="ajax" data-src="{{$video->url}}" data-filter="#video_modal">
                                        <div class="video-thumbnail">
                                            <img src="{{ get_image_url($video->image) }}" alt="{!! $video->name !!}">
                                        </div> 
                                        <div class="video-item__name font20 ">
                                            <p class="name">
                                                {!! $video->name !!}
                                            </p>
                                        </div>
                                        <span class="video-item__date"> {{$post->created_at->format('d/m/y')}} </span>
                                        <div class="video-item__count">
                                            
                                            <i class="fas fa-photo-video"></i>
                                            <p class="quantity font18">{{!empty($galleries = gallery_meta_data($video)) ? count($galleries): '0'}}</p>
                                        </div>
                                        <div class="video-item__download">
                                            <i class="fas fa-download"></i>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                      </div>

                      <!----paginate video----->
                        @if(!empty($albumVideo))
                            {{ $albumVideo->links('vendor.pagination.custom') }}
                        @endif
                        <!----end paginate video---->
                    </div>
                    <div class="tab-pane fade" id="media-single-video" role="tabpanel" aria-labelledby="field-2-tab">
                        <div class="media-video mCustomScrollbar" data-mcs-theme="dark">
                            <div class="list-video" >
                                <div class="left">
                                    <div class="video-main">
                                         <div class="video-wrapper">
                                            <video muted loop  autoplay class="__video w-100">
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
</section> --}}


{{-- <div class="modal fade" id="album_modal" tabindex="-1" role="dialog" aria-labelledby="info_admin_modallLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        
        <div class="modal-content">
            <div class="modal-header">
                
                <div class="title_modal">
                    <h3 class="name font28">THACO trao tặng 126 xe chuyên dụng vận chuyển vắc xin và phục vụ tiêm chủng lưu động
                    </h3>
                    
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fal fa-times"></i>
                </button>
              </div>
           
            <div class="modal-body mCustomScrollbar p-0" data-mcs-theme="dark">
                    
                    <div class="list-album">
                        <div class="album-item" data-target="#album_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/1-detail.jpg') }}" alt="">
                            
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item" data-target="#album_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/2-detail.jpg') }}" alt="">
                          
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item" data-target="#album_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/3-detail.jpg') }}" alt="">
                            
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item" data-target="#album_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/4-detail.jpg') }}" alt="">
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item" data-target="#album_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/5-detail.jpg') }}" alt="">
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item" data-target="#album_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/6-detail.jpg') }}" alt="">
                            
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item" data-target="#album_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/5-detail.jpg') }}" alt="">
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item" data-target="#album_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/6-detail.jpg') }}" alt="">
                            
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="album-item" data-target="#album_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/6-detail.jpg') }}" alt="">
                            
                            <div class="album-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="modal fade" id="album_modal-detail" tabindex="-1" role="dialog" aria-labelledby="info_admin_modallLabel" aria-hidden="true">
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
                        <h3 class="name font28">THACO trao tặng 126 xe chuyên dụng vận chuyển vắc xin và phục vụ tiêm chủng lưu động
                        </h3>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="img-wrapper">
                                <img src="{{ Theme::asset()->url('images/media/img-slide.jpg') }}" alt="">
                                <div class="album-item__download">
                                    <i class="fas fa-download"></i>
                                </div>
                            </div>
                            <p class="">THACO trao tặng 126 xe trong đó bao gồm 63 xe chuyên dụng vận chuyển vắcxin</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-wrapper">
                                <img src="{{ Theme::asset()->url('images/media/img-slide.jpg') }}" alt="">
                                <div class="album-item__download">
                                    <i class="fas fa-download"></i>
                                </div>
                            </div>
                            <p class="">THACO trao tặng 126 xe trong đó bao gồm 63 xe chuyên dụng vận chuyển vắcxin</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-wrapper">
                                <img src="{{ Theme::asset()->url('images/media/img-slide.jpg') }}" alt="">
                                <div class="album-item__download">
                                    <i class="fas fa-download"></i>
                                </div>
                            </div>
                            <p class="">THACO trao tặng 126 xe trong đó bao gồm 63 xe chuyên dụng vận chuyển vắcxin</p>
                        </div>
                         <div class="swiper-slide">
                            <div class="img-wrapper">
                                <img src="{{ Theme::asset()->url('images/media/img-slide.jpg') }}" alt="">
                                <div class="album-item__download">
                                    <i class="fas fa-download"></i>
                                </div>
                            </div>
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
</div> --}}
{{-- <div class="modal fade" id="video_modal" tabindex="-1" role="dialog" aria-labelledby="info_admin_modallLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        
        <div class="modal-content">
            <div class="modal-header">
                
                <div class="title_modal">
                    <h3 class="name font28">Lễ khởi công xây dựng Nhà máy sản xuất ô tô THACO MAZDA
                    </h3>
                    
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fal fa-times"></i>
                </button>
              </div>
           
            <div class="modal-body mCustomScrollbar p-0" data-mcs-theme="dark">
                    
                    <div class="list-video">
                        <div class="video-item "data-target="#video_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/video-list-detail-1.jpg') }}" alt="">
                            
                            <div class="video-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="video-item "data-target="#video_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/video-list-detail-2.jpg') }}" alt="">
                            
                            <div class="video-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="video-item "data-target="#video_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/video-list-detail-3.jpg') }}" alt="">
                            
                            <div class="video-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="video-item "data-target="#video_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/video-list-detail-4.jpg') }}" alt="">
                            
                            <div class="video-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="video-item "data-target="#video_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/video-list-detail-5.jpg') }}" alt="">
                            
                            <div class="video-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="video-item "data-target="#video_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/video-list-detail-6.jpg') }}" alt="">
                            
                            <div class="video-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="video-item "data-target="#video_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/video-list-detail-6.jpg') }}" alt="">
                            
                            <div class="video-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="video-item "data-target="#video_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/video-list-detail-6.jpg') }}" alt="">
                            
                            <div class="video-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                        <div class="video-item "data-target="#video_modal-detail" data-toggle="modal">
                            <img src="{{ Theme::asset()->url('images/media/video-list-detail-6.jpg') }}" alt="">
                            
                            <div class="video-item__download">
                                <i class="fas fa-download"></i>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="modal fade" id="video_modal-detail" tabindex="-1" role="dialog" aria-labelledby="info_admin_modallLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">     
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fal fa-times"></i>
                </button>
               
              </div>
              <div class="slide-content">
                <div class="title_modal">
                    <h3 class="name font28">Lễ khởi công xây dựng Nhà máy sản xuất ô tô THACO MAZDA
                    </h3>
                </div>
                <div class="video-wrapper">
                    <video muted loop  autoplay class="__video w-100">
                        <source src="{{ Theme::asset()->url('images/video/chuc-mung-nam-moi.mp4') }}" type="video/mp4">
                    </video> 
                    <div class="video-download">
                        <i class="fas fa-download"></i>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div> --}}

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.0.0-alpha.34/swiper-bundle.min.js"></script>
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
</script> --}}

<script>
    $(document).ready(function() {
        var gallery_top = new Swiper(".swiper-image", {
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
    })
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


