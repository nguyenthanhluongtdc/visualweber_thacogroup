
 {{-- @dd($post); --}}
 <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
    <div class="swiper-wrapper">
        @if(has_field($page, 'main_slide_home'))
        @foreach (get_field($page, 'main_slide_home') as $item)
        <div class="swiper-slide" >
            <img src="{{ has_sub_field($item , 'image') ? get_object_image(get_sub_field($item , 'image')) :''}}" alt="" class="img-slider h-100vh w-100">
            @if(has_field($page, 'show_hide'))
            <div class="bg-post">
               @php $post = get_featured_posts(1,[]) @endphp
           
                <div class="content" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="50" class="aos-init aos-animate">
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
    <h3 class="title__company font40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">TẬP ĐOÀN VÀ TỔNG CÔNG TY</h3>
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
            <div class="logo-desktop"   >
                <div class="logo-item"  data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                    <img class=""  src="{{Theme::asset()->url('images/home/logo/logo-1.png')}}" alt="">
                </div>
                <div class="logo-item"  data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                    <img class=""  src="{{Theme::asset()->url('images/home/logo/logo-2.png')}}" alt="">
                </div>
                <div class="logo-item"  data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                    <img class=""  src="{{Theme::asset()->url('images/home/logo/logo-3.png')}}" alt="">
                </div>
                <div class="logo-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                    <img class="" src="{{Theme::asset()->url('images/home/logo/logo-4.png')}}" alt="">
                </div>
                <div class="logo-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                    <img class="" src="{{Theme::asset()->url('images/home/logo/logo-5.png')}}" alt="">
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="news-home-wrapper">
    <div class="container-customize">
        <div class="news-home__content">
            <div class="swiper-container new-post-slide" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="news-home__top">
                          
                                
                                    <div class="img-post">
                                        <img class="img-mw-100" src="{{ Theme::asset()->url('images/home/post.jpg') }}" alt="">
                                    </div>
                                   
                                
                               
                                    <div class="news-post h-100">
                                        <h3 class="font20 title">BẢN TIN NỘI BỘ</h3>
                                        <a href="/chi-tiet-truyen-thong">
                                            <h4 class="name font20">THACO AUTO ỦNG HỘ 1,5 TỶ ĐỒNG CHO 3 ĐỊA PHƯƠNG CHỐNG DỊCH</h4>
                                        </a>
                                       
                                        <span class="time">23/06/2021</span>
                                        <p class="description font18 text-justify">Với tinh thần sẻ chia, tương thân tương ái, chung tay cùng cả nước đẩy lùi dịch Covid-19, THACO AUTO đã quyết định ủng hộ các tỉnh Bắc Giang, Bắc Ninh, Vĩnh Phúc, mỗi tỉnh 500 triệu đồng để hỗ trợ công tác phòng chống dịch.Nhằm chung tay hỗ trợ công tác phòng chống dịch Covid-19, ngày 09/6/2021, Hiện nay, tình hình dịch bệnh Covid-19 đang diễn biến hết sức phức tạp, khó lường tại nhiều địa phương trên cả nước. Chỉ trong một tháng qua (từ ngày 27/4/2021 đến ngày 27/5/2021) Việt Nam đã ghi nhận 3104 ca nhiễm </p>
                                        <a href="" class="read-more">Xem thêm</a>
                                    </div>
                                
                           
                        </div>
                    </div>
                    <div class="swiper-slide">
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

                    </div>
                </div>
                
                <div class="swiper-pagination"></div>
            </div>    
           
           
            <div class="post-slider">
                <div class="swiper-container post-slide-bottom">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex justify-content-center">             
                            
                                <div class="post_content_bottom h-100">
                                    <a class="post-wrapper" href="">
                                        <div class="post-thumbnail">
                                            <img src="{{ Theme::asset()->url('images/home/post-1.jpg') }}" alt="">
                                        </div>
                                       
                                        <h4 class="post_name font20">THILOGI THAY ĐỔI NHẬN DIỆN THƯƠNG HIỆU TRÊN CÁC PHƯƠNG TIỆN VẬN CHUYỂN</h4>
                                        <p class="post_description font18">Là đơn vị cung ứng chuỗi dịch vụ logistics trọn gói hàng đầu miền Trung, công ty Giao nhận – Vận chuyển Quốc tế Trường Hải (THILOGI) đang đẩy mạnh phát triển dịch vụ logistics nông nghiệp, đặc biệt là vận chuyển nông sản xuất khẩu với các mặt hàng chủ lực gồm: xoài, chuối, thanh long…
                                        </p>
                                        <span class="time">23/06/2021</span>
                                    </a>   
                                </div>
                            
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">             
                            <div class="post_content_bottom h-100">
                               
                                    <a class="post-wrapper" href="">
                                        <div class="post-thumbnail">
                                            <img src="{{ Theme::asset()->url('images/home/post-2.jpg') }}" alt="">
                                        </div>
                                        <h4 class="post_name font20">ĐÀN BÒ TẠI TRANG TRẠI IA PUCH VÀ QUY TRÌNH CHĂM SÓC ĐẶC BIỆT</h4>
                                        <p class="post_description font18">Trang trại bò Ia Puch có quy mô 1.907 ha thuộc xã Ia Puch, tỉnh Gia Lai. Với diện tích lớn và điều kiện tự nhiên thuận lợi, trang trại đã phát triển các hoạt động chăn nuôi bò với các phương pháp đặc biệt.
                                        </p>
                                        <span class="time">23/06/2021</span>
                                    </a>   
                                
                            </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">             
                                <div class="post_content_bottom h-100">
                                    <a class="post-wrapper" href="">
                                        <div class="post-thumbnail">
                                            <img src="{{ Theme::asset()->url('images/home/post-3.jpg') }}" alt="">
                                        </div>
                                        <h4 class="post_name font20">THILOGI HỖ TRỢ XUẤT KHẨU ỚT CHO NÔNG DÂN MIỀN TRUNG</h4>
                                        <p class="post_description font18">Tháng 6/2021, THILOGI đã đưa vào hoạt động xe đầu kéo mới vừa được sản xuất tại nhà máy THACO Tải thuộc THACO Chu Lai. 05 xe mới này được thiết kế và thực hiện theo nhận diện thương hiệu mới với tông đỏ là màu sắc chủ đạo của THILOGI thể hiện sự linh hoạt, mạnh mẽ và nhanh chóng. 

                                        </p>
                                        <span class="time">23/06/2021</span>
                                    </a>   
                                </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">             
                                <div class="post_content_bottom h-100">
                                    <a class="post-wrapper" href="">
                                        <div class="post-thumbnail">
                                            <img src="{{ Theme::asset()->url('images/home/3-post.jpg') }}" alt="">
                                        </div>
                                        <h4 class="post_name font20">Phó Chủ tịch TP.HCM thăm dự án Cầu Thủ Thiêm 2 thi công mùa dịch</h4>
                                        <p class="post_description font18">Sáng ngày 14/7/2021, ông Lê Hòa Bình - Phó chủ tịch UBND TP. HCM đã cùng Lãnh đạo Sở GTVT TP. HCM đến thăm và làm việc tại công trường dự án cầu Thủ Thiêm 2.


                                        </p>
                                        <span class="time">23/06/2021</span>
                                    </a>   
                                </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">             
                                <div class="post_content_bottom h-100">
                                    <a class="post-wrapper" href="">
                                        <div class="post-thumbnail">
                                            <img src="{{ Theme::asset()->url('images/home/2-post.jpg') }}" alt="">
                                        </div>
                                        <h4 class="post_name font20">THACO bàn giao xe vận chuyển vaccine phục vụ chiến dịch tiêm chủng quốc gia phòng Covid-19</h4>
                                        <p class="post_description font18">Tại lễ phát động triển khai chiến dịch tiêm chủng vaccine phòng Covid-19 toàn quốc, THACO đã trao tặng 126 xe tiêm chủng gồm 63 xe tải chuyên dụng vận chuyển vaccine và 63 xe chuyên dụng phục vụ tiêm chủng lưu động cho Bộ Y tế. Ngày 14/7, Bộ Y tế đã ban hành Quyết định phân bổ tạm thời 63 xe chuyên dụng vận chuyển vaccine cho 7 Quân khu của Bộ Quốc phòng để sử dụng cho chiến dịch tiêm chủng kéo dài từ 07/2021 – 04/2022. 
                                        </p>
                                        <span class="time">23/06/2021</span>
                                    </a>   
                                </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">             
                                <div class="post_content_bottom h-100">
                                    <a class="post-wrapper" href="">
                                        <div class="post-thumbnail">
                                            <img src="{{ Theme::asset()->url('images/home/4-post.jpg') }}" alt="">
                                        </div>
                                        <h4 class="post_name font20">Nhà máy THACO tải - “nỗ lực nhiều ngày đêm hoàn thành dự án để giúp ích cho cộng đồng”</h4>
                                        <p class="post_description font18">Vừa qua, 126 xe chuyên dụng bao gồm 63 xe chuyên dụng vận chuyển vaccine và 63 xe tiêm chủng lưu động đã được THACO trao tặng cho Bộ Y tế. Việc sản xuất và bàn giao 2 lô xe này đã đáp ứng kịp thời nhu cầu cấp thiết về tiêm chủng vaccine trong tình hình dịch bệnh hết sức phức tạp hiện nay, nhất là tại TP. Hồ Chí Minh. Trong cơn bão đại dịch, dự án đã lan tỏa những hiệu ứng tích cực, có ý nghĩa nhân văn đến với cộng đồng.
                                        </p>
                                        <span class="time">23/06/2021</span>
                                    </a>   
                                </div>
                        </div>
                    </div>
                    <div class="swiper-button-next drop-shadow-button"> <img src="{{ Theme::asset()->url('images/home/Icon-right.png') }}" alt="">  </div>
                    <div class="swiper-button-prev drop-shadow-button"> <img src="{{ Theme::asset()->url('images/home/icon-left.png') }}" alt=""> </div>
                    
        
                </div>
               
            </div>
            
        </div>
    </div>
   
