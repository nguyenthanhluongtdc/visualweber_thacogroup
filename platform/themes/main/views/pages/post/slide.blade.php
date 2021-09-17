<section class="slide-info">
    <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
        <div class="swiper-wrapper">   

            @if(has_field($category, 'repeater_slider'))
            @foreach(has_field($category, 'repeater_slider') as $item)
            <div class="swiper-slide" >
            <img src="{{ Storage::disk('public')->exists(has_sub_field($item,'image')) ? get_image_url(has_sub_field($item,'image')) : RvMedia::getDefaultImage()}}" alt="" class="img-slider  h-45vw w-100">
            </div>
            @endforeach
            @endif
        </div>
       

        <div class="swiper-pagination"></div>
       
    </div>
</section>
