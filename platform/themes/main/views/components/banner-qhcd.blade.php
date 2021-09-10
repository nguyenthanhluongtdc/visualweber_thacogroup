<section class="slide-info">
    <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
        <div class="swiper-wrapper">   
            @if(has_field($category, 'repeater_banner'))
                @foreach(has_field($category, 'repeater_banner') as $img)
                    <div class="swiper-slide" >
                        <img src="{{ Storage::disk('public')->exists(get_sub_field($img, 'image')) ? get_object_image(get_sub_field($img, 'image')) : RvMedia::getDefaultImage() }}" alt="" class="img-slider  h-45vw w-100">
                    </div>
                @endforeach

                @else 
                <p class="text-center text-danger">
                    {!! __('Đang được cập nhật') !!}
                </p>
            @endif
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>