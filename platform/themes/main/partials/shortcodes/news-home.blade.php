<div class="news-home-wrapper">
    <div class="container-customize">
        <div class="news-home__content">
            <div class="swiper-container new-post-slide"
                style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
                <div class="swiper-wrapper">
                    @if ($post_home_top = get_featured_posts(3, []))
                        @foreach ($post_home_top as $item_post)
                            <div class="swiper-slide">
                                <div class="news-home__top">
                                    <div class="img-post">
                                        <img class="img-mw-100"
                                            src="{{ RvMedia::getImageUrl($item_post->image, 'featured', false, RvMedia::getDefaultImage()) }}"
                                            alt="{{ $item_post->name }}">
                                    </div>
                                    <div class="news-post h-100">
                                        <h3 class="font20 title">{!! __('BẢN TIN NỘI BỘ') !!}</h3>
                                        <a href="{{ $item_post->url }}" title="{{ $item_post->name }}">
                                            <h4 class="name font20">{{ $item_post->name }}</h4>
                                        </a>

                                        <span
                                            class="time">{{ date_format($item_post->created_at, 'd-m-Y') }}</span>
                                        <p class="description font18 text-justify">{{ $item_post->description }}</p>
                                        <a href="{{ $item_post->url }}" class="read-more"
                                            title="{!! __('Xem thêm') !!}">{!! __('Xem thêm') !!}</a>
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
                        @if ($post_home_bottom = get_featured_posts(6))
                            @foreach ($post_home_bottom as $post_bottom)
                                <div class="swiper-slide d-flex justify-content-center">
                                    <div class="post_content_bottom h-100">
                                        <a class="post-wrapper" href="{{ $post_bottom->url }}"
                                            title="{{ $post_bottom->name }}">
                                            <div class="post-thumbnail">
                                                <img src="{{ RvMedia::getImageUrl($post_bottom->image, '', false, RvMedia::getDefaultImage()) }}"
                                                    alt="{{ $item_post->name }}" alt="{{ $post_bottom->name }}">
                                            </div>

                                            <h4 class="post_name font20">{{ $post_bottom->name }}</h4>
                                            <p class="post_description font18">{{ $post_bottom->description }}…
                                            </p>
                                            <span
                                                class="time">{{ date_format($item_post->created_at, 'd-m-Y') }}</span>
                                        </a>
                                    </div>

                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="swiper-button-next drop-shadow-button"> <img
                            src="{{ Theme::asset()->url('images/home/Icon-right.png') }}" alt="next"> </div>
                    <div class="swiper-button-prev drop-shadow-button"> <img
                            src="{{ Theme::asset()->url('images/home/icon-left.png') }}" alt="prev"> </div>


                </div>

            </div>

        </div>
        <div class="news-home-mobile" style="display: none">
            <div class="post-wrapper">
                @if ($post_home_mobile = get_featured_posts(3, []))
                    @foreach ($post_home_mobile as $item_post)
                        <div class="post-item mb-4">
                            <a class="" href=" {{ $item_post->url }}" title="{{ $item_post->name }}">
                                <div class="post-thumbmail">
                                    <img class="img-mw-100"
                                        src="{{ RvMedia::getImageUrl($item_post->image, 'featured', false, RvMedia::getDefaultImage()) }}"
                                        alt="{{ $item_post->name }}">
                                </div>
                                <div class="post-content">
                                    <div class="time">
                                        <div class="day">
                                            {{ date_format($item_post->created_at, 'd') }}
                                        </div>
                                        <div class="month">
                                            {{ date_format($item_post->created_at, 'M') }}
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
                                </div>
                            </a>


                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

</div>
