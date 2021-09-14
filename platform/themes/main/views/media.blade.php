
<section class="media-content">
    @includeIf("theme.main::views.breadcrumb")
    <div class="media-wrapper">
        <div class="container-customize">
            <div class="image__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                <img src="{{ Theme::asset()->url('images/introduce/arrow.png') }}" alt="icon">
                <h1  class="font50 big-title"> {!! __('IMAGE') !!}</h1>
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
                                {!! __('IMAGE') !!}
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
                                                <span class="album-item__date">{{date_format($post->created_at,"d-m-Y")}}</span>
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
                                                <img class="" src="{{ get_image_url($post->image) }}" alt="image">
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

    <div id="app">
        <page-media category-id="{{$category->id}}"> </page-media>
    </div>

    <script src="themes/main/js/app.js"></script>
@endif

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


