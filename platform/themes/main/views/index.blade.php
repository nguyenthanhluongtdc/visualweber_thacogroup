<div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
    <div class="swiper-wrapper">
        @if(has_field($page, 'main_slide_home'))
        @foreach (get_field($page, 'main_slide_home') as $item)
        <div class="swiper-slide">
            <img src="{{ has_sub_field($item , 'image') ? get_object_image(get_sub_field($item , 'image')) :''}}" alt="slide" class="img-slider h-auto w-100">
            @if(has_field($page, 'show_hide')) 
            <div class="bg-post">
               @if ($post = get_featured_posts(1,[]))
              
                <div class="content {{has_field($page, 'show_hide') == 'hide' ? 'd-none' : ''}} " data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="50" class="aos-init aos-animate">
                    <h1 class="font24 title-post">
                    {{$post[0]->name}}
                    </h1>
                    <div class="description text-justify">
                    <p class=" font18">
                       {{$post[0]->description}}
                        </p>
                    </div> 
                    <a href="{{$post[0]->url}}" class="read-more" title="Xem thêm">{!!__('Xem thêm')!!}</a>
                </div>
                @endif
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
    <div class="partner-wrapper {{get_field($page, 'show_hide_company') == 'hide_company' ? 'd-none':''}}"  style="background-image:url({{ has_field($page , 'image_bg_company') ? get_object_image(get_field($page , 'image_bg_company')) :''}})">
        <h3 class="title__company font40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate"> {{has_field($page, 'tieu_de') ? get_field($page, 'tieu_de') : ''}}</h3>
        <div class="partner-banner parallax-window" data-parallax="scroll">
            <div class="container-customize logo-partner"> 
                {{-- <div class="swiper-container logo-company" style="display:none">
                    <div class="swiper-wrapper">   
                        <div class="swiper-slide" >
                            <img src="{{Theme::asset()->url('images/home/thilogi-logo.png')}}" alt="">
                        </div>
                        <div class="swiper-slide" >
                            <img src="{{Theme::asset()->url('images/home/thadico-logo.png')}}" alt="">
                        </div>
                        <div class="swiper-slide" >
                            <img src="{{Theme::asset()->url('images/home/thacoauto-logo.png')}}" alt="">
                        </div>
                        <div class="swiper-slide" >
                            <img src="{{Theme::asset()->url('images/home/thagrico-logo.png')}}" alt="">
                        </div>
                        <div class="swiper-slide" >
                            <img src="{{Theme::asset()->url('images/home/thiso-logo.png')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next"><img src="{{Theme::asset()->url("images/home/right-arrow.png")}}" alt="{{_('Next icon')}}"></div>
                    <div class="swiper-button-prev"><img src="{{Theme::asset()->url("images/home/left-arrow.png")}}" alt="{{_('Prevous icon')}}"></div>
                </div> --}}
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



 