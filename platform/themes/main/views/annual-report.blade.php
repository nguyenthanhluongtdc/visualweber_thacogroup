@includeIf('theme.main::views.components.banner-qhcd')

<!--breadcrumb-->
@includeIf("theme.main::views.components.breadcrumb")
<!---end breadcrumb---->

<section class="media-newspapers mb-60">
    <div class="media-newspapers-wrapper">
        <div class="container-customize">
            <div class="financial-report  mb-100">
                <div class="financial-report_left">

                    @includeIf('theme.main::views.components.filter-qhcd')

                    <div class="list-report">
                        @forelse($data as $item)
                        <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="50"
                            class="aos-init aos-animate">
                            <div class="thumb-img">
                                <img src="{{ Storage::disk('public')->exists($item->image) ? get_object_image($item->image): RvMedia::getDefaultImage() }}"
                                    alt="report">
                            </div>
                            <span class="date">{{$item->created_at->format('d/m/Y')}}</span>
                            <p class="name-file font18"> {!! $item->name !!} </p>
                            <div class="download">
                                <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}"
                                    title="download">{!! __('DOWNLOAD') !!}</a>
                            </div>
                        </div>
                        @empty
                        <p class="text-center text-danger">
                            {!! __('Đang được cập nhật') !!}
                        </p>
                        @endforelse
                    </div>

                    @if(!empty($data))
                        {{ $data->withQueryString()->links('vendor.pagination.custom') }}
                    @endif
                </div>
                {!!
                    Menu::renderMenuLocation('menu-investor-relations', [
                        'options' => [$category->id],
                        'theme' => true,
                        'view' => 'menu-investor-relations'
                    ])
                !!}
            </div>
        </div>
    </div>
</section>