<section class="banner-introduce">
    <img class=" h-45vw img-mw-100"
        src="{{ get_field($page, 'about_us_banner') ? get_image_url(get_field($page, 'about_us_banner')) : Theme::asset()->url('images/introduce/banner-introduce.jpg') }}" alt="banner">
</section>
@includeIf("theme.main::views.breadcrumb")
<section class="about-us mt-15">
    <div class="container-customize">
        <div class="about-us__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
            <img src="{{ Theme::asset()->url('images/introduce/arrow.png') }}" alt="icon">
            <h1  class="font50 big-title">{{has_field($page, 'about_us_title')}}</h1>
        </div>
        <div class="about-us__content mt-40 text-justify" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
            {!!has_field($page, 'about_us_content')!!}
        </div>
        <div class="future-goal-banner mt-40" style="background-image:url('{{ get_field($page, 'vision_block_background') ? get_image_url(get_field($page, 'vision_block_background')) : Theme::asset()->url('images/introduce/tam-nhin-chien-luoc.jpg') }}')">
            <div class="future-goal-wrapper">
                <div class="row mr-0 ml-0">
                    @forelse (has_field($page, 'vision_block') as $key => $item)
                    <div class="col-sm-4 pl-0 pr-0">
                        <div class="future-goal p-lr-90" data-aos="fade-up" data-aos-duration="700" data-aos-delay="{{50 + $key*100}}" class="aos-init aos-animate">
                            <img src="{{ get_image_url(has_sub_field($item, 'logo')) }}" alt="{{has_sub_field($item, 'title')}}">
                            <h3 class="title font40">{{has_sub_field($item, 'title')}}</h3>
                            <div class="desc font18">
                                {!!has_sub_field($item, 'description')!!}
                            </div>
                        </div>
                    </div>
                        
                    @empty
                        ...{{__('Đang cập nhật')}}
                    @endforelse
        
                </div>
            </div>
          
        </div>
        <div class="field-activity-intro-wrapper">
            <div class="desc-field pt-40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                <p class="desc-cotent font24 text-justify">
                    {!!has_field($page, 'about_us_field_description')!!}
                 
                </p>
            </div>
            {!! do_shortcode('[field-activity][/field-activity]') !!}
        </div>
            
                <div class="leader-of-us-wrapper mt-40">
                    <div class="leader-of-us__title mt-40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                        <img src="{{ Theme::asset()->url('images/introduce/arrow.png') }}" alt="">
                        <h2 class="font50 big-title">Ban lãnh đạo</h2>
                    </div>
                    <div class="title-admin-top">
                        <h3 class="title-admin">HỘI ĐỒNG QUẢN TRỊ THACO</h3>
                    </div>
                    <div class="admin-top-content" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                        <div class="row-1">
                            <div class="admin-top-item " data-target="#info_admin_modal" data-toggle="modal">
                                <img src="{{ Theme::asset()->url('images/introduce/tbd.jpg') }}" alt="">
                                <p class="name">Ông <strong>Trần Bá Dương</strong></p>  
                                <p class="postion">Chủ tịch HĐQT</p>
                            </div>
                        </div>
                        
                        <div class="row-2">
                            <div class="admin-top-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                <img src="{{ Theme::asset()->url('images/introduce/nhm.jpg') }}" alt="">
                                <p class="name">Ông <strong> Nguyễn Hùng Minh</strong></p>
                                <p class="postion">Phó Chủ tịch TT HĐQT</p>
                            </div>
                            <div class="admin-top-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                <img src="{{ Theme::asset()->url('images/introduce/kim-teck.jpg') }}" alt="">
                                <p class="name">Ông <strong>Cheah Kim Teck</strong></p>
                                <p class="postion">Phó Chủ tịch HĐQT</p>
                            </div>
                            
                        </div>
                        <div class="row-3">
                            <div class="admin-top-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                <img src="{{ Theme::asset()->url('images/introduce/vdh.jpg') }}" alt="">
                                <p class="name">Bà <strong> Viên Diệu Hoa</strong></p>
                                <p class="postion">Thành viên</p>
                            </div>
                            <div class="admin-top-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                <img src="{{ Theme::asset()->url('images/introduce/pvt.jpg') }}" alt="">
                                <p class="name">Ông <strong>Phạm Văn Tài</strong></p>
                                <p class="postion">Thành viên</p>
                            </div>
                            <div class="admin-top-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                <img src="{{ Theme::asset()->url('images/introduce/setephen.jpg') }}" alt="">
                                <p class="name">Ông <strong> Stephen Patrick Gore</strong></p>
                                <p class="postion">Thành viên</p>
                            </div>
                            <div class="admin-top-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                <img src="{{ Theme::asset()->url('images/introduce/nqb.jpg') }}" alt="">
                                <p class="name">Ông <strong>Nguyễn Quang Bảo</strong></p>
                                <p class="postion">Thành viên</p>
                            </div>
                            <div class="admin-top-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                <img src="{{ Theme::asset()->url('images/introduce/lts.jpg') }}" alt="">
                                <p class="name">Ông <strong>Lê Trọng Sánh</strong></p>
                                <p class="postion">Thành viên</p>
                            </div>
                        </div>
                    
                        
                    </div>
                    <div class="title-admin-bottom" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                        <h3 class="title-admin">Ban kiểm soát</h3>
                    </div>
                    <div class="admin-bottom-content">
                        <div class="bottom-content">
                            <div class="admin-bottom-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                <img src="{{ Theme::asset()->url('images/introduce/npt.jpg') }}" alt="">
                                <p class="name">Ông <strong>Nguyễn Phúc Thịnh</strong></p>  
                                <p class="postion">Trưởng ban</p>
                            </div>
                            <div class="admin-bottom-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                <img src="{{ Theme::asset()->url('images/introduce/dct.jpg') }}" alt="">
                                <p class="name">Ông <strong> Đặng Công Trực</strong></p>  
                                <p class="postion">Thành viên</p>
                            </div>
                            <div class="admin-bottom-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                <img src="{{ Theme::asset()->url('images/introduce/bmk.jpg') }}" alt="">
                                <p class="name">Ông <strong>Bùi Minh Khoa</strong></p>  
                                <p class="postion">Thành viên</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="achievement-wrapper mt-40">
                    <div class="achievement-tab-title">
                        <div class="achievement__title mt-40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                            <img src="{{ Theme::asset()->url('images/introduce/arrow.png') }}" alt="">
                            <h2 class="font50 big-title">Thành tựu</h2>
                        </div>
                        <div class="achievement__tabs" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                            <ul class=" nav nav-tabs mb-0" id="tab-achievement" role="tablist">
                                <li class="__tabs__item " role="achievement">
                                    <a class="__tabs__link nav-link active" id="achievement-company-tab" data-toggle="tab" role="tab" aria-controls="achievement-company" aria-selected="true" href="#achievement-company" title="Tất Cả">
                                        THÀNH TỰU CỦA CÔNG TY
                                    </a>
                                </li>
                                <li class="__tabs__item" role="achievement">
                                    <a class="__tabs__link nav-link" id="achievement-leader-tab" data-toggle="tab" role="tab" aria-controls="achievement-leader" aria-selected="true" href="#achievement-leader" title="Tất Cả">
                                        THÀNH TỰU CỦA CHỦ TỊCH         
                                    </a>
                                </li>
                                
                            </ul>
                        
                        </div>
                    </div>
                    
                    <div class="tab-pane fade active show" id="achievement-company" role="tabpanel" aria-labelledby="field-1-tab">
                            <div class="content-tab" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                <p class="content-title font18 mt-40 text-justify">
                                    Từ lúc thành lập tới nay, Thaco đã vinh dự nhận được nhiều bằng khen, giải thưởng các cấp vinh danh những đóng góp và thành tích của công ty trong hoạt động sản xuất kinh doanh, hoạt động cộng đồng xã hội và sự nghiệp xây dựng, bảo vệ Tổ quốc:
                                </p>
                                <div class="top">
                                    <div class="top-content" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                        <div class="img-content">
                                            <img src="{{ Theme::asset()->url('images/introduce/h3.png') }}" alt="">
                                            <p><span class="year font24">2002</span></p>
                                        </div>
                                    <p class="desc font18">Được Chủ tịch Nước CHXHCN Việt Nam  tặng thưởng <strong class="font-myria-bold">Huân chương Lao động hạng ba</strong>.</p>
                                    </div>
                                    <div class="top-content" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                        <div class="img-content">
                                        <img src="{{ Theme::asset()->url('images/introduce/h2.png') }}" alt="">
                                        <p><span class="year font24">2012</span></p>
                                        </div>
                                    <p class="desc font18">Được Chủ tịch Nước CHXHCN Việt Nam  tặng thưởng  <strong class="font-myria-bold">Huân chương Lao động hạng Nhì</strong>.</p>
                                    </div>
                                    
                                    <div class="top-content" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                        <div class="img-content">
                                        <img src="{{ Theme::asset()->url('images/introduce/h1.png') }}" alt="">
                                    <p><span class="year font24">2017</span></p>
                                        </div>
                                    <p class="desc font18">Được Chủ tịch Nước CHXHCN Việt Nam  tặng thưởng  <strong class="font-myria-bold">Huân chương Lao động hạng Nhất</strong>.</p>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <div class="bottom-content" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                        <div class="img-content">
                                            <img src="{{ Theme::asset()->url('images/introduce/thi-1.png') }}" alt="">
                                            <p><span class="year font24">2012, 2013, 2014</span></p>
                                        </div>
                                    
                                    
                                    <p class="desc font18">Được Chính phủ Nước CHXHCN Việt Nam tặng  <strong class="font-myria-bold">cờ thi đua Xuất sắc</strong>.</p>
                                    </div>
                                    <div class="bottom-content" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate" >
                                        <div class="img-content">
                                        <img src="{{ Theme::asset()->url('images/introduce/thi-2.png') }}" alt="">
                                        <p><span class="year font24">Từ 2012-2015</span></p>
                                        </div>
                                        <p class="desc font18">Được Chính phủ Nước CHXHCN Việt Nam tặng  <strong class="font-myria-bold">cờ thi đua Xuất sắc</strong>.</p>
                                    </div>
                                    <div class="bottom-content" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                        <div class="img-content">
                                        <img src="{{ Theme::asset()->url('images/introduce/sao-vang.png') }}" alt="">
                                    <p><span class="year font24">Từ 2012 – 2016</span></p>
                                        </div>
                                    <p class="desc font18">5 lần đạt giải thưởng<strong class="font-myria-bold"> “ Sao vàng Đất Việt”.</strong>.</p>
                                    </div>
                                    <div class="bottom-content" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                        <div class="img-content">
                                        <img src="{{ Theme::asset()->url('images/introduce/th-qg.png') }}" alt="">
                                        <p><span class="year font24">Từ 2012 – 2020</span></p>
                                        </div>
                                    <p class="desc font18">5 lần đạt <strong class="font-myria-bold">“Thương Hiệu Quốc Gia” </strong>- Bộ Công Thương.</p>
                                    </div>
                                    <div class="bottom-content" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                        <div class="img-content">
                                        <img src="{{ Theme::asset()->url('images/introduce/dn-thue.png') }}" alt="">
                                    <p><span class="year font24">2020</span></p>
                                        </div>
                                    <p class="desc font18">Được Tổng Cục Thuế Tuyên dương <strong class="font-myria-bold">Doanh nghiệp nộp thuế tiêu biểu</strong>.</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    {{-- <div class="tab-pane fade" id="achievement-leader" role="tabpanel" aria-labelledby="achievement-leader-tab">
                            <div class="content-tab">
                                <p class="content-title font18 mt-40">
                                    Từ lúc thành lập tới nay, Thaco đã vinh dự nhận được nhiều bằng khen, giải thưởng các cấp vinh danh những đóng góp và thành tích của công ty trong hoạt động sản xuất kinh doanh, hoạt động cộng đồng xã hội và sự nghiệp xây dựng, bảo vệ Tổ quốc:
                                </p>
                                <div class="top">
                                    <div class="top-content">
                                        <div class="img-content">
                                            <img src="{{ Theme::asset()->url('images/introduce/h3.png') }}" alt="">
                                            <p><span class="year font24">2002</span></p>
                                        </div>
                                    
                                    
                                    <p class="desc font18">Được Chủ tịch Nước Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam tặng thưởng <strong class="font-myria-bold">Huân chương Lao động hạng ba</strong>.</p>
                                    </div>
                                    <div class="top-content">
                                        <div class="img-content">
                                        <img src="{{ Theme::asset()->url('images/introduce/h2.png') }}" alt="">
                                        <p><span class="year font24">2012</span></p>
                                        </div>
                                    <p class="desc font18">Được Chủ tịch Nước Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam tặng thưởng  <strong class="font-myria-bold">Huân chương Lao động hạng Nhì</strong>..</p>
                                    </div>
                                    <div class="top-content">
                                        <div class="img-content">
                                        <img src="{{ Theme::asset()->url('images/introduce/h1.png') }}" alt="">
                                    <p><span class="year font24">2017</span></p>
                                        </div>
                                    <p class="desc font18">Được Chủ tịch Nước Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam tặng thưởng  <strong class="font-myria-bold">Huân chương Lao động hạng Nhất</strong>.</p>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <div class="bottom-content">
                                        <div class="img-content">
                                            <img src="{{ Theme::asset()->url('images/introduce/thi-1.png') }}" alt="">
                                            <p><span class="year font24">2012, 2013, 2014</span></p>
                                        </div>
                                    
                                    
                                    <p class="desc font18">Được Chính phủ Nước Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam tặng  <strong class="font-myria-bold">cờ thi đua Xuất sắc</strong>.</p>
                                    </div>
                                    <div class="bottom-content">
                                        <div class="img-content">
                                        <img src="{{ Theme::asset()->url('images/introduce/thi-2.png') }}" alt="">
                                        <p><span class="year font24">Từ 2012-2015</span></p>
                                        </div>
                                        <p class="desc font18">Được Chính phủ Nước Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam tặng  <strong class="font-myria-bold">cờ thi đua Xuất sắc</strong>.</p>
                                    </div>
                                    <div class="bottom-content">
                                        <div class="img-content">
                                        <img src="{{ Theme::asset()->url('images/introduce/sao-vang.png') }}" alt="">
                                    <p><span class="year font24">Từ 2012 – 2016</span></p>
                                        </div>
                                    <p class="desc font18">5 lần đạt giải thưởng<strong class="font-myria-bold"> “ Sao vàng Đất Việt”.</strong>.</p>
                                    </div>
                                    <div class="bottom-content">
                                        <div class="img-content">
                                        <img src="{{ Theme::asset()->url('images/introduce/th-qg.png') }}" alt="">
                                        <p><span class="year font24">Từ 2012 – 2020</span></p>
                                        </div>
                                    <p class="desc font18">5 lần đạt <strong class="font-myria-bold">“Thương Hiệu Quốc Gia” </strong>- Bộ Công Thương.</p>
                                    </div>
                                    <div class="bottom-content">
                                        <div class="img-content">
                                        <img src="{{ Theme::asset()->url('images/introduce/dn-thue.png') }}" alt="">
                                    <p><span class="year font24">2020</span></p>
                                        </div>
                                    <p class="desc font18">Được Tổng Cục Thuế Tuyên dương <strong class="font-myria-bold">Doanh nghiệp nộp thuế tiêu biểu</strong>.</p>
                                    </div>
                                </div>
                            </div>
                            
                    </div> --}}
                </div>    
    </div>
    
    <div class="develop-wrapper">
        <div class="develop__title pb-40 container-customize" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
            <img class="img-blue" src="{{ Theme::asset()->url('images/introduce/arrow.png') }}"  alt="icon">
            <img class="img-white" src="{{ Theme::asset()->url('images/introduce/icon-arrow-white.png') }}"  alt="icon" style="display:none">
            <h2 class="font50 big-title"> {!!has_field($page, 'title_develop')!!}</h2>
        </div>
            <div class="develop-banner lazyloaded " style="background-image:url('{{ get_field($page, 'bg_develop') ? get_image_url(get_field($page, 'bg_develop')) : Theme::asset()->url('images/introduce/1.jpg') }}')">
                <div class="develop-content-wrapper">
                    <div class="develop-content__slider">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="cycle-list-wrap">
                                    <ul class="slider slider-nav thumb-year">
                                        @if(has_field($page,'content_slide'))
                                        @foreach(has_field($page,'content_slide') as $item_develop)
                                        <li class="font30 item-slider">
                                           {{has_sub_field($item_develop,'year')}}
                                        </li>
                                        @endforeach
                                        @endif
                                    </ul>
                                    
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="thumb-wrapper">
                                    <div class="slider slider-for">
                                        @if(has_field($page,'content_slide'))
                                        @foreach(has_field($page,'content_slide') as $item_develop_content)
                                            <div class="thumbnail-image mCustomScrollbar" data-mcs-theme="dark" >
                                                <div class="image-slider">
                                                    
                                                    <img src="{{ get_sub_field($item_develop_content, 'image') ? get_image_url(get_sub_field($item_develop_content, 'image')) :'' }}" alt="{{has_sub_field($item_develop_content,'title')}}" />
                                                </div>
                                                    <div class="content-slider">
                                                        <h3 class="title font30">{{has_sub_field($item_develop_content,'title')}}</h3>
                                                        <div class="desc__wrapper">
                                                            <div class="desc font18 text-justify  ">
                                                                {!!has_sub_field($item_develop_content,'content')!!}
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="carousel-controls transparent-controls">
                            <button class="play active"><img src="{{ Theme::asset()->url('images/introduce/play-button-1.png')}}" alt="icon"></button>
                            <button class="pause"><img src="{{ Theme::asset()->url('images/introduce/pause-1.png')}}" alt="icon"></button>
                        </div>
                    </div>
                </div>
            </div>


    </div>
    
