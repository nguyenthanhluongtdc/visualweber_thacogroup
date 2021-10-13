<div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
    <div class="swiper-wrapper">
        @if ($posts = get_featured_posts(theme_option('number_post_banner'),[]))
        @foreach ($posts as $post)
        <div class="swiper-slide">
            <img src="{{ RvMedia::getImageUrl($post->image_banner, 'featured', false, RvMedia::getDefaultImage()) }}" alt="{{$post->name}}" class="img-slider h-auto w-100">
            @if(has_field($page, 'show_hide')) 
            <div class="bg-post">
                    <div 
                    class="content {{has_field($page, 'show_hide') == 'hide' ? 'd-none' : ''}} " 
                    data-aos="zoom-in-up" 
                    data-aos-duration="1000" 
                    data-aos-delay="50" 
                    class="aos-init aos-animate"  
                    style=" background-color:  {{has_field($page, 'background_color')}};">
                        <h1 class="font24 title-post">
                       
                        {!!str::words($post->name,20)!!}      
                        </h1>
                        <div class="date"> 
                            <span class="text-light">{{$post->created_at->format('d/m/Y')}}</span>
                        </div>
                        <div class="description text-justify">
                        <p class=" font18"> 
                        {{-- {{$post->description}} --}}
                        
                        {{str::words($post->description,80)}}                        
                        </p>
                        
                        </div> 
                        <a href="{{$post->url}}" class="read-more" title="Xem thêm">{!!__('Xem thêm')!!} <span><i class="fas fa-arrow-right"></i></span></a>
                    </div>
            </div> 
            @endif
        </div>
        @endforeach
        @endif 
    </div>
    <div class="swiper-pagination"></div>
  
</div>

<div class="field-activity-wrapper mt-40"> 
    <div class="container-customize ">
        {!! do_shortcode('[field-activity][/field-activity]') !!}
    </div>
</div>
@if(has_field($page , 'show_hide_company'))
    <div class="partner-wrapper mt-40 {{get_field($page, 'show_hide_company') == 'hide_company' ? 'd-none':''}}"  style="background-image:url({{ has_field($page , 'image_bg_company') ? get_object_image(get_field($page , 'image_bg_company')) :''}})">
        <h3 class="title__company font40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate"> {{has_field($page, 'tieu_de') ? get_field($page, 'tieu_de') : ''}}</h3>
        <div class="partner-banner parallax-window" data-parallax="scroll">
            <div class="container-customize logo-partner"> 
                <div class="logo-desktop">
                
                    @if(has_field($page,'logo_company'))
                    @foreach (has_field($page,'logo_company') as $logo_item)
                        
                
                    <div class="logo-item"  data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                        <img class=""  src="{{ has_sub_field($logo_item , 'image') ? get_object_image(get_sub_field($logo_item , 'image')) :''}}" alt="logo">
                    </div>
                    @endforeach
                    @endif
                </div>
            </div> 
        </div>
    </div>
@endif
{!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, clean($page->content), $page) !!}

@includeIf("theme.main::views.components.popup")



 