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
                        @if($category)
                        <h2 class="title-mobile text-uppercase mb-4 font30"> {!! $category->name !!} </h2>
                        @endif
    
                        @includeIf('theme.main::views.components.filter-qhcd')
                        @forelse($data as $item)
                            <div class="info-item" data-aos="fade-left" data-aos-duration="500" data-aos-delay="50"
                                class="aos-init aos-animate">
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
                                    <h3>
                                     
                                        <a href="{{ count(has_field($item, 'repeater_file_post_investor'))==1 ? get_object_image(has_sub_field(has_field($item, 'repeater_file_post_investor')[0], 'file')) :''}}" class="font25 {{count(has_field($item, 'repeater_file_post_investor'))>1 ? 'itemdown-show' : ''}} " target="_blank">
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
                                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}"
                                        class="download">
                                        <img src="{{ Theme::asset()->url('images/relationship/download.png') }}" alt="">
                                        <img src="{{ Theme::asset()->url('images/relationship/down.png') }}" alt="" class="img-mobile">
                                    </a>  
                                    <div class="downcontent">
                                        <ul class="list-file">
                                            @foreach(has_field($item, 'repeater_file_post_investor') as $sub)
                                            <li>
                                                <a href="{{ get_object_image(has_sub_field($sub, 'file')) }}" target="_blank">
                                                    {{has_sub_field($sub, 'file')}}
                                                </a>
                                                <span
                                                    class="left font-cond color-gray ml-2">{{@get_file_size(has_sub_field($sub, 'file'))}}</span>
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

<script>
    let year = "{{Request::get('year')}}";
    $('select > option').each(function() {
        if($(this).val()==year) {
            $(this).attr('selected', true);
        }
    })
</script>