</div>
<div class="transport-wrapper" >
    <div class="transport-banner">
      
        <div class="swiper-container field-activity-slide-top" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">                  
                    
                    <div class="video-wrapper">
                        <video muted   class="__video w-100">
                            <source src="{{ Theme::asset()->url('images/video/chuc-mung-nam-moi.mp4') }}" type="video/mp4">
                        </video> 
                        <video muted   class="__video video-full bg-gray w-100">
                            <source src="{{ Theme::asset()->url('images/video/chuc-mung-nam-moi.mp4') }}" type="video/mp4">
                        </video> 
                       
                    </div>
                    
                </div>
                <div class="swiper-slide">
                                      
                    <img src="{{Theme::asset()->url('images/home/transport/icon2-img1.jpg') }}" alt="">
                    {{-- <a href="" class="read-more">Xem thêm</a> --}}
                </div>
                <div class="swiper-slide">                  
                   
                    <img src="{{Theme::asset()->url('images/home/transport/icon2-img2.jpg') }}" alt="">
                    {{-- <a href="" class="read-more">Xem thêm</a> --}}
                </div>
                <div class="swiper-slide">                  
                   
                    <img src="{{Theme::asset()->url('images/home/transport/icon3-img1.jpg') }}" alt="">
                    {{-- <a href="" class="read-more">Xem thêm</a> --}}
                </div>
                <div class="swiper-slide">                  
                    
                    <img src="{{Theme::asset()->url('images/home/transport/icon4-img1.jpg') }}" alt="">
                    {{-- <a href="" class="read-more">Xem thêm</a> --}}
                </div>
                <div class="swiper-slide">                  
                   
                    <img src="{{Theme::asset()->url('images/home/transport/icon5-img1.jpg') }}" alt="">
                    {{-- <a href="" class="read-more">Xem thêm</a> --}}
                </div>
              
            </div>
            <div class="swiper-pagination"></div>
            <a href="" class="read-more">Xem thêm</a>
        </div>
       
       
    </div>
