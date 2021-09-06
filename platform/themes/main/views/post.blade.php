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
                                    <img src="{{ get_image_url(Arr::get($item, 'img')) }}" alt="">
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
                                    <img src="{{ get_image_url(Arr::get($item, 'img')) }}" alt="">
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
    <img class=" h-45vw img-mw-100" src="{{ Theme::asset()->url('images/media/banner-detail.jpg') }}" alt="">
</section>
@includeIf("theme.main::views.breadcrumb")

<div class="post-detail-wrapper">
    <div class="post-detail-content">
        <div class="poster-left order-1">
            <img src="{{ Theme::asset()->url('images/media/post-poster.jpg') }}" alt="">
        </div>
        <div class="poster-right order-3">
            <img src="{{ Theme::asset()->url('images/media/post-poster.jpg') }}" alt="">
        </div>
        <div class="content-middle order-2">
            <div class="content-main">
                <div class="post-name">
                    <h1 class=" name font-myria-bold"> {{ $post->name }}
                    </h1>

                </div>
                <div class="post-time-share">
                    <div class="left">
                        <span class="">{{ $post->created_at->format('d/m/y') }} </span>
                    </div>
                    <div class="right"> 
                        
                        <a data-href="{{ Request::url() }}" data-width="" data-layout="button_count" data-action="share" data-size="large" data-share="true">
                            <p class="share  text-dark">Chia sẻ</p>
                        </a>
                      
                        <button class="print-button">
                            <a href="{{ get_object_image(get_field($post, 'newspapper_files')) }}"> <i class="fas fa-print text-dark"> </i></a>
                           
                        </button>
                    </div>

                </div>
                <div class="post-content">
                    <p class="text-post"> {{$post->description}}</p>
                    <img src="{{ Theme::asset()->url('images/media/post-detail-1.jpg') }}" alt="">
                    {!! $post->content !!}
                    {{-- <img class="mb-4" src="{{ Theme::asset()->url('images/media/post-detail-2.jpg') }}" alt="">
                    <div class="img-last">
                        <img class="img1" src="{{ Theme::asset()->url('images/media/post-detail-3.jpg') }}" alt="">
                        <img class="img2" src="{{ Theme::asset()->url('images/media/post-detail-4.jpg') }}" alt="">
                    </div>
                    <p class="">Tại THACO Chu Lai, phương pháp 5S, triết lý Kaizen và quản trị tinh gọn đã được triển
                        khai áp dụng suốt nhiều năm qua và được duy trì, cải tiến liên tục ngày một hiệu quả. Bên cạnh
                        củng cố kiến thức, khóa đào tạo còn nhằm nâng cao tính tự giác, ý thức trách nhiệm của mỗi CBNV
                        trong việc áp dụng các phương pháp trên vào công việc một cách khoa học, hiệu quả, tạo môi
                        trường làm việc an toàn, thuận tiện, nêu cao tinh thần cải tiến, sáng tạo, góp phần nâng cao
                        chất lượng, hiệu suất lao động.</p> --}}


                </div>
                <div class="post-tag">
                    <h4 class="title">Từ khóa :</h4>
                    @foreach ($post->tags as $tag)
                    <div class="tag-item active">
                        <a href="">{{$tag->name}}</a>
                    </div>
                    @endforeach
                    {{-- <div class="tag-item">
                        <a href="">Thaco Chu Lai</a>
                    </div> --}}
                </div>
            </div>

            @php $relatedPosts = get_related_posts($post->id, 7); @endphp
            @if ($relatedPosts->count())
            <div class="post-related mt-40 mb-60">
                <div class="post-related__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                    class="aos-init aos-animate">
                    <img src="{{ Theme::asset()->url('images/media/icon-title.png') }}" alt="">
                    <h2 class="font30 big-title">CÁC BÀI VIẾT LIÊN QUAN</h2>
                </div>
                <ul class="list-post-related">
                    @foreach ($relatedPosts as $relatedItem)
                    <li class="font18">
                        <a href="{{ $relatedItem->url }}">
                            {{ $relatedItem->name }}
                        </a>
                        <span class="time">{{ $relatedItem->created_at->format('d/m/Y') }}</span>
                    </li>
                    @endforeach
                    {{-- <li class="font18">
                        <a href="">
                            Công đoàn cơ sở THACO nhận cờ thi đua xuất sắc năm 2020
                        </a>
                        <span class="time">(05/05/2021)</span>
                    </li>
                    <li class="font18">
                        <a href="">
                            THACO "Cùng xây ngôi nhà mơ ước"
                        </a>
                        <span class="time">(07/04/2021)</span>
                    </li>
                    <li class="font18">
                        <a href="">
                            "Ngày cuối tuần xanh" và "Ngày Thứ Bảy" gọn gàng tại KCN THACO CHU LAI
                        </a>
                        <span class="time">(26/03/2021)</span>
                    </li>
                    <li class="font18">
                        <a href="">
                            THACO nhận nhiệm vụ Khối Trưởng của Khối thi đua số 9
                        </a>
                        <span class="time">(24/03/2021)</span>
                    </li> --}}

                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
@endif

