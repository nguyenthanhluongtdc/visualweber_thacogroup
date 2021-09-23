<div class="list-report">  
    @forelse($data as $item)
    <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="50"
        class="aos-init aos-animate">
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