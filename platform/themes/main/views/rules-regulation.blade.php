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

<!--breadcrumb-->
@includeIf("theme.main::views.components.breadcrumb")
<!---end breadcrumb---->

<section class="media-newspapers mb-60">
    <div class="media-newspapers-wrapper">
        <div class="container-customize">
             <div class="shareholder-infomation mb-100">
                        <div class="shareholder-infomation_left">
                            <div class="list-info">
                                <div class="filter-search-media mb-40 non-field">
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


                                @forelse($data as $item)
                                    <div class="info-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                        <div class="info-left">
                                            <div class="date">
                                                <p>
                                                    <span class="date-day">
                                                        {{$item->created_at->format('d')}}</span>
                                                    <sup class="">/{{$item->created_at->format('m')}}</sup>
                                                </p>
                                                <p class="date-year fon16 text-center">{{$item->created_at->format('Y')}}</p>
                                            </div>
                                        </div>
                                        <div class="info-right">
                                            <h3 >
                                                <a href="" class="font25 itemdown-show">
                                                    {!! $item->name !!}
                                                </a>
                                            </h3>

                                            @if(has_field($item, 'repeater_file_post_investor'))
                                                <p class="count">
                                                    {!! 
                                                        count(has_field($item, 'repeater_file_post_investor'))
                                                        .' '.
                                                        __('Files')
                                                    !!}
                                                </p>
                                                <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" class="download">
                                                    <img src="{{ Theme::asset()->url('images/relationship/download.png') }}" alt="">
                                                </a>
                                                <div class="downcontent">
                                                    <ul class="list-file">
                                                        @foreach(has_field($item, 'repeater_file_post_investor') as $sub)
                                                            <li>
                                                                <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                                        {{has_sub_field($sub, 'file')}}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @empty

                                <p class="text-center text-danger">
                                    {!! __('Đang được cập nhật') !!}
                                </p>
                                    
                                @endforelse

                                {{-- <div class="info-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" class="aos-init aos-animate">
                                    <div class="info-left">
                                        <div class="date">
                                            <p>
                                                <span class="date-day">20</span>
                                                <sup class="">/05</sup>
                                            </p>
                                            <p class="date-year fon16 text-center">2021</p>
                                        </div>
                                    </div>
                                    <div class="info-right">
                                        <h3 >
                                            <a href="" class="font25 itemdown-show">
                                                Điều lệ Công ty Cổ phần Ô tô Trường Hải
                                            </a>
                                        </h3>
                                        <p class="count">
                                            2 files
                                        </p>
                                        <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" class="download">
                                            <img src="{{ Theme::asset()->url('images/relationship/download.png') }}" alt="">
                                        </a>
                                        <div class="downcontent">
                                            <ul class="list-file">
                                                <li>
                                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                        Cong bo thong tin ve viec THACO huy dang ky cong ty dai chung.pdf
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                        XAC NHAN THAM DU.pdf
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150" class="aos-init aos-animate">
                                    <div class="info-left">
                                        <div class="date">
                                            <p>
                                                <span class="date-day">05</span>
                                                <sup class="">/04</sup>
                                            </p>
                                            <p class="date-year fon16 text-center">2020</p>
                                        </div>
                                    </div>
                                    <div class="info-right">
                                        <h3 >
                                            <a href="" class="font25 itemdown-show">
                                                Quy chế quản trị nội bộ
                                            </a>
                                        </h3>
                                        <p class="count">
                                            2 files
                                        </p>
                                        <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" class="download">
                                            <img src="{{ Theme::asset()->url('images/relationship/download.png') }}" alt="">
                                        </a>
                                        <div class="downcontent">
                                            <ul class="list-file">
                                                <li>
                                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                        Thuc hien quyen tham du dai hoi co dong thuong nien nam 2021.pdf
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                        XAC NHAN THAM DU.pdf
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="aos-init aos-animate">
                                    <div class="info-left">
                                        <div class="date">
                                            <p>
                                                <span class="date-day">22</span>
                                                <sup class="">/05</sup>
                                            </p>
                                            <p class="date-year fon16 text-center">2020</p>
                                        </div>
                                    </div>
                                    <div class="info-right">
                                        <h3 >
                                            <a href="" class="font25 itemdown-show">
                                                Phụ lục sửa đổi điều lệ lần thứ 13 của Thaco
                                            </a>
                                        </h3>
                                        <p class="count">
                                            2 files
                                        </p>
                                        <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" class="download">
                                            <img src="{{ Theme::asset()->url('images/relationship/download.png') }}" alt="">
                                        </a>
                                        <div class="downcontent">
                                            <ul class="list-file">
                                                <li>
                                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                        01-2020-TB HDQT-THACO.pdf
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                        XAC NHAN THAM DU.pdf
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="250" class="aos-init aos-animate">
                                    <div class="info-left">
                                        <div class="date">
                                            <p>
                                                <span class="date-day">25</span>
                                                <sup class="">/08</sup>
                                            </p>
                                            <p class="date-year fon16 text-center">2021</p>
                                        </div>
                                    </div>
                                    <div class="info-right">
                                        <h3 >
                                            <a href="" class="font25 itemdown-show">
                                                Điều lệ Công ty Cổ phần Ô tô Trường Hải
                                            </a>
                                        </h3>
                                        <p class="count">
                                            2 files
                                        </p>
                                        <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" class="download">
                                            <img src="{{ Theme::asset()->url('images/relationship/download.png') }}" alt="">
                                        </a>
                                        <div class="downcontent">
                                            <ul class="list-file">
                                                <li>
                                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                        TB MOI THAM DU DHCD NAM 2021.pdf
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                        XAC NHAN THAM DU.pdf
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" class="aos-init aos-animate">
                                    <div class="info-left">
                                        <div class="date">
                                            <p>
                                                <span class="date-day">25</span>
                                                <sup class="">/08</sup>
                                            </p>
                                            <p class="date-year fon16 text-center">2021</p>
                                        </div>
                                    </div>
                                    <div class="info-right">
                                        <h3 >
                                            <a href="" class="font25 itemdown-show">
                                                Quy chế quản trị nội bộ
                                            </a>
                                        </h3>
                                        <p class="count">
                                            2 files
                                        </p>
                                        <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" class="download">
                                            <img src="{{ Theme::asset()->url('images/relationship/download.png') }}" alt="">
                                        </a>
                                        <div class="downcontent">
                                            <ul class="list-file">
                                                <li>
                                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                        TB MOI THAM DU DHCD NAM 2021.pdf
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                        XAC NHAN THAM DU.pdf
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="350" class="aos-init aos-animate">
                                    <div class="info-left">
                                        <div class="date">
                                            <p>
                                                <span class="date-day">25</span>
                                                <sup class="">/08</sup>
                                            </p>
                                            <p class="date-year fon16 text-center">2021</p>
                                        </div>
                                    </div>
                                    <div class="info-right">
                                        <h3 >
                                            <a href="" class="font25 itemdown-show">
                                                Phụ lục sửa đổi điều lệ lần thứ 13 của Thaco
                                            </a>
                                        </h3>
                                        <p class="count">
                                            2 files
                                        </p>
                                        <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" class="download">
                                            <img src="{{ Theme::asset()->url('images/relationship/download.png') }}" alt="">
                                        </a>
                                        <div class="downcontent">
                                            <ul class="list-file">
                                                <li>
                                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                        TB MOI THAM DU DHCD NAM 2021.pdf
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                        XAC NHAN THAM DU.pdf
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item"  data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" class="aos-init aos-animate">
                                    <div class="info-left">
                                        <div class="date">
                                            <p>
                                                <span class="date-day">25</span>
                                                <sup class="">/08</sup>
                                            </p>
                                            <p class="date-year fon16 text-center">2021</p>
                                        </div>
                                    </div>
                                    <div class="info-right">
                                        <h3 >
                                            <a href="" class="font25 itemdown-show">
                                                Điều lệ Công ty Cổ phần Ô tô Trường Hải
                                            </a>
                                        </h3>
                                        <p class="count">
                                            2 files
                                        </p>
                                        <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" class="download">
                                            <img src="{{ Theme::asset()->url('images/relationship/download.png') }}" alt="">
                                        </a>
                                        <div class="downcontent">
                                            <ul class="list-file">
                                                <li>
                                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                        TB MOI THAM DU DHCD NAM 2021.pdf
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}">
                                                        XAC NHAN THAM DU.pdf
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                            @if(!empty($data))
                                {{ $data->links('vendor.pagination.custom') }}
                            @endif
                        </div>
                        
                        {!!
                            Menu::renderMenuLocation('menu-investor-relations', [ 
                                'options' => [],
                                'theme'   => true,
                                'view'    => 'menu-investor-relations'
                            ])
                        !!}
               
             </div>
        </div>
    </div>
</section>