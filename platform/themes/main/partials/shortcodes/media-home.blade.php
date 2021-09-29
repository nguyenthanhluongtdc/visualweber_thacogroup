@php
    use Platform\Page\Models\Page;
    use Platform\Page\Repositories\Interfaces\PageInterface;
    $homepageId = BaseHelper::getHomepageId();
    $page = app(PageInterface::class)->findById($homepageId);
@endphp
<div class="media-home-wrapper ">
    <div class="media-home-banner">
        <div class="swiper-container field-activity-slide-top"
            style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
            <div class="swiper-wrapper">
                @if (has_field($page, 'hinh_anh'))
                    @foreach (get_field($page, 'hinh_anh', []) as $value)
                        <div class="swiper-slide">

                            @if (get_sub_field($value, 'type') == 'video')

                                @if (has_sub_field($value, 'image'))

                                    <div class="video-wrapper">
                                        <video muted
                                            class="__video w-100 {{ has_sub_field($value, 'hien_thi_2_video') == '1_video' ? 'd-none' : '' }}">
                                            <source src="{{ RvMedia::getImageUrl(get_sub_field($value, 'image')) }}"
                                                type="video/mp4">
                                        </video>
                                        <video muted
                                            class="__video   {{ has_sub_field($value, 'hien_thi_2_video') == '2_video' ? 'bg-gray' : '' }}  w-100 video-full">
                                            <source src="{{ RvMedia::getImageUrl(get_sub_field($value, 'image')) }}"
                                                type="video/mp4">
                                        </video>

                                    </div>
                                @endif
                            @endif
                            @if (get_sub_field($value, 'type') == 'img')
                                @if (has_sub_field($value, 'image'))
                                    <img src="{{ RvMedia::getImageUrl(get_sub_field($value, 'image'), 'image') }}"
                                        alt="image">
                                @endif
                            @endif

                        </div>
                    @endforeach
                @endif


            </div>
            <div class="swiper-pagination"></div>
            <a href="{{ has_field($page, 'link_readmore') }}" class="read-more"
                title="{!! __('Xem thêm') !!}">{!! __('Xem thêm') !!}</a>
        </div>
    </div>
</div>
