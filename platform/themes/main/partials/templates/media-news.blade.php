
@includeIf("theme.main::views.breadcrumb")
<div class="filter-search-media mb-40 field">
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
        <select class="select-by-field font18" id="">
            <option value="">Ô tô - Cơ Khí</option>
            <option value="">Nông nghiệp</option>
            <option value="">Thương mại - dịch vụ</option>
            <option value="">Đầu tư xây dựng</option>
            <option value="">Logistics</option>
        </select>
    </form> 
</div>
<div class="shareholder-infomation_left">
    <div class="list-info">  
    
        @forelse($posts as $item)
        <div class="report-item">
            <div class="thumb-img report-item-left">
            
                <a href="{{ has_field($item, 'repeater_file_media') ? get_object_image(has_sub_field(has_field($item, 'repeater_file_media')[0], 'file')) : '#'}}" target="_blank"><p class="name-file font18">
                    <img src="{{ Storage::disk('public')->exists($item->image) ? get_object_image($item->image): RvMedia::getDefaultImage() }}"
                    alt="report">
                </a>
               
            </div>
            <div class="report-item-right">
                <span class="date">{{$item->created_at->format('d-m-Y')}}</span>
                <a href="{{ has_field($item, 'repeater_file_media') ? get_object_image(has_sub_field(has_field($item, 'repeater_file_media')[0], 'file')) : '#'}}" target="_blank"><p class="name-file font18"> {!! $item->name !!} </p></a>
                <span class="date-mobile">{{$item->created_at->format('d-m-Y')}}</span>
                <div class="download">
                    <a download href="{{ has_field($item, 'repeater_file_media') ? get_object_image(has_sub_field(has_field($item, 'repeater_file_media')[0], 'file')) : '#'}}"
                        title="download">{!! __('DOWNLOAD') !!}</a>
                </div> 
                
            </div>
            
        </div>
        @empty
        <p class="text-center text-danger">
            {!! __('Đang được cập nhật') !!}
        </p>
        @endforelse
    
        
    </div>
    
    @if(!empty($posts))
        {{ $posts->withQueryString()->links('vendor.pagination.custom') }}
    @endif
    
</div>


