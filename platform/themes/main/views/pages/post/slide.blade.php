@php

$postSlider = get_featured_posts_by_category($category->id ?? 19, theme_option('number_post_banner'));
@endphp

<section class="slide-info">
    <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
        <div class="swiper-wrapper">   

            @if (!empty($postSlider ))
            @foreach ($postSlider  as $post)  
            <div class="swiper-slide" >
                @if(has_field($post, 'image_banner')) 
                <a href="{{$post->url}}">
                    <img class="h-auto w-100"
                    src="{{get_image_url(has_field($post,'image_banner'))}}"
                    alt="" >
                </a>
               
                @else
                <a href="{{$post->url}}">
                    <video  autoplay muted class="video-slider h-auto w-100 __video">
                        <source src="{{ RvMedia::getImageUrl(get_field($post,'video_banner')) }}"  class="">
                    </video>
                </a>
               
                @endif
            </div>
            @endforeach
            @endif
        </div>
       

        <div class="swiper-pagination"></div> 
       
    </div>
</section>
