
@includeIf("theme.main::views.breadcrumb")
    <div class="media__content_left human">
        <div class="news__content">
            <div class="swiper-container new-post-slide "
                style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
                <div class="swiper-wrapper">
                    @if (!empty($postSlider))
                        @foreach ($postSlider as $post)
                            <div class="swiper-slide">
                                <div class="news__top">
                                    <div class="img-post">
                                        <img class="img-mw-100" src="{{ get_object_image($post->image) }}" alt="">
                                    </div>
                                    <div class="news-post h-100">

                                        <h3 class=" title font18">{!! __('BẢN TIN NỘI BỘ') !!}</h3>
                                        <a href="{{ $post->url }}">
                                            <h4 class="name font18 text-justify">{{ $post->name }}</h4>
                                        </a>
                                        <span class="time">
                                            {{ date_format($post->created_at, 'd-m-Y') }}</span>
                                        <p class="description font18  text-justify">{{ $post->description }}</p>
                                        <a href="{{ $post->url }}" class="read-more">{!! __('Xem thêm') !!}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="swiper-pagination"></div>
            </div>
            <div class="post-slider">
                <div class="swiper-container post-slide-bottom">
                    <div class="swiper-wrapper">
                        @if (!empty($postSlider_bottom))
                            @foreach ($postSlider_bottom as $post)
                                <div class="swiper-slide d-flex justify-content-center">
                                    <div class="post_content_bottom h-100">
                                        <a class="post-wrapper" href=" {{ $post->url }}">
                                            <div class="post-thumbnail">
                                                <img src="{{ get_object_image($post->image) }}" alt="">
                                            </div>

                                            <h4 class="post_name font18 text-justify">{{ $post->name }}</h4>
                                            <p class="post_description font18">{{ $post->description }}
                                            </p>
                                            <span
                                                class="time">{{ date_format($post->created_at, 'd-m-Y') }}</span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <div class="swiper-button-next drop-shadow-button"> <img
                            src="{{ Theme::asset()->url('images/home/Icon-right.png') }}" alt=""> </div>
                    <div class="swiper-button-prev drop-shadow-button"> <img
                            src="{{ Theme::asset()->url('images/home/icon-left.png') }}" alt=""> </div>


                </div>

            </div>
        </div>
        <div class="news-content-mobile human" style="display: none">
            <div class="swiper-container new-post-slide-mb " id="js-swiper-news"
                style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
                <div class="swiper-wrapper">
                    @if (!empty($postSlider))
                        @foreach ($postSlider as $post)
                            <div class="swiper-slide">
                                <div class="news-content">
                                    <div class="img-post">
                                        <img class="img-mw-100" src="{{ get_object_image($post->image) }}"
                                            alt="{{ $post->name }}">
                                    </div>
                                    <div class="name ">
                                        <h3 class="font40">
                                            {{ $post->name }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="control-slide-news">
                <div class="swiper-pagination pagination-news"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>


        </div>
        <div class="filter-search-media field mt-40 human">
            <form action="" class="form-search">
                <div class="search">
                    <input type="text" class=" form-control form-control-sm " placeholder="Nhập nội dung cần tìm"
                        value="" name="q">
                    <button class="btn btn-secondary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <select class="select-year font18" id="">
                    <option value="">2019</option>
                    <option value="">2018</option>
                    <option value="">2017</option>
                    <option value="">2016</option>
                </select>
                <select class="select-by-field font18" id="">
                    <option value="">Ô tô - Cơ Khí</option>
                    <option value="">Nông nghiệp</option>
                    <option value="">Thương mại - dịch vụ</option>
                    <option value="">Đầu tư xây dựng</option>
                    <option value="">Logistics</option>
                </select>
            </form>

        </div>
        <div class="list-media_wrapper" id="scroll-list-news">
            <div class="list-media mt-40">
                @if (!empty($posts))
                    @foreach ($posts as $post)
                        <div class="media-item ">
                            <div class="img-content">
                                <div class="image">
                                    <div class="post-thumbnail">
                                        <a href="{{ $post->url }}"><img
                                                src="{{ get_object_image($post->image) }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="{{ $post->url }}">
                                        <h3 class="name font18">{{ $post->name }}</h3>
                                    </a>

                                    <p class="time">{{ date_format($post->created_at, 'd-m-Y') }}</p>
                                    <p class="desc font18">{{ $post->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
              

            </div>
        </div>
    </div>
    @if(!empty($posts))
    {{ $posts->withQueryString()->links('vendor.pagination.custom') }}
    @endif
    <script>
        if($('.media__content_left.human').length>0){
            $('.media-tab').css('display','none');
        }
     </script>