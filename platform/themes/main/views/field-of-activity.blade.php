<div class="field-of-activity">
    <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
        <div class="swiper-wrapper">
           
            <div class="swiper-slide item-slider-top">
                <img src="{{Theme::asset()->url('images/lvhd/slider3.jpg') }}" alt="slide" class="img-slider  h-auto w-100">
                <div class="post-banner">
                    <h2 class="font24">
                        THILOGI thay đổi nhận diện thương hiệu trên các phương tiện vận chuyển
                    </h2>
                    <p class="desc font18 text-justify">
                        Tháng 6/2021, THILOGI đã đưa vào hoạt động xe đầu kéo mới vừa được sản xuất tại nhà máy THACO Tải thuộc THACO Chu Lai. 
                        05 xe mới này được thiết kế và thực hiện theo nhận diện thương hiệu mới với tông đỏ là màu sắc chủ đạo của THILOGI thể hiện sự linh hoạt, mạnh mẽ và nhanh chóng. 
                    </p>
                    <div class="date mt-2">
                        <span>
                            10/04/2021
                        </span>
                    </div>
                    <a href="#" class="link">
                        Xem thêm <span><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div> 
            </div>
            <div class="swiper-slide item-slider-top">
                <img src="{{Theme::asset()->url('images/lvhd/slider2.jpg') }}" alt="slide" class="img-slider  h-auto w-100">
                <div class="post-banner">
                    <h2 class="font24 text-justify">
                        THILOGI thay đổi nhận diện thương hiệu trên các phương tiện vận chuyển
                    </h2>
                    <p class="desc font18 text-justify">
                        Tháng 6/2021, THILOGI đã đưa vào hoạt động xe đầu kéo mới vừa được sản xuất tại nhà máy THACO Tải thuộc THACO Chu Lai. 
                        05 xe mới này được thiết kế và thực hiện theo nhận diện thương hiệu mới với tông đỏ là màu sắc chủ đạo của THILOGI thể hiện sự linh hoạt, mạnh mẽ và nhanh chóng. 
                    </p>
                    <a href="#" class="link">
                        Xem thêm <span><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
       
    </div>

    <div class="commercial-field container-customize mt-60 mb-60">
      
            <div class="commercial-field__left">
                <div class="left-top d-flex justify-content-left" >
                    {{-- <img src="{{Theme::asset()->url('images/lvhd/icon1.png') }}"> --}}
                    <h3 class="text-uppercase font20">LĨNH VỰC <br> <span class="text font40">THƯƠNG MẠI & DỊCH VỤ</span> </h3>
                    
                </div>
                <div class="line">
                </div>
                <p class="content mt-25 ">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                     in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                     mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
                     eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit 
                     aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem 
                     ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
            </div>
            <div class="commercial-field__right">
               <div class="swiper-container commercial-field-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{Theme::asset()->url('images/lvhd/thiso.jpg') }}" alt="slide" class="img-slider img-mw-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{Theme::asset()->url('images/lvhd/thiso.jpg') }}" alt="slide" class="img-slider img-mw-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{Theme::asset()->url('images/lvhd/thiso.jpg') }}" alt="slide" class="img-slider  img-mw-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{Theme::asset()->url('images/lvhd/thiso.jpg') }}" alt="slide" class="img-slider  img-mw-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{Theme::asset()->url('images/lvhd/thiso.jpg') }}" alt="slide" class="img-slider  img-mw-100">
                        </div>
                    </div>
                    
                    <div class="swiper-pagination"></div>
               </div>
              
            </div>

    </div>
    <div class="future-goal-banner-activity mt-60 mb-60" style="background-image:url('{{ get_field($page, 'background_vision_block') ? get_image_url(get_field($page, 'background_vision_block')) : Theme::asset()->url('images/lvhd/banner.jpg') }}')">
        <div class="future-goal-wrapper container-customize">
            <div class="row mr-0 ml-0">
                @if(has_field($page, 'repeater_vision_block'))
                @foreach(has_field($page, 'repeater_vision_block') as $key => $item)
                <div class="col-sm-4 pl-0 pr-0">
                    <div class="future-goal p-lr-90 {{$loop->last ? 'last' :''}}" data-aos="fade-up" data-aos-duration="700" data-aos-delay="{{50 + $key*100}}" class="aos-init aos-animate">
                        <img src="{{ get_image_url(has_sub_field($item, 'logo')) }}" alt="{{has_sub_field($item, 'title')}}">
                        <h3 class="title font40 text-light">{{has_sub_field($item, 'title')}}</h3>
                        <div class="desc font18  text-justify">
                            {!!has_sub_field($item, 'description')!!}
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
            <div class="swiper-container swiper-content-detail mb-40" id="section_one">
                
                <div class="main-content-left">
                    <div class="content">
                        {{-- <img src="{{Theme::asset()->url('images/lvhd/thiso1.png') }}" alt="slide" class="symbol">
                        <img src="{{Theme::asset()->url('images/lvhd/thiso.png') }}" alt="slide" class="symbol-thiso mb-2"> --}}
                        <h2 class="text-uppercase title mb-3 font40">
                            bán lẻ tiêu dùng
                           
                        </h2>
                        <p class="text font18">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatem, dolores ab Lorem ipsum dolor sit amet.
                        </p>
                        <span class="mouse"></span>
                        <p class="text-pagi font18 text-uppercase">Trượt để khám phá</p>
                    </div>
                    
                </div>
                <div class="swiper-wrapper main-content-right">
                   
                    <div class="swiper-slide">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv1.jpg') }}" alt="slide" class="bg-img">
                        <h2 class="title text-uppercase text-light font40">đại siêu thị</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font40">đại siêu thị</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm <span><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                        
                    </div>
                    <div class="swiper-slide">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv2.jpg') }}" alt="slide" class="bg-img">
                        <h2 class="title text-uppercase text-light font40">siêu thị</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font40">siêu thị</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm <span><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv1.jpg') }}" alt="slide" class="bg-img">
                        <h2 class="title text-uppercase text-light font40">cửa hàng tiện lợi</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font40">cửa hàng tiện lợi</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm <span><i class="fas fa-arrow-right"></i></span></a>
                        </div> 
                    </div>
                    <div class="swiper-slide">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv2.jpg') }}" alt="slide" class="bg-img">
                        <h2 class="title text-uppercase text-light font40">đại siêu thị</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font40">đại siêu thị</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm <span><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    
                </div>
                {{-- <div class="swiper-pagination"></div> --}}
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
               

                
            </div>
           
           
            
        </div>

        
        
    </div>








    <div class="activity-news mt-60 mb-60">
        <div class="activity-news__top container-customize mt-40 mb-40">
            <div class="title ">
                {{-- <img src="{{Theme::asset()->url('images/lvhd/icon1.png') }}"> --}}
                <h2 class="text-uppercase font40">Tin tức</h2>
            </div>
    
            <div class="readmore text-uppercase font-weight-bold">
                <a href="#">Xem thêm <i class="fas fa-arrow-right"></i> </a>
            </div>
        </div>
        
        <div class="swiper-container slide-news">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <a href="#">
                        <div class="news-top">
                            <img src="{{Theme::asset()->url('images/lvhd/news1.jpg') }}">
                        </div>
                        <div class="news-bottom">
                            <div class="title text-uppercase font20">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet consectetur adipisicing elit
                            </div>
                            <div class="date mt-2">
                                10/12/2021
                            </div>
                            <div class="desc text-justify mt-2 font18">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus rem quia reprehenderit iure praesentium? Sit quia magnam beatae! Dolorum, suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio natus accusamus, accusantium voluptatibus cumque rerum deleniti assumenda quo est sapiente.
                            </div>
                            
                        </div>
                    </a>
                    
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <div class="news-top">
                            <img src="{{Theme::asset()->url('images/lvhd/news1.jpg') }}">
                        </div>
                        <div class="news-bottom">
                            <div class="title text-uppercase">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit
                            </div>
                            <div class="date mt-2">
                                10/12/2021
                            </div>
                            <div class="desc text-justify mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus rem quia reprehenderit iure praesentium? Sit quia magnam beatae! Dolorum, suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio natus accusamus, accusantium voluptatibus cumque rerum deleniti assumenda quo est sapiente.
                            </div>
                           
                        </div>
                    </a>
                    
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <div class="news-top">
                            <img src="{{Theme::asset()->url('images/lvhd/news1.jpg') }}">
                        </div>
                        <div class="news-bottom">
                            <div class="title text-uppercase">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit
                            </div>
                            <div class="date mt-2">
                                10/12/2021
                            </div>
                            <div class="desc text-justify mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus rem quia reprehenderit iure praesentium? Sit quia magnam beatae! Dolorum, suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio natus accusamus, accusantium voluptatibus cumque rerum deleniti assumenda quo est sapiente.
                            </div>
                            
                        </div>
                    </a>
                    
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <div class="news-top">
                            <img src="{{Theme::asset()->url('images/lvhd/news1.jpg') }}">
                        </div>
                        <div class="news-bottom">
                            <div class="title text-uppercase">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit
                            </div>
                            <div class="date mt-2">
                                10/12/2021
                            </div>
                            <div class="desc text-justify mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus rem quia reprehenderit iure praesentium? Sit quia magnam beatae! Dolorum, suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio natus accusamus, accusantium voluptatibus cumque rerum deleniti assumenda quo est sapiente.
                            </div>
                           
                        </div>
                    </a>
                    
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <div class="news-top">
                            <img src="{{Theme::asset()->url('images/lvhd/news1.jpg') }}">
                        </div>
                        <div class="news-bottom">
                            <div class="title text-uppercase">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit
                            </div>
                            <div class="date mt-2">
                                10/12/2021
                            </div>
                            <div class="desc text-justify mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus rem quia reprehenderit iure praesentium? Sit quia magnam beatae! Dolorum, suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio natus accusamus, accusantium voluptatibus cumque rerum deleniti assumenda quo est sapiente.
                            </div>
                           
                        </div>
                    </a>
                    
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <div class="news-top">
                            <img src="{{Theme::asset()->url('images/lvhd/news1.jpg') }}">
                        </div>
                        <div class="news-bottom">
                            <div class="title text-uppercase font20">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit
                            </div>
                            <div class="date mt-2">
                                10/12/2021
                            </div>  
                            <div class="desc text-justify mt-2 font18">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus rem quia reprehenderit iure praesentium? Sit quia magnam beatae! Dolorum, suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio natus accusamus, accusantium voluptatibus cumque rerum deleniti assumenda quo est sapiente.
                            </div>
                           
                        </div>
                    </a>
                    
                </div>
            </div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="swiper-pagination"></div>
        </div>

        <div class="opt">
            <a href="#">
                <img src="{{Theme::asset()->url('images/lvhd/opt2.png') }}">
            </a>
           
        </div>
    </div>




