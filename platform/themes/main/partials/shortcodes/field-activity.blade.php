@php
use Platform\Page\Repositories\Interfaces\PageInterface;
$homepageId = BaseHelper::getHomepageId();
$page = app(PageInterface::class)->findById($homepageId);
@endphp
<div class="field-activity">
    <div class="field-activity__content">
        @if (has_field($page, 'about_us_field_16309827261'))
            @if (count(get_field($page, 'about_us_field_16309827261')) <= 5)
                @foreach (get_field($page, 'about_us_field_16309827261') as $item_field)
                    <div class="field-activity__item">
                        <a href="/oto-cokhi">
                            <img class="w-100"
                                src="{{ has_sub_field($item_field, 'image') ? get_object_image(get_sub_field($item_field, 'image')) : '' }}"
                                alt="">
                            <div class="content-title">
                                <h4 class="title font40">
                                    {{ has_sub_field($item_field, 'title') ? get_sub_field($item_field, 'title') : '' }}
                                </h4>
                                <div class="content-none">
                                    <ul class="list-item">
                                        @if (has_sub_field($item_field, 'list'))
                                            @foreach (get_sub_field($item_field, 'list') as $item_list)
                                                <li class="item-activity font18">
                                                    {{ has_sub_field($item_list, 'title') ? get_sub_field($item_list, 'title') : '' }}
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>

                                </div>
                            </div>
                        </a>


                    </div>
                @endforeach
            @else
                @php
                    $item_field = get_field($page, 'about_us_field_16309827261');
                @endphp

                <div class="field-activity__item">
                    <a href="/oto-cokhi">
                        <img class="w-100"
                            src="{{ has_sub_field($item_field[0], 'image') ? get_object_image(get_sub_field($item_field[0], 'image')) : '' }}"
                            alt="">
                        <div class="content-title">
                            <h4 class="title font40">
                                {{ has_sub_field($item_field[0], 'title') ? get_sub_field($item_field[0], 'title') : '' }}
                            </h4>
                            <div class="content-none">
                                <ul class="list-item">
                                    @if (has_sub_field($item_field[0], 'list'))
                                        @foreach (get_sub_field($item_field[0], 'list') as $item_list)
                                            <li class="item-activity font18">
                                                {{ has_sub_field($item_list, 'title') ? get_sub_field($item_list, 'title') : '' }}
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="field-activity__item">
                    <a href="/oto-cokhi">
                        <img class="w-100"
                            src="{{ has_sub_field($item_field[1], 'image') ? get_object_image(get_sub_field($item_field[1], 'image')) : '' }}"
                            alt="">
                        <div class="content-title">
                            <h4 class="title font40">
                                {{ has_sub_field($item_field[1], 'title') ? get_sub_field($item_field[1], 'title') : '' }}
                            </h4>
                            <div class="content-none">
                                <ul class="list-item">
                                    @if (has_sub_field($item_field[1], 'list'))
                                        @foreach (get_sub_field($item_field[1], 'list') as $item_list)
                                            <li class="item-activity font18">
                                                {{ has_sub_field($item_list, 'title') ? get_sub_field($item_list, 'title') : '' }}
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-container field-slider"
                    style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                    <div class="swiper-wrapper">
                        @foreach (get_field($page, 'about_us_field_16309827261') as $key => $item_field_slide)
                            @php
                                if ($key == 0 || $key == 1) {
                                    continue;
                                }
                                
                            @endphp
                            <div class="swiper-slide">
                                <div class="field-activity__item__slide">
                                    <a href="/oto-cokhi">
                                        <img class="w-100"
                                            src="{{ has_sub_field($item_field_slide, 'image') ? get_object_image(get_sub_field($item_field_slide, 'image')) : '' }}"
                                            alt="">
                                        <div class="content-title">
                                            <h4 class="title font40">
                                                {{ has_sub_field($item_field_slide, 'title') ? get_sub_field($item_field_slide, 'title') : '' }}
                                            </h4>
                                            <div class="content-none">
                                                <ul class="list-item">
                                                    @if (has_sub_field($item_field_slide, 'list'))
                                                        @foreach (get_sub_field($item_field_slide, 'list') as $item_list)
                                                            <li class="item-activity font18">
                                                                {{ has_sub_field($item_list, 'title') ? get_sub_field($item_list, 'title') : '' }}
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                </ul>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next drop-shadow-button"> <img
                            src="{{ Theme::asset()->url('images/home/Icon-right.png') }}" alt=""> </div>
                    <div class="swiper-button-prev drop-shadow-button"> <img
                            src="{{ Theme::asset()->url('images/home/icon-left.png') }}" alt=""> </div>

                </div>
            @endif
        @endif
    </div>
</div>
