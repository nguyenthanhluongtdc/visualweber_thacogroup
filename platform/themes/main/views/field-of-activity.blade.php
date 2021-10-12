@php
use Platform\Page\Repositories\Interfaces\PageInterface;
// $homepageId = BaseHelper::getHomepageId();
$page = app(PageInterface::class)->findById(28); 
@endphp
<div class="field-of-activity">
    <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
        <div class="swiper-wrapper">
            @if ($posts = get_featured_posts(theme_option('number_post_banner'),[]))
            @foreach ($posts as $post)
            <div class="swiper-slide item-slider-top">
                <img src="{{ RvMedia::getImageUrl($post->image_banner, 'featured', false, RvMedia::getDefaultImage()) }}" alt="{{$post->name}}" alt="slide"
                    class="img-slider  h-auto w-100">
                <div class="post-banner  {{has_field($page, 'show_hide') == 'hide' ? 'd-none' : ''}}">
                    <h2 class="font24">
                        {{str::words($post->name,20)}}  
                       
                    </h2>
                    <div class="date mt-2">
                        <span>
                            {{$post->created_at->format('d/m/Y')}}
                        </span>
                    </div>
                    <p class="desc font18 text-justify">
                        {{str::words($post->description,80)}}  
                    </p>
                    
                    <a href="{{$post->url}}" class="link">
                        {!!__('Xem thêm')!!} <span><i class="fas fa-arrow-right"></i></span>
                    </a>
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
                <h3 class="text-uppercase font20">LĨNH VỰC <br> 
                    @if(has_field($data, 'field_name'))
                    
                    <span class="text font40"> {!! has_field($data,'field_name') !!} </span>
                    @endif
                </h3>

            </div>
            <div class="line">
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
                    <div class="content">
                        {{-- <img src="{{Theme::asset()->url('images/lvhd/thiso1.png') }}" alt="slide" class="symbol">
                        <img src="{{Theme::asset()->url('images/lvhd/thiso.png') }}" alt="slide" class="symbol-thiso mb-2"> --}}

                        @if(has_sub_field($item, 'content_left_activity_title'))
                        <h2 class="text-uppercase title mb-3 font40">
                            {!! has_sub_field($item,'content_left_activity_title') !!}  

                        </h2>
                        @endif
                        @if(has_sub_field($item, 'content_left_activity_desc'))
                        <p class="text font18">
                            {!! has_sub_field($item,'content_left_activity_desc') !!}  
                        </p>
                        @endif
                        <div class="control">
                            <div class="swiper-button-prev"></div>
                            <div class="mouse-control">
                                <span class="mouse"></span>
                                <p class="text-pagi font18 text-uppercase">Trượt để khám phá</p>
                            </div>
                            <div class="swiper-button-next"></div>

                        </div>

                    </div>

                </div>
                <div class="swiper-wrapper main-content-right">
                    @foreach(has_sub_field($item, 'repeater_right_content_activity') as $sub_item)
                    <div class="swiper-slide">
                        <div class="bg"></div>
                        <img src="{{ Storage::disk('public')->exists(has_sub_field($sub_item,'image')) ? get_image_url(has_sub_field($sub_item,'image')) : RvMedia::getDefaultImage()}}" alt="slide"
                            class="bg-img">
                        @if(has_sub_field($sub_item, 'title'))
                        <h2 class="title text-uppercase text-light font40">
                            {!! has_sub_field($sub_item,'title') !!}  
                        </h2>
                        @endif
                        <div class="detail">
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
                            <a href=" {!! has_sub_field($sub_item, 'link') ? has_sub_field($sub_item, 'link') : '' !!}" class="readmore text-uppercase text-light">Xem Thêm <span><i class="fas fa-arrow-right"></i>
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

                        <div class="detail">
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
                            <a href="{!! has_sub_field($sub_item, 'link') ? has_sub_field($sub_item, 'link') : '' !!}" class="readmore text-uppercase text-light">Xem Thêm <span><i
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
                    <h2 class="text-uppercase title mb-3 font40">
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
        {{-- <div class="activity-detail mb-40 mt-40" >
            <div class="activity-detail__left">
                <div class="row item">
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{ Theme::asset()->url('images/lvhd/lv7.jpg') }}" alt="slide"
                            class="">
                        <h2 class=" title text-uppercase text-light
                            font40">ăn uống</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font40">ăn uống</h2>
                            <p class="text text-light font18 mCustomScrollbar">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque
                                voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm <span><i
                                        class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{ Theme::asset()->url('images/lvhd/lv8.jpg') }}" alt="slide"
                            class="">
                        <h2 class=" title text-uppercase text-light
                            font40">nhà hàng</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font40">nhà hàng</h2>
                            <p class="text text-light font18 mCustomScrollbar">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque
                                voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm <span><i
                                        class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{ Theme::asset()->url('images/lvhd/lv9.jpg') }}" alt="slide"
                            class="">
                        <h2 class=" title text-uppercase text-light
                            font40">cafe</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font40">cafe</h2>
                            <p class="text text-light font18 mCustomScrollbar">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque
                                voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm <span><i
                                        class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="activity-detail__right mCustomScrollbar">
                <div class="content">
                   
                    <h2 class="text-uppercase title mb-3 font40">
                        ẩm thực
                    </h2>
                    <p class="text font18 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatem, dolores ab nam
                        eligendi tempore quos autem omnis voluptates! Dolor odio veritatis minus vero doloremque!
                    </p>
                </div>
            </div>
        </div>

        <div class="activity-detail mb-40 mt-40" >
            <div class="activity-detail__left">
                <div class="row item">
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{ Theme::asset()->url('images/lvhd/lv10.jpg') }}" alt="slide"
                            class="">
                        <h2 class=" title text-uppercase text-light
                            font40">trung tâm hội nghị - <br> tiệc cưới cao cấp</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font40">trung tâm hội nghị - <br> tiệc cưới cao
                                cấp</h2>
                            <p class="text text-light font18 mCustomScrollbar">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque
                                voluptatibus et.
                            </p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm <span><i
                                        class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{ Theme::asset()->url('images/lvhd/lv11.jpg') }}" alt="slide"
                            class="">
                        <h2 class=" title text-uppercase text-light
                            font40">trung tâm hội nghị - <br> tiệc cưới trung cấp</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font40">trung tâm hội nghị - <br> tiệc cưới
                                trung cấp</h2>
                            <p class="text text-light font18 mCustomScrollbar">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque
                                voluptatibus et. </p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm <span><i
                                        class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="activity-detail__right mCustomScrollbar">
                <div class="content">
                   
                    <h2 class="text-uppercase title mb-3 font40">
                        trung tâm  <br> hội nghị - tiệc cưới
                    </h2>
                    <p class="text font18 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatem, dolores ab nam
                        eligendi tempore quos autem omnis voluptates! Dolor odio veritatis minus vero doloremque!
                    </p>
                </div>
            </div>
        </div>
        <div class="activity-detail mb-40 mt-40" >
            <div class="activity-detail__left">
                <div class="row item">
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{ Theme::asset()->url('images/lvhd/lv12.jpg') }}" alt="slide"
                            class="">
                        <h2 class=" title text-uppercase text-light
                            font40">thời trang - mỹ phẩm cao cấp</h2>
                        <div class="detail ">
                            <h2 class="titlee text-uppercase text-light font40">thời trang - mỹ phẩm cao cấp</h2>
                            <p class="text text-light font18 mCustomScrollbar">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque
                                voluptatibus et. </p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm <span><i
                                        class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="activity-detail__right mCustomScrollbar">
                <div class="content">
                   
                    <h2 class="text-uppercase title mb-3 font40">
                        department store
                    </h2>
                    <p class="text font18 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatem, dolores ab nam
                        eligendi tempore quos autem omnis voluptates! Dolor odio veritatis minus vero doloremque!
                    </p>
                </div>
            </div>
        </div> --}}

    </div>
    <div class="activity-news mt-60 mb-60">
        <div class="activity-news__top container-customize mt-40 mb-40">
            <div class="title ">
               
                <h2 class="text-uppercase font40">Tin tức</h2>
                <div class="line">
                </div>

            </div>

            <div class="readmore text-uppercase font-weight-bold">
                <a href="{!! has_field($data, 'field_link') !!}">Xem tất cả</a>
            </div>
        </div>

        <div class="swiper-container slide-news">
            <div class="swiper-wrapper">
               
                @if (!empty($posts))
                @foreach ($posts as $post)
                <div class="swiper-slide">
                   
                        <div class="news-top">
                            <a href="{{ $post->url }}"><img src="{{ get_object_image($post->image) }}"
                                alt="{{ $post->name }}"></a>
                        </div>
                        <div class="news-bottom">
                            <a href="{{ $post->url }}" class="text-dark">
                            <div class="title text-uppercase font20">
                                {{str::words($post->name,18)}}
                            </div>
                            <div class="date mt-2">
                                {{ date_format($post->created_at, 'd/m/Y') }}
                            </div>
                            <div class="desc text-justify mt-2 font18">
                                {{str::words($post->description,40)}}
                            </div>
                        </a>
                        </div>
                  

                </div>
                @endforeach
                @endif
             
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="swiper-pagination"></div>
        </div>

        <div class="opt">
            <a href="#">
                <img src="{{ Theme::asset()->url('images/lvhd/opt2.png') }}">
            </a>

        </div>
    </div>
    
