
@includeIf("theme.main::views.components.breadcrumb")
<div class="loading d-none">
    <img src="{{Theme::asset()->url('images/media/loading.gif')}}" alt="Loading">
</div>
@if($category)
<h2 class="title-mobile text-uppercase mb-4 font30"> {!! $category->name !!} </h2>
@endif
@includeIf('theme.main::views.components.filter-qhcd')
<div class="list-info">  
    @forelse($data as $item)
    <div class="report-item">
        <div class="thumb-img report-item-left">
            <img src="{{ Storage::disk('public')->exists($item->image) ? get_object_image($item->image): RvMedia::getDefaultImage() }}"
                alt="report">
        </div>
        <div class="report-item-right">
            <span class="date">{{$item->created_at->format('d-m-Y')}}</span>
            <a href="{{get_object_image(has_sub_field(has_field($item, 'repeater_file_post_investor')[0], 'file'))}}" target="_blank"><p class="name-file font18"> {!! $item->name !!} </p></a>
            <span class="date-mobile">{{$item->created_at->format('d-m-Y')}}</span>
            <div class="download">
                <a download href="{{get_object_image(has_sub_field(has_field($item, 'repeater_file_post_investor')[0], 'file'))}}"
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

@if(!empty($data))
    {{ $data->withQueryString()->links('vendor.pagination.custom') }}
@endif