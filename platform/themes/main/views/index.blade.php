
 <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
    <div class="swiper-wrapper">
        @if(has_field($page, 'main_slide_home'))
        @foreach (get_field($page, 'main_slide_home') as $item)
        <div class="swiper-slide" >
            <img src="{{ has_sub_field($item , 'image') ? get_object_image(get_sub_field($item , 'image')) :''}}" alt="" class="img-slider h-100vh w-100">
            @if(has_field($page, 'show_hide'))
            <div class="bg-post">
               @if ($post = get_featured_posts(1,[]))
              
                <div class="content {{has_field($page, 'show_hide') == 'show' ? 'd-block' : 'd-none'}} " data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="50" class="aos-init aos-animate">
                    <h2 class="font24 title-post">
                    {{$post[0]->name}}
                    </h2>
                    <div class="description text-justify">
                    <p class=" font18">
                       {{$post[0]->description}}
                        </p>
                    </div>
                    <a href="" class="read-more">Xem thêm</a>
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

<div class="field-activity-wrapper mt-80">
    <div class="container-customize ">
        {!! do_shortcode('[field-activity][/field-activity]') !!}
    </div>
</div>
<div class="partner-wrapper">
    <h3 class="title__company font40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate"> {{has_field($page, 'tieu_de') ? get_field($page, 'tieu_de') : ''}}</h3>
    <div class="partner-banner parallax-window" data-parallax="scroll">
        <div class="container-customize logo-partner"> 
            <div class="swiper-container logo-company" style="display:none">
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
            </div>
            <div class="logo-desktop">
              
                @if(has_field($page,'logo_company'))
                @foreach (has_field($page,'logo_company') as $logo_item)
                    
              
                <div class="logo-item"  data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                    <img class=""  src="{{ has_sub_field($logo_item , 'image') ? get_object_image(get_sub_field($logo_item , 'image')) :''}}" alt="">
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<div class="news-home-wrapper">
    <div class="container-customize">
        <div class="news-home__content">
            <div class="swiper-container new-post-slide" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
                <div class="swiper-wrapper">
                    @if ($post_home_top = get_featured_posts(3,[]))
                    @foreach ($post_home_top as $item_post)
                    <div class="swiper-slide">
                        <div class="news-home__top">
                                    <div class="img-post">
                                        <img class="img-mw-100" src="{{ RvMedia::getImageUrl($item_post->image, 'featured', false, RvMedia::getDefaultImage()) }}" alt="{{$item_post->name}}">
                                    </div>
                                    <div class="news-post h-100">
                                        <h3 class="font20 title">BẢN TIN NỘI BỘ</h3>
                                        <a href="/chi-tiet-truyen-thong">
                                            <h4 class="name font20">{{$item_post->name}}</h4>
                                        </a>
                                       
                                        <span class="time">{{$item_post->created_at->format('d-m-y')}}</span>
                                        <p class="description font18 text-justify">{{$item_post->description}}</p>
                                        <a href="" class="read-more">Xem thêm</a>
                                    </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    {{-- <div class="swiper-slide">
                        <div class="news-home__top">
                                    <div class="img-post">
                                        <img class="img-mw-100" src="{{ Theme::asset()->url('images/home/1-post.jpg') }}" alt="">
                                    </div>
                                    <div class="news-post h-100">
                                        <h3 class="font20 title">BẢN TIN NỘI BỘ</h3>
                                        <a href="chi-tiet-truyen-thong">
                                            <h4 class="name font20">HÀNH TRÌNH KẾT NỐI YÊU THƯƠNG</h4>
                                        </a>
                                       
                                        <span class="time">23/06/2021</span>
                                        <p class="description font18 text-justify">Vượt quãng đường hàng ngàn cây số, những ngày qua, hàng chục chuyến xe nghĩa tình do Tập đoàn THACO hỗ trợ đã đón hàng trăm người Quảng xa xứ mưu sinh tại TP. HCM về quê. Giữa cơn lao đao vì dịch bệnh hoành hành, sự hỗ trợ kịp thời ấy đã góp phần cùng tỉnh Quảng Nam chăm lo cho những bà con lao động nghèo, đồng thời san sẻ gánh nặng với TP. HCM đang oằn mình trong tâm dịch.
                                        </p>
                                        <a href="/chi-tiet-truyen-thong" class="read-more">Xem thêm</a>
                                    </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="news-home__top">
                                    <div class="img-post">
                                        <img class="img-mw-100" src="{{ Theme::asset()->url('images/home/5-post.jpg') }}" alt="">
                                    </div>
                                    <div class="news-post h-100">
                                        <h3 class="font20 title">BẢN TIN NỘI BỘ</h3>
                                        <a href="/chi-tiet-truyen-thong">
                                            <h4 class="name font20">Tổ hợp cơ khí THACO Chu Lai phát triển chế tạo khuôn mẫu</h4>
                                        </a>
                                       
                                        <span class="time">23/06/2021</span>
                                        <p class="description font18 text-justify">Khuôn mẫu được xem là “nền tảng của nền công nghiệp”, được sử dụng trong rất nhiều ngành sản xuất. Nhằm phát triển công nghiệp chế tạo khuôn mẫu phục vụ sản xuất ô tô và các ngành công nghiệp khác, Tổ hợp Cơ khí THACO Chu Lai đã đầu tư sản xuất khuôn mẫu theo hướng tạo ra sản phẩm số lượng lớn, thời gian sản xuất ngắn, chất lượng cao, đáp ứng yêu cầu ngày càng tăng của thị trường.

                                        </p>
                                        <a href="/chi-tiet-truyen-thong" class="read-more">Xem thêm</a>
                                    </div>
                        </div>

                    </div> --}}
                </div>
                
                <div class="swiper-pagination"></div>
            </div>    
           
           
            <div class="post-slider">
                <div class="swiper-container post-slide-bottom">
                    <div class="swiper-wrapper">
                        @if($post_home_bottom = get_recent_posts(6))
                        @foreach ($post_home_bottom as $post_bottom)
                            <div class="swiper-slide d-flex justify-content-center">             
                                    <div class="post_content_bottom h-100">
                                        <a class="post-wrapper" href="">
                                            <div class="post-thumbnail">
                                                <img src="{{ RvMedia::getImageUrl($post_bottom->image,'', false, RvMedia::getDefaultImage()) }}" alt="{{$item_post->name}}" alt="{{$post_bottom->name}}">
                                            </div>
                                        
                                            <h4 class="post_name font20">{{$post_bottom->name}}</h4>
                                            <p class="post_description font18">{{$post_bottom->description}}…
                                            </p>
                                            <span class="time">{{$item_post->created_at->format('d-m-y')}}</span>
                                        </a>   
                                    </div>
                                
                            </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="swiper-button-next drop-shadow-button"> <img src="{{ Theme::asset()->url('images/home/Icon-right.png') }}" alt="">  </div>
                    <div class="swiper-button-prev drop-shadow-button"> <img src="{{ Theme::asset()->url('images/home/icon-left.png') }}" alt=""> </div>
                    
        
                </div>
               
            </div>
            
        </div>
    </div>
   
