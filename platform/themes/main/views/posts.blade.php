@includeIf("theme.main::views.pages.post.slide")
@includeIf("theme.main::views.breadcrumb")
<script>
    const getMediaUrl = '{{ route('getMedia') }}'
</script>
@php
$posts = get_posts_by_category($category->id ?? 16, 3);
$postSlider = get_featured_posts_by_category($category->id ?? 19, 1);
@endphp
<section>
    <div class="media_content-wrapper">
        <div class="container-customize">
            <div class="media-content">
                <div class="content-left">
                    <div class="media__content_left">
                        <div class="news__content" data-aos="zoom-in-up" data-aos-duration="300" data-aos-delay="50"
                            class="aos-init aos-animate">
                            <div class="swiper-container new-post-slide "
                                style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
                                <div class="swiper-wrapper">
                                    @if (!empty($posts))
                                        @foreach ($posts as $post)
                                            <div class="swiper-slide">
                                                <div class="news__top">
                                                    <div class="img-post">
                                                        <img class="img-mw-100"
                                                            src="{{ get_object_image($post->image) }}"
                                                            alt="{{ $post->name }}">
                                                    </div>
                                                    <div class="news-post h-100">

                                                        <h3 class=" title font18">{!! __('BẢN TIN NỘI BỘ') !!}</h3>
                                                        <a href="{{ $post->url }}">
                                                            <h4 class="name font18 ">{{ $post->name }}</h4>
                                                        </a>
                                                        <span class="time">
                                                            {{ date_format($post->created_at, 'd/m/Y') }}</span>
                                                        <p class="description font18  text-justify">
                                                            {{ $post->description }}</p>
                                                        <a href="{{ $post->url }}"
                                                            class="read-more">{!! __('Xem thêm') !!}</a>
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
                                                    <div class="post_content_bottom h-100">
                                                        <a class="post-wrapper" href=" {{ $post->url }}">
                                                            <div class="post-thumbnail">
                                                                <img src="{{ get_object_image($post->image) }}"
                                                                    alt="{{ $post->name }}">
                                                            </div>

                                                            <h4 class="post_name font18">{{ $post->name }}</h4>
                                                            <p class="post_description font18">{{ $post->description }}
                                                            </p>
                                                            <span
                                                                class="time">{{ date_format($post->created_at, 'd/m/Y') }}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif


                                    </div>
                                    <div class="swiper-button-next drop-shadow-button"> <img
                                            src="{{ Theme::asset()->url('images/home/Icon-right.png') }}" alt="">
                                    </div>
                                    <div class="swiper-button-prev drop-shadow-button"> <img
                                            src="{{ Theme::asset()->url('images/home/icon-left.png') }}" alt="">
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="news-content-mobile" style="display: none">
                        <div class="swiper-container new-post-slide-mb " id="js-swiper-news"
                            style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
                            <div class="swiper-wrapper">
                                @if (!empty($postSlider))
                                    @foreach ($postSlider as $post)
                                        <div class="swiper-slide">
                                            <div class="news-content">
                                                <div class="img-post">
                                                    <img class="img-mw-100"
                                                        src="{{ get_object_image($post->image) }}"
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
                    <div class="filter-search-media field mt-40">
                        <form action="" class="form-search">
                            <div class="search">
                                <input type="text" class=" form-control form-control-sm "
                                    placeholder="Nhập nội dung cần tìm" value="" name="q">
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
                                            <div class="image" data-aos-duration="500" data-aos-delay="50"
                                                class="aos-init aos-animate">
                                                <div class="post-thumbnail">
                                                    <a href="{{ $post->url }}"><img
                                                            src="{{ get_object_image($post->image) }}"
                                                            alt="{{ $post->name }}"></a>
                                                </div>
                                            </div>
                                            <div class="content" data-aos-duration="500" data-aos-delay="50"
                                                class="aos-init aos-animate">
                                                <a href="{{ $post->url }}">
                                                    <h3 class="name font18">{{ $post->name }}</h3>
                                                </a>

                                                <p class="time">{{ date_format($post->created_at, 'd/m/Y') }}
                                                </p>
                                                <p class="desc font18">{{ $post->description }}</p>
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
                @includeIf("theme.main::views.pages.post.post-sidebar")
            </div>

        </div>
    </div>
</section>
<section class="media-tab mt-40">
    <div class="container-customize">
        <div class="row">
            <div class="col-md-12">
                <div class="media-tab-wrapper">
                    <div class="media__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                        class="aos-init aos-animate">
                        <img src="{{ Theme::asset()->url('images/introduce/arrow.png') }}" alt="">
                        <h1 class="font50 big-title">Media</h1>
                    </div>
                    <div class="media-tab__title">
                        <div class="media__tabs" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                            class="aos-init aos-animate">
                            <ul class=" nav nav-tabs mb-0" id="tab-media" role="tablist">
                                <li class="__tabs__item " role="media">
                                    <a class="__tabs__link nav-link active" id="media-image-tab" data-toggle="tab"
                                        role="tab" aria-controls="media-image" aria-selected="true" href="#media-image"
                                        title="Tất Cả">
                                        {!! __('IMAGE') !!}
                                    </a>
                                </li>
                                <li class="__tabs__item" role="media">
                                    <a class="__tabs__link nav-link" id="media-video-tab" data-toggle="tab" role="tab"
                                        aria-controls="media-video" aria-selected="true" href="#media-video"
                                        title="Tất Cả">
                                        VIDEO
                                    </a>
                                </li>

                            </ul>

                        </div>
                        <div class="view-all">
                            <a href="{!! has_field($category, 'link') !!}  ">{!! __('Xem tất cả') !!}</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div>
    <div class="media-wrapper mt-40">
        <div class="tab-content" id="nav-tabContent tab-content2">
            <div class="tab-pane fade active show" id="media-image" role="tabpanel" aria-labelledby="field-1-tab">
                <div class="media-banner">

                    <div class="swiper-container media-slider"
                        style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                        <div class="swiper-wrapper">
                            @if (has_field($category, 'repeater_media_img_slide'))
                                @foreach (has_field($category, 'repeater_media_img_slide') as $item)
                                    <div class="swiper-slide">

                                        <img src="{{ get_image_url(has_sub_field($item, 'image')) }}" alt="">

                                    </div>
                                @endforeach
                            @endif


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <a href="{!! has_field($category, 'link') !!} " class="read-more">{!! __('Xem thêm') !!}</a>

                </div>
            </div>
            <div class="tab-pane fade" id="media-video" role="tabpanel" aria-labelledby="field-1-tab">
                <div class="media-banner">
                    <div class="swiper-container media-slider"
                        style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    @if (has_field($category, 'video_media'))
                                        <video muted autoplay class="__video w-100">

                                            <source src="{{ get_image_url(has_field($category, 'video_media')) }}"
                                                type="video/mp4">

                                        </video>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <a href="{!! has_field($category, 'link') !!} " class="read-more">{!! __('Xem thêm') !!}</a>

                </div>
            </div>

        </div>

    </div>
</section>
@includeIf("theme.main::views.pages.post.post-sidebar-mb")