</div>

<div class="field-of-activity-box" id="button-activity">
    <div class="box-node-right">
        <ul class="pagination-customize">
            <li class="pagi-item one">
                <span class="text text-uppercase"> logistics </span>
                <a href="#section_one" title="" class="number click_scroll">
                    <img loading="lazy" src="{{ Theme::asset()->url('images/lvhd/thilogi-logo.png') }}" alt=""
                        class="icon">

                </a>


            </li>

            <li class="pagi-item two">
                <span class="text text-uppercase"> đầu tư và xây dựng </span>
                <a href="#section_two" title="" class="number click_scroll">
                    <img loading="lazy" src="{{ Theme::asset()->url('images/lvhd/thadico-logo.png') }}" alt=""
                        class="icon">
                </a>

            </li>

            <li class="pagi-item three">
                <span class="text text-uppercase"> ô tô & cơ khí </span>
                <a href="#section_three" title="" class="number click_scroll">
                    <img loading="lazy" src="{{ Theme::asset()->url('images/lvhd/thacoauto-logo.png') }}" alt=""
                        class="icon">
                </a>

            </li>

            <li class="pagi-item four">
                <span class="text text-uppercase"> nông nghiệp </span>
                <a href="#section_four" title="" class="number click_scroll">
                    <img loading="lazy" src="{{ Theme::asset()->url('images/lvhd/thagrico-logo.png') }}" alt=""
                        class="icon">
                </a>

            </li>

            <li class="pagi-item five">
                <span class="text text-uppercase"> thương mại và dịch vụ </span>
                <a href="#section_five" title="" class="number click_scroll">
                    <img loading="lazy" src="{{ Theme::asset()->url('images/lvhd/thiso-logo.png') }}" alt=""
                        class="icon">
                </a>

            </li>

        </ul>
    </div>
</div>