</div>
<div class="media-wrapper" >
    <div class="media-banner">
        <div class="swiper-container field-activity-slide-top" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
            <div class="swiper-wrapper">
                @if (has_field($page, 'hinh_anh'))
                @foreach (get_field($page, 'hinh_anh', []) as $value)
                <div class="swiper-slide">                  
                   
                    @if (get_sub_field($value, 'type') == 'video')

                    @if (has_sub_field($value, 'image'))

                    <div class="video-wrapper">
                        <video muted   class="__video w-100 {{has_sub_field($value, 'hien_thi_2_video') == '1_video' ? 'd-none' : ''}}">
                            <source src="{{ RvMedia::getImageUrl(get_sub_field($value, 'image')) }}" type="video/mp4">
                        </video> 
                        <video muted   class="__video   {{has_sub_field($value, 'hien_thi_2_video') == '2_video' ? 'bg-gray' : ''}}  w-100 video-full">
                            <source src="{{ RvMedia::getImageUrl(get_sub_field($value, 'image')) }}" type="video/mp4">
                        </video> 
                       
                    </div>
                    @endif
                    @endif
                    @if (get_sub_field($value, 'type') == 'img')
                    @if (has_sub_field($value, 'image'))
                        <img  loading="lazy" class="w-100 h-100"
                            src="{{ RvMedia::getImageUrl(get_sub_field($value, 'image'), 'image') }}"
                            alt="Hình ảnh">
                    @endif
                    @endif

                </div>
                @endforeach
                @endif
               
            <div class="swiper-pagination"></div>
            <a href="" class="read-more">Xem thêm</a>
        </div>
    </div>
</div>

<div class="recruitment-wrapper">
    <div class="recruitment-banner " style="background-image:url({{ has_field($page , 'image_bg') ? get_object_image(get_field($page , 'image_bg')) :''}})">
        <div class="swiper-content">    
            <div class="swiper-content__desc">
                <h3 class="title font28">{{ has_field($page , 'title')}}</h3>
                <p class="description font24 text-justify">
                    {{ has_field($page , 'desc_short') ? get_field($page , 'desc_short') :''}}
                </p>
                <a href="{{ has_field($page , 'link_apply') ? get_field($page , 'link_apply') :''}}" class="btn-apply font24">Ứng tuyển ngay</a>
            </div>
            <div class="bottom_slider_wrapper">
                <div class="title_label">
                    <h3 class="title font28 font-myria-bold">Vị trí</h3>
                </div>
               
                <div class="swiper-container recruitment-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                        <div class="swiper-wrapper">
                            @if(has_field($page , 'position'))
                                @foreach (get_field($page , 'position') as $position)
                                <div class="swiper-slide" >
                                    <div class="swiper-content-bottom">
                                        <a href="{{ has_sub_field($position , 'link') ? get_sub_field($position , 'link') :''}}" target="_self">
                                            <p class="postion-apply font28"> {{ has_sub_field($position , 'position_name') ? get_sub_field($position , 'position_name') :''}}
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            @endif

                        </div>
                        <div class="swiper-pagination"></div>
                </div>
            </div>
           
        </div> 
    </div>
</div>

 