</div>



<div class="field-of-activity-box" id="button-activity">
    <div class="box-node-right">
        <ul class="pagination-customize" >
            <li class="pagi-item one" >
                <span class="text text-uppercase"> bán lẻ tiêu dùng </span>
                <a href="#section_one" title="" class="number click_scroll">
                    <img loading="lazy" src="{{Theme::asset()->url('images/lvhd/thilogi-logo.png') }}" alt="" class="icon">

                </a>
              

            </li>

            <li class="pagi-item two" >
                <span class="text text-uppercase"> vui chơi giải trí </span>
                <a href="#section_two" title="" class="number click_scroll">
                    <img loading="lazy" src="{{Theme::asset()->url('images/lvhd/thadico-logo.png') }}" alt="" class="icon">
                </a>
                
            </li>

            <li class="pagi-item three">
                <span class="text text-uppercase"> ẩm thực </span>
                <a href="#section_three" title="" class="number click_scroll">
                    <img loading="lazy" src="{{Theme::asset()->url('images/lvhd/thacoauto-logo.png') }}" alt="" class="icon">
                </a>
                
            </li>

            <li class="pagi-item four">
                <span class="text text-uppercase"> trung tâm hội nghị - tiệc cưới </span>
                <a href="#section_four" title="" class="number click_scroll">
                    <img loading="lazy" src="{{Theme::asset()->url('images/lvhd/thagrico-logo.png') }}" alt="" class="icon">
                </a>
               
            </li>

            <li class="pagi-item five">
                <span class="text text-uppercase"> department store </span>
                <a href="#section_five" title="" class="number click_scroll">
                    <img loading="lazy" src="{{Theme::asset()->url('images/lvhd/thiso-logo.png') }}" alt="" class="icon">
                </a>
              
            </li>

        </ul>
    </div>
</div>

