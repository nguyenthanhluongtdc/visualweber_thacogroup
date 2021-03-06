@includeIf("theme.main::views.breadcrumb")
<div class="media__content_left">
    <div class="news__content">
        <div class="swiper-container new-post-slide "
            style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
            <div class="swiper-wrapper">
                @if (!empty($posts))
                    @foreach ($posts as $post)
                        <div class="swiper-slide">
                            <div class="news__top">
                               
                                <div class="img-post">
                                    <a href="{{ $post->url }}">
                                        <img class="img-mw-100" src="{{ get_object_image($post->image) }}"
                                        alt="{{ $post->name }}">
                                    </a>
                                    
                                </div>
                                <div class="news-post h-100">
 
                                    @if(has_field($post, 'post_category'))
                                        <h3 class=" title font18">{!! has_field($post,'post_category') !!}  </h3>
                                    @endif
                                    <a href="{{ $post->url }}">
                                        <h4 class="name font18 "> {!! $post->name!!}</h4>
                                        <span class="time"> {{ date_format($post->created_at, 'd/m/Y') }}</span>
                                        <p class="description font18  text-justify">{{$post->description}}</p>
                                        <a href="{{ $post->url }}" class="read-more text-uppercase">{!! __('Xem thêm') !!} <i class="fas fa-arrow-right"></i></a>
                                    </a>
                                   
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
                    @if (!empty($postSlider))  
                        @foreach ($postSlider as $post)
                            <div class="swiper-slide d-flex justify-content-center">
                                <div class="post_content_bottom ">
                                    <a class="post-wrapper h-100" href=" {{ $post->url }}">
                                        <div class="post-thumbnail" >
                                            <img src="{{ get_object_image($post->image) }}"
                                                alt="{!! $post->name !!}">
                                        </div>
 
                                        <h4 class="post_name font18">{!! $post->name!!}</h4>
                                        <span
                                            class="time">{{ date_format($post->created_at, 'd/m/Y') }}</span>
                                        <p class="post_description font18">{{$post->description}}
                                        </p>
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
    <div class="news-content-mobile" style="display: none">
        {{-- <div class="swiper-container new-post-slide-mb " id="js-swiper-news"
            style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
            <div class="swiper-wrapper">
                @if (!empty($postSlider))
                    @foreach ($postSlider as $post)
                        <div class="swiper-slide">
                            <div class="news-content">
                                <div class="img-post">
                                    <img class="img-mw-100" src="{{ get_object_image($post->image) }}"
                                        alt="{!! $post->name !!}">
                                </div>
                                <div class="name ">
                                    <h3 class="font40">
                                        {!! $post->name !!}
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
        </div> --}}
        <div class="post-wrapper">
            <div class="swiper-container post-news-mobile"
                style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
                <div class="swiper-wrapper">
                    @if (!empty($postSlider))
                    @foreach ($postSlider as $item_post)
                    <div class="swiper-slide">
                        <div class="post-item mb-4">
                            <a class="" href=" {{ $item_post->url }}" title="{{ $item_post->name }}">
                                <div class="post-thumbmail">
                                    <div class="post-img">
                                        <img class="img-mw-100"
                                        src="{{ RvMedia::getImageUrl($item_post->image, 'featured', false, RvMedia::getDefaultImage()) }}"
                                        alt="{{ $item_post->name }}">
                                    </div>
                                    
                                </div>
                                <div class="post-content">
                                    <h4 class="post_name font20">{!! $item_post->name !!}</h4>
                                    <span class="time">{{ date_format($item_post->created_at, 'd/m/Y') }}</span>
                                    <p class="post_description font18">{{$item_post->description}}
                                     </p>
                                </div>
                                
                                {{-- <div class="post-content">
                                    <div class="time">
                                        <div class="day">
                                            {{ date_format($item_post->created_at, 'd') }}
                                        </div>
                                        <div class="month">
                                            {{ date_format($item_post->created_at, 'm') }}
                                        </div>
                                        <div class="year">
                                            {{ date_format($item_post->created_at, 'Y') }}
                                        </div>
                                    </div>
                                    <div class="name">
                                        <h3 class="">
                                            {{ $item_post->name }}
                                        </h3>
                                    </div>
                                </div> --}}
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            @endif
        </div>


    </div>
    <div class="filter-search-media field mt-40">
        <form action="" class="form-search">
            <div class="search">
                <input type="text" class=" form-control form-control-sm " placeholder="Nhập nội dung cần tìm" value=""
                    name="q">
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
    <div class="list-media_wrapper" id="#scroll-list-news">
        <div class="list-media mt-40">
            @if (!empty($posts))
                @foreach ($posts as $post)
                    <div class="media-item ">
                        <div class="img-content">
                            <div class="image">
                                <div class="post-thumbnail">
                                    <a href="{{ $post->url }}"><img src="{{ get_object_image($post->image) }}"
                                            alt="{!! $post->name !!}"></a>
                                </div>
                            </div>
                            <div class="content">
                                <a href="{{ $post->url }}">
                                    <h3 class="name font18">{!!$post->name!!}</h3>
                                </a>

                                <p class="time">{{ date_format($post->created_at, 'd/m/Y') }}</p>
                                <p class="desc font18">{{$post->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            {{ $posts->links('vendor.pagination.custom') }}
        </div>
        @includeIf("theme.main::views.pages.post.post")
    </div>
</div>

