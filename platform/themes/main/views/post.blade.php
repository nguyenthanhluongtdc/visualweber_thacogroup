@if(in_array($post->format_type, ['gallery', 'video']))
{{-- {!!render_media_gallery($post)!!} --}}
<div id="album_modal">
    <div class="custom-fancybox-dialog">
        <div class="custom-fancybox-content">
            <div class="custom-fancybox-header">
                <div class="title_modal">
                    <h3 class="name font28">
                        {!! $post->name !!}
                    </h3>
                </div>
            </div>

            <div class="custom-fancybox-body mCustomScrollbar p-0" data-mcs-theme="dark">
                <div class="list-album">
                    @if (!empty($galleries = gallery_meta_data($post)))
                        @foreach($galleries as $item)
                            <div class="album-item">
                                <a data-fancybox data-type="ajax" data-src="{{$post->url}}" data-filter="#album_modal-detail">
                                    <img src="{{ get_image_url(Arr::get($item, 'img')) }}" alt="image">
                                    <div class="album-item__download">
                                        <a download href="{{ get_image_url(Arr::get($item, 'img')) }}">
                                            <i class="fas fa-download text-white"></i>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                    {{-- <div class="album-item" data-target="#album_modal-detail" data-toggle="modal">
                        <img src="{{ Theme::asset()->url('images/media/2-detail.jpg') }}" alt="">

                        <div class="album-item__download">
                            <i class="fas fa-download"></i>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".custom-fancybox-body").mCustomScrollbar({
           theme:"dark",
       });
   </script>
</div>

<div id="album_modal-detail">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content-custom">
            <div class="slide-content">
                <div class="swiper-container gallery-top">
                    <div class="title_modal">
                        <h3 class="name font28">
                            {!! $post->name !!}
                        </h3>
                    </div>
                    <div class="swiper-wrapper">
                        @if (!empty($galleries = gallery_meta_data($post)))
                            @foreach($galleries as $item)
                                <div class="swiper-slide">
                                    <div class="img-wrapper">
                                        <img src="{{ get_image_url(Arr::get($item, 'img')) }}" alt="{{Arr::get($item, 'description')}}">
                                        <div class="album-item__download">
                                            <a download href="{{ get_image_url(Arr::get($item, 'img')) }}">
                                                <i class="fas fa-download text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="">{{Arr::get($item, 'description')}}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="swiper-scrollbar"></div>
                    <div class="swiper-button-next">  </div>
                    <div class="swiper-button-prev"> </div>
                </div>
            </div>
        </div>
    </div>
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
</div>

<div id="video_modal">
    <div class="custom-fancybox-dialog">
        <div class="custom-fancybox-content">
            <div class="custom-fancybox-header">
                <div class="title_modal">
                    <h3 class="name font28">
                        {!! $post->name !!}
                    </h3>
                </div>
            </div>

            <div class="custom-fancybox-body mCustomScrollbar p-0" data-mcs-theme="dark">
                <div class="list-album">
                    @if (!empty($galleries = gallery_meta_data($post)))
                        @foreach($galleries as $item)
                            <div class="album-item">
                                <a data-fancybox data-type="ajax" data-src="{{$post->url}}" data-filter="#video_modal-detail">
                                    <img src="{{ get_image_url(Arr::get($item, 'img')) }}" alt="image">
                                    <div class="album-item__download">
                                        <i class="fas fa-download"></i>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                    {{-- <div class="album-item" data-target="#album_modal-detail" data-toggle="modal">
                        <img src="{{ Theme::asset()->url('images/media/2-detail.jpg') }}" alt="">

                        <div class="album-item__download">
                            <i class="fas fa-download"></i>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".custom-fancybox-body").mCustomScrollbar({
           theme:"dark",
       });
   </script>
</div>



<div id="video_modal-detail" tabindex="-1" role="dialog" aria-labelledby="info_admin_modallLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        
        <div class="modal-content-custom">
            <div class="slide-content">
                <div class="swiper-container gallery-top">
                    {{-- <div class="title_modal">
                        <h3 class="name font28">
                            {!! $post->name !!}
                        </h3>
                    </div> --}}
                    <div class="slide-content">
                        <div class="title_modal">
                            <h3 class="name font28">{!! $post->name !!}
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
        </div>
    </div>
</div>

@else
<section class="banner-post-detail">
    @if(theme_option('image_banner'))
    <img class=" h-auto img-mw-100" src="{{rvMedia::getImageUrl(theme_option('image_banner'))}}" alt="">
    @endif
</section>
<div class="bg-gray">
    <div class="container-customize">

        <ol class="breadcrumb">
            @foreach ($crumbs = Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                @if ($i != (count($crumbs) - 1))
                    <li class="breadcrumb-item">
                        <a href="{{ $crumb['url'] }}" title="{{ $crumb['label'] }}">  {{ $crumb['label'] }}  
                        <meta itemprop="name" content="{{ $crumb['label'] }}" /></a>
                        <meta itemprop="position" content="{{ $i + 1}}" />
                    </li>
                @else
                    <li class="breadcrumb-item active">{{__('Bài viết')}}
                        <meta itemprop="name" content="{{ $crumb['label'] }}" />
                        <meta itemprop="position" content="{{ $i + 1}}" /></li>
                @endif
            @endforeach
        </ol>
    </div>
</div>


  
</div>

<div class="post-detail-wrapper">
    <div class="post-detail-content">
        <div class="poster-left order-1">
            @if(theme_option('poster_left'))
            <img src="{{rvMedia::getImageUrl(theme_option('poster_left'))}}" alt="poster">
            @endif
        </div>
        <div class="poster-right order-3">
            @if(theme_option('poster_right'))
            <img src="{{rvMedia::getImageUrl(theme_option('poster_right'))}}" alt="poster">
            @endif
        </div>
        <div class="content-middle order-2">
            <div class="content-main">
                <div class="post-name">
                    <h1 class=" name font-myria-bold"> {{ $post->name }}
                    </h1>

                </div>
                <div class="post-time-share">
                    <div class="left">
                        <span class="">{{date_format($post->created_at,"d-m-Y")}} </span>
                    </div>
                    <div class="right"> 
  

                         <a href="https://www.facebook.com/sharer/sharer.php?u={{ $post->url }}" target="_blank">
                           
                            <img src="{{Theme::asset()->url('images/media/face.png')}}" alt="icon-fb">
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url={{ $post->url }}&title={{ $post->name }}">
                            <img src="{{Theme::asset()->url('images/media/linkedin.png')}}" alt="icon-linkdin">
                        </a>
                        <button class="print-button" onclick="window.print();">
                            <i class="fas fa-print text-dark"></i>
                       </button>
                    </div>

                </div>
                <div class="post-content">
                    <div class="text-content">
                            {!! $post->content !!}
                    </div>
                </div>
                <div class="post-tag">
                    <h4 class="title">{!!__('Từ khóa:')!!}</h4>
                    @foreach ($post->tags as $tag)
                    <div class="tag-item active">
                        <a href="">{{$tag->name}}</a>
                    </div>
                    @endforeach
                   
                </div>
            </div>

            @php $relatedPosts = get_related_posts($post->id, 7); @endphp
            @if ($relatedPosts->count())
            <div class="post-related mt-40 mb-60">
                <div class="post-related__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                    class="aos-init aos-animate">
                    <img src="{{ Theme::asset()->url('images/media/icon-title.png') }}" alt="">
                    <h2 class="font30 big-title">{!! __('CÁC BÀI VIẾT LIÊN QUAN') !!}</h2>
                </div>
                <ul class="list-post-related">
                    @foreach ($relatedPosts as $relatedItem)
                    <li class="font18">
                        <a href="{{ $relatedItem->url }}">
                            {{ $relatedItem->name }}
                        </a>
                        <span class="time">{{date_format($post->created_at,"d-m-Y")}}</span>
                    </li>
                    @endforeach
                   
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
@endif

<script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
<script type="IN/Share" data-url="{{$post->url}}"></script>