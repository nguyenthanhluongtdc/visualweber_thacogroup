@php
use Platform\Page\Repositories\Interfaces\PageInterface;
$page = app(PageInterface::class)->findById(28); 
$id_field = $data['id'];
$posts_banner = get_post_featured_by_fieldActivity($id_field,theme_option('number_post_banner_lvhd')); 
$post_slide = get_post_fieldActivity($id_field,theme_option('number_post_lvhd')); 

@endphp

<div class="field-of-activity">
    <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
        <div class="swiper-wrapper">
            @if ($posts_banner)
            @foreach ($posts_banner as $post_ba)
            <div class="swiper-slide item-slider-top">
                {{-- <img src="{{ RvMedia::getImageUrl($post->image_banner, 'featured', false, RvMedia::getDefaultImage()) }}" alt="{{$post->name}}" alt="slide"
                    class="img-slider  h-auto w-100"> --}}

                @if(has_field($post_ba, 'image_banner')) 
                <a href="{{$post_ba->url}}"> 
                    <img class="h-auto w-100"
                    src="{{get_image_url(has_field($post_ba,'image_banner'))}}"
                    alt="" >
                </a>
                
                @else
                <a href="{{$post_ba->url}}">
                    <video  autoplay muted class="video-slider h-auto w-100 __video">
                        <source src="{{ RvMedia::getImageUrl(get_field($post_ba,'video_banner')) }}"  class="">
                    </video>
                </a>
                
                @endif
                <div class="box-banner-wrapper {{has_field($page, 'show_hide') == 'hide' ? 'd-none' : ''}}">
                    <div 
                    class="post-banner" 
                    style="background-color: {{get_field($data, 'color_code')}}"
                    >  
                    </div>
                    <div class="content">
                        <h2 class="font24 font-weight-bold">
                            {!!str::words($post_ba->name,20)!!}  
                           
                        </h2>
                        <div class="date mt-2">  
                            <span> 
                                {{$post_ba->created_at->format('d/m/Y')}}
                            </span>
                        </div>
                        <p class="desc font18 text-justify">
                            {{str::words($post_ba->description,80)}}  
                        </p>
                        
                        <a href="{{$post_ba->url}}" class="link">
                            {!!__('Xem th??m')!!} <span><i class="fas fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                
            </div>
            @endforeach
            @endif
            
        </div>
        <div class="swiper-pagination"></div>

    </div> 

    <div class="commercial-field container-customize mt-60 mb-60">

        <div class="commercial-field__left" >
            <div class="left-top d-flex justify-content-left" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                {{-- <img src="{{Theme::asset()->url('images/lvhd/icon1.png') }}"> --}}
                <h3 class="text-uppercase font20" style="color: {{get_field($data, 'color_code')}}">L??NH V???C <br> 
                    @if(has_field($data, 'field_name'))
                    
                    <span class="text font40"> {!! has_field($data,'field_name') !!} </span>
                    @endif
                </h3>

            </div>
            <div class="line" style="background-color: {{get_field($data, 'color_code')}}">
            </div>
            @if(has_field($data, 'field_desc'))       
            <p class="content mt-25 " data-aos="flip-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                {!! has_field($data,'field_desc') !!} 
            </p>
            @endif 
        </div>
        <div class="commercial-field__right">
            <div class="swiper-container commercial-field-slider"
                style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                <div class="swiper-wrapper">
                    @if(has_field($data, 'flied_slider'))
                    @foreach(has_field($data, 'flied_slider') as $item)
                        
                    <div class="swiper-slide">
                        <img src="{{ Storage::disk('public')->exists(has_sub_field($item,'image')) ? get_image_url(has_sub_field($item,'image')) : RvMedia::getDefaultImage()}}" alt="slide"
                            class="img-slider img-mw-100">
                    </div>
                    @endforeach
                    @endif
                   
                </div>

                <div class="swiper-pagination"></div>
            </div>  

        </div>

    </div>
    <div class="future-goal-banner-activity mt-60 mb-60"
        style="background-image:url('{{ get_field($data, 'background_vision_block') ? get_image_url(get_field($data, 'background_vision_block')) : Theme::asset()->url('images/lvhd/banner.jpg') }}')">
       
        <div class="future-goal-wrapper container-customize">
            <div class="row mr-0 ml-0">
                @if (has_field($data, 'repeater_vision_block'))
                    @foreach (has_field($data, 'repeater_vision_block') as $key => $item)
                        <div class="col-sm-4 pl-0 pr-0">
                            <div class="future-goal p-lr-90 {{ $loop->last ? 'last' : '' }}" data-aos="fade-up"
                                data-aos-duration="700" data-aos-delay="{{ 50 + $key * 100 }}"
                                class="aos-init aos-animate">
                                <img src="{{ get_image_url(has_sub_field($item, 'logo')) }}"
                                    alt="{{ has_sub_field($item, 'title') }}">
                                <h3 class="title font40 text-light">{{ has_sub_field($item, 'title') }}</h3>
                                <div class="desc font18  text-justify mCustomScrollbar">
                                    {!! has_sub_field($item, 'description') !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>
        </div>

    </div>

    <div class="activity-content-detail-slide mt-40 mb-40">

        <div class="activity-content-detail-slide__detail-content">
            @if(has_field($data, 'repeater_activity_slide'))
	        @foreach(has_field($data, 'repeater_activity_slide') as $item)
            <div class="swiper-container swiper-content-detail mb-40" >

                <div class="main-content-left ">
                    <div class="content" >
                        @if(has_sub_field($item, 'content_left_activity_title'))
                        <h2 class="text-uppercase title mb-3 font40" style="color: {{get_field($data, 'color_code')}}">
                            {!! has_sub_field($item,'content_left_activity_title') !!}  

                        </h2>
                        @endif
                        @if(has_sub_field($item, 'content_left_activity_desc'))
                        <p class="text font18">
                            {!! has_sub_field($item,'content_left_activity_desc') !!}  
                        </p>
                        @endif
                        <div class="control-slide">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination pagination-field"  style="background-color: {{get_field($data, 'color_code')}}" ></div>
                            {{-- <div class="mouse-control">
                                <span class="mouse"></span>
                                <p class="text-pagi font18 text-uppercase">Tr?????t ????? kh??m ph??</p>
                            </div> --}}
                            <div class="swiper-button-next"></div>
                            
                        </div>

                    </div>

                </div>
                <div class="swiper-wrapper main-content-right">
                    @foreach(has_sub_field($item, 'repeater_right_content_activity') as $sub_item)
                    <div class="swiper-slide" >
                        <div class="bg" ></div>
                        <img src="{{ Storage::disk('public')->exists(has_sub_field($sub_item,'image')) ? get_image_url(has_sub_field($sub_item,'image')) : RvMedia::getDefaultImage()}}" alt="slide"
                            class="bg-img">
                        @if(has_sub_field($sub_item, 'title'))
                        <h2 class="title text-uppercase text-light font40">
                            {!! has_sub_field($sub_item,'title') !!}  
                        </h2>
                        @endif
                        <div class="detail" onmouseover="this.style.background='{{get_field($data, 'color_code')}}'">
                            @if(has_sub_field($sub_item, 'title'))
                            <h2 class="titlee text-uppercase text-light font40">
                                {!! has_sub_field($sub_item,'title') !!}  
                            </h2>
                            @endif
                            @if(has_sub_field($sub_item, 'desc'))
                            <p class="text text-light font18 mCustomScrollbar">
                                {!! has_sub_field($sub_item,'desc') !!}  
                            </p>
                            @endif
                            @if(has_sub_field($sub_item, 'link'))
                            <a href=" {!! has_sub_field($sub_item, 'link') ? has_sub_field($sub_item, 'link') : '' !!}" class="readmore text-uppercase text-light">Xem Th??m <span><i class="fas fa-arrow-right"></i>
                            </span>
                            </a>
                            @endif
                        </div>

                    </div>
                    @endforeach
                    

                </div>
                {{-- <div class="swiper-pagination"></div> --}}



            </div>
            @endforeach
            @endif


        </div>
        
    </div>
    <div class="activity-detail-wrapper">
        @if(has_field($data, 'repeater_activity_nonslide'))
        @foreach(has_field($data, 'repeater_activity_nonslide') as $item)
        <div class="activity-detail mb-40 mt-40" >
            <div class="activity-detail__left">
                <div class="row item">
                    @foreach(has_sub_field($item, 'repeater_right_content_activity') as $sub_item)
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{ Storage::disk('public')->exists(has_sub_field($sub_item,'image')) ? get_image_url(has_sub_field($sub_item,'image')) : RvMedia::getDefaultImage()}}" alt="slide"
                            class="">

                            @if(has_sub_field($sub_item, 'title'))
                        <h2 class=" title text-uppercase text-light
                            font40">
                            {!! has_sub_field($sub_item,'title') !!}  
                        </h2>
                            @endif

                        <div class="detail" onmouseover="this.style.background='{{get_field($data, 'color_code')}}'">
                            @if(has_sub_field($sub_item, 'title'))
                            <h2 class="titlee text-uppercase text-light font40">
                                {!! has_sub_field($sub_item,'title') !!}  
                            </h2>
                            @endif
                            @if(has_sub_field($sub_item, 'desc'))
                            <p class="text text-light font18 mCustomScrollbar">
                                {!! has_sub_field($sub_item,'desc') !!}  
                               </p>
                               @endif

                               @if(has_sub_field($sub_item, 'link'))
                            <a href="{!! has_sub_field($sub_item, 'link') ? has_sub_field($sub_item, 'link') : '' !!}" class="readmore text-uppercase text-light">Xem Th??m <span><i
                                        class="fas fa-arrow-right"></i></span></a> 
                                @endif
                        </div>
                    </div>
                    @endforeach
                  
                </div>
            </div>
            <div class="activity-detail__right mCustomScrollbar">
                <div class="content">
                  
                    @if(has_sub_field($item, 'content_left_activity_title'))
                    <h2 class="text-uppercase title mb-3 font40" style="color: {{get_field($data, 'color_code')}}">
                        {!! has_sub_field($item,'content_left_activity_title') !!}  

                    </h2>
                    @endif
                    @if(has_sub_field($item, 'content_left_activity_desc'))
                        <p class="text font18">
                            {!! has_sub_field($item,'content_left_activity_desc') !!}  
                        </p>
                        @endif
                </div>
            </div>
        </div>
        @endforeach 
        @endif
     

    </div>
    {{-- @php
    $posts = get_posts_by_category($category->id ?? 18, 5);
    @endphp --}}
    <div class="activity-news mt-60 mb-60">
        <div class="activity-news__top container-customize mt-40 mb-40">
            <div class="title ">
               
                <h2 class="text-uppercase font40" style="color: {{get_field($data, 'color_code')}}">Tin t???c</h2>
                <div class="line" style="background-color: {{get_field($data, 'color_code')}}">
                </div>

            </div>

            <div class="readmore text-uppercase font-weight-bold">
                <a href="{!! has_field($data, 'field_link') !!}" style="color: {{get_field($data, 'color_code')}}">Xem t???t c???</a>
            </div>
        </div>

        <div class="swiper-container slide-news">
            <div class="swiper-wrapper">
                @if (!empty($post_slide))
                @foreach ($post_slide as $post_sl)  
                <div class="swiper-slide">
                   
                        <div class="news-top">
                            <a href="{{ $post_sl->url }}"><img src="{{ get_object_image($post_sl->image) }}"
                                alt="{{ $post_sl->name }}"></a>
                        </div>
                        <div class="news-bottom">
                            <a href="{{ $post_sl->url }}" class="text-dark">
                            <div class="title text-uppercase font20">
                                {{str::words($post_sl->name,18)}}
                            </div>
                            <div class="date mt-2">
                                {{ date_format($post_sl->created_at, 'd/m/Y') }}
                            </div>
                            <div class="desc text-justify mt-2 font18">
                                {{str::words($post_sl->description,40)}}
                            </div>
                        </a>
                        </div>
                  

                </div>
                @endforeach
                @endif
             
            </div>

            <div class="swiper-button-prev" style="background-color: {{get_field($data, 'color_code')}}"></div>
            <div class="swiper-button-next" style="background-color: {{get_field($data, 'color_code')}}"></div>

            <div class="swiper-pagination" ></div>
        </div>

        <div class="opt">
            <a href="{!! has_field($data, 'bottom_field_link') !!}" target="_blank">
                {{-- <img src="{{ Theme::asset()->url('images/lvhd/opt2.png') }}"> --}}
                <i class="fad fa-chevron-double-down" style="color: {{get_field($data, 'color_code')}}"></i>
            </a>

        </div>
    </div>
    
</div>

<div class="field-of-activity-box" id="button-activity">
    <div class="box-node-right">
        {!!
            Menu::renderMenuLocation('field-of-activity-box', [
                'options' => [],
                'theme' => true,
                'view' => 'field-of-activity-box',
            ]) 
        !!}
    </div>
</div>
