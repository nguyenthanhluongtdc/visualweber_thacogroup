<section class="slide-post">
    
    <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
       <div class="swiper-wrapper">   
           <div class="swiper-slide" >
               <img src="{{ Theme::asset()->url('images/home/slider.jpg') }}" alt="" class="img-slider  h-45vw w-100">
           </div>
           <div class="swiper-slide" >
               <img src="{{ Theme::asset()->url('images/media/banner-1.jpg') }}" alt="" class="img-slider  h-45vw  w-100 ">
           </div>
           
           <div class="swiper-slide" >
               <img src="{{ Theme::asset()->url('images/home/banner-3.jpg') }}" alt="" class="img-slider  h-45vw  w-100 ">
           </div>
           
          
       </div>
       <div class="swiper-pagination"></div>
     
   </div>
   </section>
 <section>
    <div class="container-customize">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/">Truyền thông</a>
                        </li>
                
                        <li class="breadcrumb-item active">Thông điệp</li>
            </ol>
        </nav>
    </div>
 </section>
<section class="media-message mb-60">
    <div class="media-message-wrapper">
        <div class="container-customize">
             <div class="media-message-content mt-40 mb-100">
                        <div class="media__content_left">
                            <div class="news__top">
                                <div class="img-post">
                                    <img class="img-mw-100" src="{{ Theme::asset()->url('images/home/post.jpg') }}" alt="">
                                </div>
                                <div class="news-post h-100">
                                    <h3 class=" title font18">BẢN TIN NỘI BỘ</h3>
                                    <a href="/chi-tiet-truyen-thong">  <h4 class="name font18 ">THACO AUTO ỦNG HỘ 1,5 TỶ ĐỒNG CHO 3 ĐỊA PHƯƠNG CHỐNG DỊCH</h4></a>
                                    <span class="time">23/06/2021</span>
                                    <p class="description font18  text-justify">Với tinh thần sẻ chia, tương thân tương ái, chung tay cùng cả nước đẩy lùi dịch Covid-19, THACO AUTO đã quyết định ủng hộ các tỉnh Bắc Giang, Bắc Ninh, Vĩnh Phúc, mỗi tỉnh 500 triệu đồng để hỗ trợ công tác phòng chống dịch.Nhằm chung tay hỗ trợ công tác phòng chống dịch Covid-19, ngày 09/6/2021, Hiện nay, tình hình dịch bệnh Covid-19 đang diễn biến hết sức phức tạp, khó lường tại nhiều địa phương trên cả nước. Chỉ trong một tháng qua (từ ngày 27/4/2021 đến ngày 27/5/2021) Việt Nam đã ghi nhận 3104 ca nhiễm </p>
                                    <a href="/chi-tiet-truyen-thong" class="read-more">Xem thêm</a>
                                </div>
                            </div>
                            {{-- <div class="filter-search-media mt-40">
                                <form action="" class="form-search">
                                    <div class="search">
                                        <input type="text" class=" form-control form-control-sm " placeholder="Nhập nội dung cần tìm" value="" name="q">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <select class="select-year font18" id="">
                                        <option value="">2019</option>
                                        <option value="">2018</option>
                                        <option value="">2017</option>
                                        <option value="">2016</option>
                                    </select>
                                    <select class="select-by-field font18" id="">
                                        <option value="">Ô tô - Cơ Khí</option>
                                        <option value="">Nông nghiệp</option>
                                        <option value="">Thương mại - dịch vụ</option>
                                        <option value="">Đầu tư xây dựng</option>
                                        <option value="">Logistics</option>
                                    </select>
                                </form>
                             </div> --}}
                             <div class="list-media_wrapper" id="scroll-list-news">
                                <div class="list-media mt-60">
                                    <div class="media-item ">
                                        <div class="img-content">
                                            <div class="image" data-aos="fade-right" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                                <div class="post-thumbnail">
                                                    <a href="/chi-tiet-truyen-thong"><img src="{{ Theme::asset()->url('images/media/thongdiep/thong-diep-1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="content"  data-aos="fade-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                                <a href="/chi-tiet-truyen-thong"><h3 class="name font18">Thông điệp năm 2020 của Chủ tịch HĐQT Trần Bá Dương</h3></a>
                                              
                                                <p class="time">23/06/2021</p>
                                                <p class="desc font18">Thông điệp từ Chủ tịch Hội đồng quản trị Trần Bá Dương gửi đến cho toàn thể cán bộ và nhân viên THACO vào năm 2020 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-item ">
                                        <div class="img-content">
                                            <div class="image" data-aos="fade-right" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                                <div class="post-thumbnail">
                                                    <a href="/chi-tiet-truyen-thong"><img src="{{ Theme::asset()->url('images/media/thongdiep/thong-diep-2.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="content"  data-aos="fade-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                                <a href="/chi-tiet-truyen-thong">   <h3 class="name font18">Thông điệp năm 2019 của Chủ tịch HĐQT Trần Bá Dương</h3></a>
                                             
                                                <p class="time">23/06/2021</p>
                                                <p class="desc font18">Thông điệp từ Chủ tịch Hội đồng quản trị Trần Bá Dương gửi đến cho toàn thể cán bộ và nhân viên THACO vào năm 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-item ">
                                        <div class="img-content">
                                            <div class="image" data-aos="fade-right" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                                <div class="post-thumbnail">
                                                    <a href="/chi-tiet-truyen-thong"><img src="{{ Theme::asset()->url('images/media/thongdiep/thong-diep-3.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="content"  data-aos="fade-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                                
                                                <a href="/chi-tiet-truyen-thong"><h3 class="name font18">Thông điệp năm 2018 của Chủ tịch HĐQT Trần Bá Dương</h3></a>
                                                <p class="time">23/06/2021</p>
                                                <p class="desc font18">Thông điệp từ Chủ tịch Hội đồng quản trị Trần Bá Dương gửi đến cho toàn thể cán bộ và nhân viên THACO vào năm 2018</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-item ">
                                        <div class="img-content">
                                            <div class="image" data-aos="fade-right" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                                <div class="post-thumbnail">
                                                    <a href="/chi-tiet-truyen-thong"><img src="{{ Theme::asset()->url('images/media/thongdiep/thong-diep-4.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="content" data-aos="fade-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                                <a href="/chi-tiet-truyen-thong"><h3 class="name font18">Thông điệp năm 2017 của Chủ tịch HĐQT Trần Bá Dương</h3></a>
                                                
                                                <p class="time">23/06/2021</p>
                                                <p class="desc font18">Thông điệp từ Chủ tịch Hội đồng quản trị Trần Bá Dương gửi đến cho toàn thể cán bộ và nhân viên THACO vào năm 2017 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-item ">
                                     <div class="img-content">
                                         <div class="image" data-aos="fade-right" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                             <div class="post-thumbnail">
                                                 <a href="/chi-tiet-truyen-thong"><img src="{{ Theme::asset()->url('images/media/thongdiep/thong-diep-5.jpg') }}" alt=""></a>
                                             </div>
                                         </div>
                                         <div class="content" data-aos="fade-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                             <a href="/chi-tiet-truyen-thong"><h3 class="name font18">Thông điệp năm 2016 của Chủ tịch HĐQT Trần Bá Dương</h3></a>
                                             
                                             <p class="time">23/06/2021</p>
                                             <p class="desc font18">Thông điệp từ Chủ tịch Hội đồng quản trị Trần Bá Dương gửi đến cho toàn thể cán bộ và nhân viên THACO vào năm 2016</p>
                                         </div>
                                     </div>
                                 </div>
                                 {{-- <div class="media-item ">
                                     <div class="img-content">
                                         <div class="image" data-aos="fade-right" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                             <div class="post-thumbnail">
                                                 <a href="/chi-tiet-truyen-thong"><img src="{{ Theme::asset()->url('images/media/connguoi/6.png') }}" alt=""></a>
                                             </div>
                                         </div>
                                         <div class="content" data-aos="fade-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                             <a href="/chi-tiet-truyen-thong"><h3 class="name font18">THACO ủng hộ chương trình “Tiếp sức đến trường” tỉnh Thái Bình</h3></a>
                                             
                                             <p class="time">23/06/2021</p>
                                             <p class="desc font18">Ngày 04/09/2020, Đài Phát thanh & Truyền hình Thái Bình phối hợp với Sở Lao động – Thương binh và Xã hội, Sở Giáo dục và Đào tạo, Hội Chữ thập đỏ tỉnh tổ chức đêm Gala “Tiếp sức đến trường”. THACO là nhà tài trợ đồng hành cùng chương trình.</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="media-item ">
                                     <div class="img-content">
                                         <div class="image" data-aos="fade-right" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                             <div class="post-thumbnail">
                                                 <a href="/chi-tiet-truyen-thong"><img src="{{ Theme::asset()->url('images/media/connguoi/7.jpg') }}" alt=""></a>
                                             </div>
                                         </div>
                                         <div class="content" data-aos="fade-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                             <a href="/chi-tiet-truyen-thong"><h3 class="name font18">Chi nhánh xe Tải & Bus Cần Thơ - 8 năm liên tục đồng hành cùng chương trình hiến máu tình nguyện</h3></a>
                                             
                                             <p class="time">23/06/2021</p>
                                             <p class="desc font18">“Cảm giác rất thoải mái và chỉ nghĩ đơn giản là mình góp một phần nhỏ công sức để hỗ trợ cộng đồng và những người cần thiết” – đó là lời chia sẻ của anh Nguyễn Hoàng Bửu - bộ phận Kế hoạch – Marketing, Chi nhánh xe Tải & Bus Cần Thơ khi được hỏi về cảm xúc lần hiến máu đầu tiên vào năm 2009..</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="media-item ">
                                     <div class="img-content">
                                         <div class="image" data-aos="fade-right" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                             <div class="post-thumbnail">
                                                 <a href="/chi-tiet-truyen-thong"><img src="{{ Theme::asset()->url('images/media/connguoi/8.jpg') }}" alt=""></a>
                                             </div>
                                         </div>
                                         <div class="content" data-aos="fade-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                             <a href="/chi-tiet-truyen-thong"><h3 class="name font18">Công đoàn THACO hỗ trợ Đoàn viên có hoàn cảnh khó khăn</h3></a>
                                             
                                             <p class="time">23/06/2021</p>
                                             <p class="desc font18">Với mục tiêu quan tâm, chăm lo đời sống CBNV và đoàn viên công đoàn, Ban Lãnh đạo và Công đoàn cơ sở THACO đã luôn cập nhật và theo sát hoàn cảnh của CBNV tại đơn vị nhằm động viên và hỗ trợ kịp thời.</p>
                                         </div>
                                     </div>
                                 </div> --}}
                                </div>
                                    <div class="page-pagination mt-40 mb-40">
                                        <ul class="pagination font18">
                                            <li class="page-item active">
                                                <a href="" class="page-link">
                                                    1
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a href="" class="page-link">
                                                    2
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a href="" class="page-link">
                                                    3
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a href="" class="page-link">
                                                    4
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a href="" class="page-link">
                                                    5
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a href="" class="page-link">
                                                    6
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a href="" class="page-link">
                                                    7
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a href="" class="page-link">
                                                    >
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a href="" class="page-link">
                                                    >>
                                                </a>
                                            </li>
                                        
                                        </ul>
                                    </div>
                            </div>
                        </div>
                        <div class="post-sidebar-content">
                            <div class="media__content_right">
                                <div class="list-media-menu" data-aos="fade-up" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                    <h3 class="font28 font-myria-bold">THÔNG TIN KHÁC</h3>
                                    <a href="/thong-cao-bao-chi" class="item_link list-group-item font18 font-myria-bold">Thông cáo báo chí</a>
                                    <a href="/con-nguoi#scroll-list-news" class="item_link list-group-item  font18 font-myria-bold">Con người</a>
                                    <a href="/ban-tin" class="item_link list-group-item  font18 font-myria-bold">Bản tin</a>
                                    <a href="/su-kien#scroll-list-news" class="item_link list-group-item  font18 font-myria-bold">Sự kiện</a>
                                    <a href="/thong-diep#scroll-list-news" class="item_link list-group-item  font18 font-myria-bold active">Thông điệp</a>
                                    <a href="/thu-vien-anh-va-video" class="item_link list-group-item  font18 font-myria-bold">Media</a>
                                </div>
                                <div class="list-post-new">
                                    <div class="wrap">
                                        <h2 class="font-mi-bold font30" data-aos="fade-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">tin tức mới</h2>
                                        <ul class="" data-aos="flip-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                            <div class="post-new-item">
                                                <div class="post-thumbnail-wrap">
                                                    <div class="post-thumbnail">
                                                        <a href="/chi-tiet-truyen-thong"><img src="{{ Theme::asset()->url('images/media/post-5.jpg') }}" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="title font18">
                                                    <a href="/chi-tiet-truyen-thong">THACO tài trợ trang thiết bị, vật tư y tế phòng dịch...</a>
                                                    <p class="time">23/06/2021</p>
                                                </div>
                                            </div>
                                            <div class="post-new-item">
                                                <div class="post-thumbnail-wrap">
                                                    <div class="post-thumbnail">
                                                        <a href="/chi-tiet-truyen-thong"><img src="{{ Theme::asset()->url('images/media/post-4.jpg') }}" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="title font18">
                                                    <a href="/chi-tiet-truyen-thong">THACO AUTO ủng hộ 1,5 tỷ đồng cho 3 địa phương chống dịch...</a>
                                                    <p class="time">23/06/2021</p>
                                                </div>
                                            </div>
                                            <div class="post-new-item">
                                                <div class="post-thumbnail-wrap">
                                                    <div class="post-thumbnail">
                                                        <a href="/chi-tiet-truyen-thong"><img src="{{ Theme::asset()->url('images/media/post-3.jpg') }}" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="title font18">
                                                    <a href="/chi-tiet-truyen-thong">Chú bảo vệ đi làm 120km mỗi ngày...</a>
                                                    <p class="time">23/06/2021</p>
                                                </div>
                                            </div>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
             </div>
        </div>
    </div>
