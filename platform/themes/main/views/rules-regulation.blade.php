@includeIf('theme.main::views.components.banner-qhcd')

<!--breadcrumb-->
@includeIf("theme.main::views.components.breadcrumb")
<!---end breadcrumb---->

<section class="media-newspapers mb-60">
    <div class="media-newspapers-wrapper">
        <div class="container-customize">
             <div class="shareholder-infomation mb-100">
                        <div class="shareholder-infomation_left">
                            <div class="list-info">

                                @includeIf('theme.main::views.components.filter-qhcd')

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
                                {{ $data->withQueryString()->links('vendor.pagination.custom') }}
                            @endif
                        </div>
                        
                        {!!
                            Menu::renderMenuLocation('menu-investor-relations', [ 
                                'options' => [$category->id],
                                'theme'   => true,
                                'view'    => 'menu-investor-relations'
                            ])
                        !!}
               
             </div>
        </div>
    </div>
</section>

<script>
    let year = "{{Request::get('year')}}";
    $('select > option').each(function() {
        if($(this).val()==year) {
            $(this).attr('selected', true);
        }
    })
</script>