</div>

<div class="recruitment-wrapper">
    <div class="recruitment-banner " style="background-image:url({{Theme::asset()->url('images/home/tuyen-dung-1.jpg') }})">
        <div class="swiper-content">
            <div class="swiper-content__desc">
                <h3 class="title font28">Tuyển dụng</h3>
                <p class="description font24 text-justify">
                    THACO mong muốn tạo nên môi trường làm việc kỷ luật, văn hóa, đề cao tính nhân văn.Tại đây mỗi nhân viên được quan tâm tạo điều kiện để rèn luyện, phát triển bản thân và thăng tiến trong sự nghiệp
                </p>
                <a href="https://tuyendung.thaco.com.vn/tieng-viet/jobs/611?code=)" class="btn-apply font24">Ứng tuyển ngay</a>
            </div>
            <div class="bottom_slider_wrapper">
                <div class="title_label">
                    <h3 class="title font28 font-myria-bold">Vị trí</h3>
                </div>
               
                <div class="swiper-container recruitment-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                        <div class="swiper-wrapper">   
                            <div class="swiper-slide" >
                                <div class="swiper-content-bottom">
                                    <a href="https://tuyendung.thaco.com.vn/tieng-viet/jobs/611?code=)" target="_self">
                                        <p class="postion-apply font28"> Chuyên Viên Nội Dung Marketing (tại VP SOFIC)
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" >
                                <div class="swiper-content-bottom">
                                    <a href="https://tuyendung.thaco.com.vn/tieng-viet/jobs/588?code=" target="_self">
                                        <p class="postion-apply font28"> Trưởng phòng quản trị hành chính
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" >
                                <div class="swiper-content-bottom">
                                    <a href="https://tuyendung.thaco.com.vn/tieng-viet/jobs/583?code=" target="_self">
                                        <p class="postion-apply font28">Chuyên viên pháp lý tố tụng
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" >
                                <div class="swiper-content-bottom">
                                    <a href="https://tuyendung.thaco.com.vn/tieng-viet/jobs/611?code=)" target="_self">
                                        <p class="postion-apply font28"> Chuyên Viên Nội Dung Marketing (tại VP SOFIC)
                                        </p>
                                    </a>
                                </div>
                            </div>
                           
                        </div>
                        <div class="swiper-pagination"></div>
                </div>
            </div>
           
        </div> 
    </div>
</div>

 