</section>
{{-- <section class="media-tab mt-40">
    <div class="container-customize">
        <div class="row">
            <div class="col-md-9">
                <div class="media-tab-wrapper">
                    <div class="media__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                        <img src="{{ Theme::asset()->url('images/introduce/arrow.png') }}" alt="">
                        <h1  class="font50 big-title">Media</h1>
                    </div>
                    <div class="media-tab__title">
                        <div class="media__tabs" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                            <ul class=" nav nav-tabs mb-0" id="tab-media" role="tablist">
                                <li class="__tabs__item " role="media">
                                    <a class="__tabs__link nav-link active" id="media-image-tab" data-toggle="tab" role="tab" aria-controls="media-image" aria-selected="true" href="#media-image" title="Tất Cả">
                                       HÌNH ẢNH 
                                    </a>
                                </li>
                                <li class="__tabs__item" role="media">
                                    <a class="__tabs__link nav-link" id="media-video-tab" data-toggle="tab" role="tab" aria-controls="media-video" aria-selected="true" href="#media-video" title="Tất Cả">
                                      VIDEO  
                                    </a>
                                </li>
                                
                            </ul>
                        
                        </div>
                        <div class="view-all">
                            <a href="">Xem tất cả</a>
                        </div>
                    </div>
                    
                </div>
               
            </div>
        </div>
       
        
    </div>
    <div class="media-wrapper mt-40" >
        <div class="tab-content" id="nav-tabContent tab-content2">
            <div class="tab-pane fade active show" id="media-image" role="tabpanel" aria-labelledby="field-1-tab">
                <div class="media-banner">
                    
                        <div class="swiper-container media-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                                    
                                    <img src="{{Theme::asset()->url('images/home/transport/icon2-img1.jpg') }}" alt="">
                                    
                                </div>
                                <div class="swiper-slide">                  
                                
                                    <img src="{{Theme::asset()->url('images/home/transport/icon2-img2.jpg') }}" alt="">
                                    
                                </div>
                                <div class="swiper-slide">                  
                                
                                    <img src="{{Theme::asset()->url('images/home/transport/icon3-img1.jpg') }}" alt="">
                                    
                                </div>
                                <div class="swiper-slide">                  
                                    
                                    <img src="{{Theme::asset()->url('images/home/transport/icon4-img1.jpg') }}" alt="">
                                    
                                </div>
                                <div class="swiper-slide">                  
                                
                                    <img src="{{Theme::asset()->url('images/home/transport/icon5-img1.jpg') }}" alt="">
                                    
                                </div>
                            
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        
                        <a href="" class="read-more">Xem thêm</a>
                    
                </div>
            </div>
            <div class="tab-pane fade" id="media-video" role="tabpanel" aria-labelledby="field-1-tab">
                <div class="media-banner">
                        <div class="swiper-container media-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">             
                                    <div class="video-wrapper">
                                        <video muted   autoplay class="__video w-100">
                                            <source src="{{ Theme::asset()->url('images/video/chuc-mung-nam-moi.mp4') }}" type="video/mp4">
                                        </video> 
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        
                        <a href="" class="read-more">Xem thêm</a>
                    
                </div>
            </div>
            
        </div>
      
    </div>
</section> --}}