</section>

<div class="modal fade" id="info_admin_modal" tabindex="-1" role="dialog" aria-labelledby="info_admin_modallLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body mCustomScrollbar p-0" data-mcs-theme="dark">
                
                <div class="row mr-md-0">
                   
                    <div class="col-md-4 p-0 col-12 col-right pl-md-4">
                        <img class="w-100" src="{{Theme::asset()->url('images/introduce/anh-modal.jpg')}}" alt="">
                       
                    </div>
                    <div class="col-md-8">
                        
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="fal fa-times"></i>
                            </button>
                        
                        <div class="info-admin">
                            <p class="name">Tên  : <strong class="">Trần Bá Dương</strong>  </p>
                            <p class="bof">Sinh năm  : <span>01/04/1960</span> </p>
                            <p class="addres-bof">Nơi sinh  : <span>TP. Huế, tỉnh Thừa Thiên Huế                            </span> </p>
                        </div>
                            
                    </div>
                </div>
               
                <div class="work-progress">
                    <h3 class="title font20">QUÁ TRÌNH LÀM VIỆC TẠI THACO</h3>
                    <div class="work-progress-table">
                        <table class="table">
                            <thead>
                                <tr>
                                
                                <th scope="col">Vị trí</th>
                                <th scope="col">Tổ chức</th>
                                <th scope="col">Thời gian bổ nhiệm</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Lorem Ipsum</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing	</td>
                                <td>8/1/2021</td> 
                                </tr>
                                <tr>
                                <td>Lorem Ipsum</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing	</td>
                                <td>8/1/2021</td> 
                                </tr>
                                <tr>
                                <td>Lorem Ipsum</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing	</td>
                                <td>8/1/2021</td> 
                                </tr>
                                <tr>
                                <td>Lorem Ipsum</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing	</td>
                                <td>8/1/2021</td> 
                                </tr>
                                
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>