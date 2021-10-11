@includeIf("theme.main::views.breadcrumb")
<div class="shareholder-infomation_left">
    {{-- <div class="filter-search-media field">
        <form action="" class="form-search ">
            <div class="search">
                <input type="text" class=" form-control form-control-sm " placeholder="Nhập nội dung cần tìm" value=""
                    name="q">
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
    @includeIf("theme.main::views.components.filter-post")
    <div class="list-info">
    
        @forelse($posts as $item)
        @if(has_field($item, 'repeater_file_media'))
            <div class="info-item">
                <div class="info-left">
                    <div class="date">
                        <p>
                            <span class="date-day">{{$item->created_at->format('m')}}</span><sup class="">/{{$item->created_at->format('Y')}}</sup>
                        </p>
                        <p class="date-year fon16 text-center">{{$item->created_at->format('d')}}</p>
                    </div>
                </div>
                <div class="info-right">
                    <h3>
                        <a href="{{ count(has_field($item, 'repeater_file_media'))==1 ? get_object_image(has_sub_field(has_field($item, 'repeater_file_media')[0], 'file')) :''}}" class="font25 text-justify {{count(has_field($item, 'repeater_file_media'))>1 ? 'itemdown-show' : ''}} " target="_blank">
                            {!! $item->name !!}
                        </a>
                       
                    </h3>
    
                    @if(has_field($item, 'repeater_file_media'))
                    <p class="count">
                        {!! count(has_field($item, 'repeater_file_media')).' '.__('Files') !!}
                    </p>
                    <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" data-id="{{$item->id}}"
                        class="post download">
                        <img src="{{ Theme::asset()->url('images/relationship/download.png') }}" alt="">
                        <img src="{{ Theme::asset()->url('images/relationship/down.png') }}" alt="" class="img-mobile">
                    </a>  
                    <div class="downcontent">
                        <ul class="list-file">
                            @foreach(has_field($item, 'repeater_file_media') as $sub)
                            <li>
                                <a href="{{ get_image_url(has_sub_field($sub, 'file')) }}" target="_blank">
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
        @endif
        @empty
    
        <p class="text-center text-danger">
            {!! __('Đang được cập nhật') !!}
        </p>
    
        @endforelse
    </div>
    @if(!empty($posts))
        {{ $posts->withQueryString()->links('vendor.pagination.custom') }}
    @endif
    {{-- {{ $posts->links('vendor.pagination.custom') }} --}}
</div>
<script>
    window.urlDownload = "{{route('api-media-newspaper.download')}}";
</script>
<script>
    if($('.shareholder-infomation_left').length>0){
        $('.media-tab').css('display','none');
    }
 </script>