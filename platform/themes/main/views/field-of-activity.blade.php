<div class="field-of-activity">
    <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
        <div class="swiper-wrapper">
           
            <div class="swiper-slide item-slider-top">
                <img src="{{Theme::asset()->url('images/lvhd/slider3.jpg') }}" alt="slide" class="img-slider h-100vh w-100">
                <div class="post-banner">
                    <h2 class="font24">
                        THILOGI thay đổi nhận diện thương hiệu trên các phương tiện vận chuyển
                    </h2>
                    <p class="desc font18">
                        Tháng 6/2021, THILOGI đã đưa vào hoạt động xe đầu kéo mới vừa được sản xuất tại nhà máy THACO Tải thuộc THACO Chu Lai. 
                        05 xe mới này được thiết kế và thực hiện theo nhận diện thương hiệu mới với tông đỏ là màu sắc chủ đạo của THILOGI thể hiện sự linh hoạt, mạnh mẽ và nhanh chóng. 
                    </p>
                    <a href="#" class="link">
                        Xem thêm <span><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
            <div class="swiper-slide item-slider-top">
                <img src="{{Theme::asset()->url('images/lvhd/slider2.jpg') }}" alt="slide" class="img-slider h-100vh w-100">
                <div class="post-banner">
                    <h2 class="font24">
                        THILOGI thay đổi nhận diện thương hiệu trên các phương tiện vận chuyển
                    </h2>
                    <p class="desc font18">
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
                <div class="left-top d-flex justify-content-center" >
                    <img src="{{Theme::asset()->url('images/lvhd/icon1.png') }}">
                    <h3 class="text-uppercase font40">LĨNH VỰC THƯƠNG MẠI & DỊCH VỤ</h3>
                </div>
                <p class="content mt-25 font18">
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
                        <div class="desc font18">
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
        {{-- <div class="activity-content-detail-slide__main-content">
            <div class="content">
                <img src="{{Theme::asset()->url('images/lvhd/thiso1.png') }}" alt="slide" class="symbol">
                <img src="{{Theme::asset()->url('images/lvhd/thiso.png') }}" alt="slide" class="symbol-thiso mb-2">
                <h2 class="text-uppercase title mb-3 ">
                    bán lẻ tiêu dùng
                </h2>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatem, dolores ab nam eligendi tempore quos autem omnis voluptates! Dolor odio veritatis minus vero doloremque!
                </p>
               
            </div>
            
        </div> --}}
        <div class="activity-content-detail-slide__detail-content">
            <div class="swiper-container swiper-content-detail">
                <div class="main-content">
                    <div class="content">
                        <img src="{{Theme::asset()->url('images/lvhd/thiso1.png') }}" alt="slide" class="symbol">
                        <img src="{{Theme::asset()->url('images/lvhd/thiso.png') }}" alt="slide" class="symbol-thiso mb-2">
                        <h2 class="text-uppercase title mb-3 ">
                            bán lẻ tiêu dùng
                        </h2>
                        <p class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatem, dolores ab nam eligendi tempore quos autem omnis voluptates! Dolor odio veritatis minus vero doloremque!
                        </p>
                       
                    </div>
                    
                </div>
                <div class="swiper-wrapper">
                   
                    <div class="swiper-slide">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv1.jpg') }}" alt="slide" class="bg-img">
                        <h2 class="title text-uppercase text-light font40">đại siêu thị</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font30">đại siêu thị</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm >></a>
                        </div>
                        
                    </div>
                    <div class="swiper-slide">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv2.jpg') }}" alt="slide" class="bg-img">
                        <h2 class="title text-uppercase text-light font40">siêu thị</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font30">siêu thị</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm >></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv1.jpg') }}" alt="slide" class="bg-img">
                        <h2 class="title text-uppercase text-light font40">cửa hàng tiện lợi</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font30">cửa hàng tiện lợi</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm >></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv2.jpg') }}" alt="slide" class="bg-img">
                        <h2 class="title text-uppercase text-light font40">đại siêu thị</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font30">đại siêu thị</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm >></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
               
            </div>
           
           
        </div>
        
    </div>



    <div class="activity-detail-wrapper">
        <div class="activity-detail mb-40 mt-40">
            <div class="activity-detail__left">
                <div class="row item">
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv4.jpg') }}" alt="slide" class="">
                        <h2 class="title text-uppercase text-light font40">rạp chiếu phim</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font30">rạp chiếu phim</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm >></a>
                        </div>
                    </div>
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv5.jpg') }}" alt="slide" class="">
                        <h2 class="title text-uppercase text-light font40">kid theme park</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font30">kid theme park</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm >></a>
                        </div>
                    </div>
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv6.jpg') }}" alt="slide" class="">
                        <h2 class="title text-uppercase text-light font40">kid cafe</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font30">kid cafe</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="activity-detail__right">
                <div class="content">
                    <img src="{{Theme::asset()->url('images/lvhd/thiso2.png') }}" alt="slide" class="symbol">
                    <img src="{{Theme::asset()->url('images/lvhd/thiso.png') }}" alt="slide" class="symbol-thiso mb-2">
                    <h2 class="text-uppercase title mb-3 ">
                        vui chơi giải trí
                    </h2>
                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatem, dolores ab nam eligendi tempore quos autem omnis voluptates! Dolor odio veritatis minus vero doloremque!
                    </p>
                </div>
            </div>
        </div>

        <div class="activity-detail mb-40 mt-40">
            <div class="activity-detail__left">
                <div class="row item">
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv7.jpg') }}" alt="slide" class="">
                        <h2 class="title text-uppercase text-light font40">ăn uống</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font30">ăn uống</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm >></a>
                        </div>
                    </div>
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv8.jpg') }}" alt="slide" class="">
                        <h2 class="title text-uppercase text-light font40">nhà hàng</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font30">nhà hàng</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm >></a>
                        </div>
                    </div>
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv9.jpg') }}" alt="slide" class="">
                        <h2 class="title text-uppercase text-light font40">cafe</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font30">cafe</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="activity-detail__right">
                <div class="content">
                    <img src="{{Theme::asset()->url('images/lvhd/thiso3.png') }}" alt="slide" class="symbol">
                    <img src="{{Theme::asset()->url('images/lvhd/thiso.png') }}" alt="slide" class="symbol-thiso mb-2">
                    <h2 class="text-uppercase title mb-3 ">
                        ẩm thực
                    </h2>
                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatem, dolores ab nam eligendi tempore quos autem omnis voluptates! Dolor odio veritatis minus vero doloremque!
                    </p>
                </div>
            </div>
        </div>

        <div class="activity-detail mb-40 mt-40">
            <div class="activity-detail__left">
                <div class="row item">
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv10.jpg') }}" alt="slide" class="">
                        <h2 class="title text-uppercase text-light font40">trung tâm hội nghị - tiệc cưới cao cấp</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font30">trung tâm hội nghị - tiệc cưới cao cấp</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm >></a>
                        </div>
                    </div>
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv11.jpg') }}" alt="slide" class="">
                        <h2 class="title text-uppercase text-light font40">trung tâm hội nghị - tiệc cưới trung cấp</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font30">trung tâm hội nghị - tiệc cưới trung cấp</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm >></a>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="activity-detail__right">
                <div class="content">
                    <img src="{{Theme::asset()->url('images/lvhd/thiso4.png') }}" alt="slide" class="symbol">
                    <img src="{{Theme::asset()->url('images/lvhd/thiso.png') }}" alt="slide" class="symbol-thiso mb-2">
                    <h2 class="text-uppercase title mb-3 ">
                        trung tâm hội nghị - tiệc cưới
                    </h2>
                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatem, dolores ab nam eligendi tempore quos autem omnis voluptates! Dolor odio veritatis minus vero doloremque!
                    </p>
                </div>
            </div>
        </div>



        <div class="activity-detail mb-40 mt-40">
            <div class="activity-detail__left">
                <div class="row item">
                    <div class="col content">
                        <div class="bg"></div>
                        <img src="{{Theme::asset()->url('images/lvhd/lv12.jpg') }}" alt="slide" class="">
                        <h2 class="title text-uppercase text-light font40">thời trang - mỹ phẩm cao cấp</h2>
                        <div class="detail">
                            <h2 class="titlee text-uppercase text-light font30">thời trang - mỹ phẩm cao cấp</h2>
                            <p class="text text-light font18">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, neque deserunt earum similique cum eveniet ducimus velit doloremque voluptatibus et. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus tenetur facilis vel voluptates, possimus nemo dolores architecto numquam non.</p>
                            <a href="#" class="readmore text-uppercase text-light">Xem Thêm >></a>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="activity-detail__right">
                <div class="content">
                    <img src="{{Theme::asset()->url('images/lvhd/thiso5.png') }}" alt="slide" class="symbol">
                    <img src="{{Theme::asset()->url('images/lvhd/thiso.png') }}" alt="slide" class="symbol-thiso mb-2">
                    <h2 class="text-uppercase title mb-3 ">
                        department store
                    </h2>
                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatem, dolores ab nam eligendi tempore quos autem omnis voluptates! Dolor odio veritatis minus vero doloremque!
                    </p>
                </div>
            </div>
        </div>



    </div>








    <div class="activity-news mt-60 mb-60">
        <div class="activity-news__top container-customize mt-40 mb-40">
            <div class="title ">
                <img src="{{Theme::asset()->url('images/lvhd/icon1.png') }}">
                <h2 class="text-uppercase font40">Tin tức</h2>
            </div>
    
            <div class="readmore">
                <a href="#" class="text-dark">Xem thêm <Span>>></Span> </a>
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
                            <div class="title text-uppercase">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet consectetur adipisicing elit
                            </div>
                            <div class="desc text-justify mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus rem quia reprehenderit iure praesentium? Sit quia magnam beatae! Dolorum, suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio natus accusamus, accusantium voluptatibus cumque rerum deleniti assumenda quo est sapiente.
                            </div>
                            <div class="date">
                                10/12/2021
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
                            <div class="desc text-justify mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus rem quia reprehenderit iure praesentium? Sit quia magnam beatae! Dolorum, suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio natus accusamus, accusantium voluptatibus cumque rerum deleniti assumenda quo est sapiente.
                            </div>
                            <div class="date">
                                10/12/2021
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
                            <div class="desc text-justify mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus rem quia reprehenderit iure praesentium? Sit quia magnam beatae! Dolorum, suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio natus accusamus, accusantium voluptatibus cumque rerum deleniti assumenda quo est sapiente.
                            </div>
                            <div class="date">
                                10/12/2021
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
                            <div class="desc text-justify mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus rem quia reprehenderit iure praesentium? Sit quia magnam beatae! Dolorum, suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio natus accusamus, accusantium voluptatibus cumque rerum deleniti assumenda quo est sapiente.
                            </div>
                            <div class="date">
                                10/12/2021
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
                            <div class="desc text-justify mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus rem quia reprehenderit iure praesentium? Sit quia magnam beatae! Dolorum, suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio natus accusamus, accusantium voluptatibus cumque rerum deleniti assumenda quo est sapiente.
                            </div>
                            <div class="date">
                                10/12/2021
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
                            <div class="desc text-justify mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus rem quia reprehenderit iure praesentium? Sit quia magnam beatae! Dolorum, suscipit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio natus accusamus, accusantium voluptatibus cumque rerum deleniti assumenda quo est sapiente.
                            </div>
                            <div class="date">
                                10/12/2021
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
            <img src="{{Theme::asset()->url('images/lvhd/opt2.png') }}">
        </div>
    </div>




</div>


