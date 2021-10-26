<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>

@includeIf("theme.main::views.pages.post.slide")

<script>
    const getMediaUrl = "{{ route('api.media.load.category') }}";
</script>
@php
// $posts = get_posts_by_category($category->id ?? 16, 3);
// $postSlider = get_featured_posts_by_category($category->id ?? 19, 6);
@endphp
<section>
    <div class="media_content-wrapper mb-100">
        <div class="container-customize">
            <div class="media-content ">
                <div class="loading d-none">
                    <img src="{{ Theme::asset()->url('images/media/loading.gif') }}" alt="Loading">
                </div>
                <div class="content-left render-media">
                    @includeIf("theme.main::partials.templates.".$category->template)
                </div>
                @includeIf("theme.main::views.pages.post.post-sidebar")
               
                    @includeIf("theme.main::views.pages.post.post-sidebar-mb")
              
            </div>

        </div>
    </div>
</section>
@if ($category->template == 'posts')
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
                            <div class="media__tabs" data-aos="fade-right" data-aos-duration="700"
                                data-aos-delay="50" class="aos-init aos-animate">
                                <ul class=" nav nav-tabs mb-0" id="tab-media" role="tablist">
                                    <li class="__tabs__item " role="media">
                                        <a class="__tabs__link nav-link active" id="media-image-tab" data-toggle="tab"
                                            role="tab" aria-controls="media-image" aria-selected="true"
                                            href="#media-image" title="Tất Cả">
                                            {!! __('IMAGE') !!}
                                        </a>
                                    </li>
                                    <li class="__tabs__item" role="media">
                                        <a class="__tabs__link nav-link" id="media-video-tab" data-toggle="tab"
                                            role="tab" aria-controls="media-video" aria-selected="true"
                                            href="#media-video" title="Tất Cả">
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
   
@endif



