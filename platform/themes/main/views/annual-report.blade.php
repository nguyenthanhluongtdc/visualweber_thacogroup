<section class="slide-info">
    <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
        <div class="swiper-wrapper">   
            <div class="swiper-slide" >
                <img src="{{ Theme::asset()->url('images/relationship/quan-he-co dong-banner.jpg') }}" alt="" class="img-slider  h-45vw w-100">
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
<div class="container-customize">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/truyenthong">Quan hệ cổ đông</a>
                    </li>
                    <li class="breadcrumb-item active">Báo cáo thường niên</li>
        </ol>
    </nav>
</div>
<section class="media-newspapers mb-60">
    <div class="media-newspapers-wrapper">
        <div class="container-customize">
            
             <div class="financial-report  mb-100">
                        <div class="financial-report_left">
                            <div class="filter-search-media mb-40 non-field-w66">
                                <form action="" class="form-search ">
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
                                    {{-- <select class="select-by-field font18" id="">
                                        <option value="">Ô tô - Cơ Khí</option>
                                        <option value="">Nông nghiệp</option>
                                        <option value="">Thương mại - dịch vụ</option>
                                        <option value="">Đầu tư xây dựng</option>
                                        <option value="">Logistics</option>
                                    </select> --}}
                                </form>
                             </div>
                            <div class="list-report">
                                <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="50" class="aos-init aos-animate">
                                    <div class="thumb-img">
                                        <img src="{{ Theme::asset()->url('images/relationship/report-1.jpg') }}" alt="report">
                                    </div>
                                    <span class="date">20/02/2020</span>
                                    <p class="name-file font18">BCTC KIEM TOAN HOP NHAT 2019 .PDF</p>
                                    <div class="download">
                                        <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" title="download">DOWNLOAD</a>
                                    </div>                                   
                                </div>
                                <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100" class="aos-init aos-animate">
                                    <div class="thumb-img">
                                        <img src="{{ Theme::asset()->url('images/relationship/report-1.jpg') }}" alt="report">
                                    </div>
                                    <span class="date">20/02/2020</span>
                                    <p class="name-file font18">BCTC HOP NHAT QIV.2019.pdf</p>
                                   <div class="download">
                                         <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" title="download">DOWNLOAD</a>
                                   </div>
                                </div>
                                <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150" class="aos-init aos-animate">
                                    <div class="thumb-img">
                                        <img src="{{ Theme::asset()->url('images/relationship/report-1.jpg') }}" alt="report">
                                    </div>
                                    <span class="date">20/02/2020</span>
                                    <p class="name-file font18">BCTC HOP NHAT QIII.2019.pdf</p>
                                    <div class="download">
                                        <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" title="download">DOWNLOAD</a>
                                    </div>
                                </div>
                                <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="250" class="aos-init aos-animate">
                                    <div class="thumb-img">
                                        <img src="{{ Theme::asset()->url('images/relationship/report-1.jpg') }}" alt="report">
                                    </div>
                                    <span class="date">20/02/2020</span>
                                    <p class="name-file font18">BCTC CTY ME QIV.2019.pdf</p>
                                    <div class="download">
                                        <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" title="download">DOWNLOAD</a>
                                    </div>
                                </div>
                                <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300" class="aos-init aos-animate">
                                    <div class="thumb-img">
                                        <img src="{{ Theme::asset()->url('images/relationship/report-1.jpg') }}" alt="report">
                                    </div>
                                    <span class="date">20/02/2020</span>
                                    <p class="name-file font18">BCTC CTY ME KIEM TOAN 2019.pdf</p>
                                    <div class="download">
                                        <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" title="download">DOWNLOAD</a>
                                    </div>
                                </div>
                                <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="350" class="aos-init aos-animate">
                                    <div class="thumb-img">
                                        <img src="{{ Theme::asset()->url('images/relationship/report-1.jpg') }}" alt="report">
                                    </div>
                                    <span class="date">20/02/2020</span>
                                    <p class="name-file">BCTC CTY ME QUY III.2019.pdf</p>
                                    <div class="download">
                                        <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" title="download">DOWNLOAD</a>
                                    </div>
                                </div>
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
                        <div class="relationship-sibar">
                                <div class="relationship__content">
                                    <div class="list-relationship-menu" data-aos="flip-right" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                        <h3 class="font28 font-myria-bold">QUAN HỆ CỔ ĐÔNG</h3>
                                        <a href="/dieu-le-quy-che" class="item_link list-group-item font18 font-myria-bold">Điều lệ quy chế</a>
                                        <a href="/cong-bo-thong-tin" class="item_link list-group-item  font18 font-myria-bold">Công bố thông tin</a>
                                        <a href="/thong-tin-co-dong" class="item_link list-group-item  font18 font-myria-bold">Thông tin cổ đông</a>
                                        <a href="/bao-cao-thuong-nien" class="item_link list-group-item  font18 font-myria-bold active">Báo cáo thường niên</a>
                                        <a href="/bao-cao-tai-chinh" class="item_link list-group-item  font18 font-myria-bold">Báo cáo tài chính</a>
                                       
                                    </div>
                                 
                                </div>
                        </div>   
             </div>
        </div>
    </div>
</section>