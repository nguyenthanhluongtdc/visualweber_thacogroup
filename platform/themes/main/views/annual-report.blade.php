<section class="slide-info">
    <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ Theme::asset()->url('images/relationship/quan-he-co dong-banner.jpg') }}" alt=""
                    class="img-slider  h-45vw w-100">
            </div>
            <div class="swiper-slide">
                <img src="{{ Theme::asset()->url('images/media/banner-1.jpg') }}" alt=""
                    class="img-slider  h-45vw  w-100 ">
            </div>

            <div class="swiper-slide">
                <img src="{{ Theme::asset()->url('images/home/banner-3.jpg') }}" alt=""
                    class="img-slider  h-45vw  w-100 ">
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

            <div class="financial-report  mb-100">
                <div class="financial-report_left">
                    <div class="filter-search-media mb-40 non-field-w66">
                        <form action="" class="form-search ">
                            <div class="search">
                                <input type="text" class=" form-control form-control-sm "
                                    placeholder="Nhập nội dung cần tìm" value="" name="q">
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
                        @forelse($data as $item)
                            <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="50"
                                class="aos-init aos-animate">
                                <div class="thumb-img">
                                    <img src="{{ Storage::disk('public')->exists($item->image) ? get_object_image($item->image): RvMedia::getDefaultImage() }}"
                                        alt="report">
                                </div>
                                <span class="date">20/02/2020</span>
                                <p class="name-file font18"> {!! $item->name !!} </p>
                                <div class="download">
                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}"
                                        title="download">DOWNLOAD</a>
                                </div>
                            </div>
                        @empty
                        <p class="text-center text-danger">
                            {!! __('Đang được cập nhật') !!}
                        </p>
                        @endforelse
                        {{-- <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100"
                            class="aos-init aos-animate">
                            <div class="thumb-img">
                                <img src="{{ Theme::asset()->url('images/relationship/bao-cao-thuong-nien/bao-cao-2.jpg') }}"
                                    alt="report">
                            </div>
                            <span class="date">20/02/2020</span>
                            <p class="name-file font18">Báo cáo quản trị 6 tháng cuối năm 2017</p>
                            <div class="download">
                                <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}"
                                    title="download">DOWNLOAD</a>
                            </div>
                        </div>
                        <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150"
                            class="aos-init aos-animate">
                            <div class="thumb-img">
                                <img src="{{ Theme::asset()->url('images/relationship/bao-cao-thuong-nien/bao-cao-3.jpg') }}"
                                    alt="report">
                            </div>
                            <span class="date">20/02/2020</span>
                            <p class="name-file font18">Báo cáo quản trị 6 tháng cuối năm 2015</p>
                            <div class="download">
                                <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}"
                                    title="download">DOWNLOAD</a>
                            </div>
                        </div>
                        <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="250"
                            class="aos-init aos-animate">
                            <div class="thumb-img">
                                <img src="{{ Theme::asset()->url('images/relationship/bao-cao-thuong-nien/bao-cao-4.jpg') }}"
                                    alt="report">
                            </div>
                            <span class="date">20/02/2020</span>
                            <p class="name-file font18">Báo cáo quản trị 6 tháng đầu năm 2015</p>
                            <div class="download">
                                <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}"
                                    title="download">DOWNLOAD</a>
                            </div>
                        </div>
                        <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300"
                            class="aos-init aos-animate">
                            <div class="thumb-img">
                                <img src="{{ Theme::asset()->url('images/relationship/bao-cao-thuong-nien/bao-cao-5.jpg') }}"
                                    alt="report">
                            </div>
                            <span class="date">20/02/2020</span>
                            <p class="name-file font18">Báo cáo quản trị 6 tháng cuối năm 2014</p>
                            <div class="download">
                                <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}"
                                    title="download">DOWNLOAD</a>
                            </div>
                        </div>
                        <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="350"
                            class="aos-init aos-animate">
                            <div class="thumb-img">
                                <img src="{{ Theme::asset()->url('images/relationship/bao-cao-thuong-nien/bao-cao-6.jpg') }}"
                                    alt="report">
                            </div>
                            <span class="date">20/02/2020</span>
                            <p class="name-file">Báo cáo quản trị 6 tháng đầu năm 2014</p>
                            <div class="download">
                                <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}"
                                    title="download">DOWNLOAD</a>
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
                        'theme' => true,
                        'view' => 'menu-investor-relations'
                    ])
                !!}
            </div>
        </div>
    </div>
</section>