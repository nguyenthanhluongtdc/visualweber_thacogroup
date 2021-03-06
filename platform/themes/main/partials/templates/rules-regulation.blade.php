
@includeIf("theme.main::views.components.breadcrumb")
@if($category)
<h2 class="title-mobile text-uppercase mb-3 font50"> {!! $category->name !!} </h2>
@endif
@includeIf('theme.main::views.components.filter-qhcd')
<div class="list-info">
   

    @forelse($data as $item)
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
                 
                    <a href="{{ count(has_field($item, 'repeater_file_post_investor'))==1 ? get_object_image(has_sub_field(has_field($item, 'repeater_file_post_investor')[0], 'file')) :''}}" class="font25 text-justify {{count(has_field($item, 'repeater_file_post_investor'))>1 ? 'itemdown-show' : ''}} " target="_blank">
                        {!! $item->name !!}
                    </a> 
                  
                </h3>

                @if(has_field($item, 'repeater_file_post_investor'))
                <p class="count">
                    {!! count(has_field($item, 'repeater_file_post_investor')).' '.__('Files') !!}
                </p>
                <a href="{{ Theme::asset()->url('images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf') }}" data-id="{{$item->id}}"
                    class="post download" \>
                    {{-- <img src="{{ Theme::asset()->url('images/relationship/download.png') }}" alt="">
                    <img src="{{ Theme::asset()->url('images/relationship/down.png') }}" alt="" class="img-mobile"> --}}

                    <i class="fal fa-arrow-to-bottom text-dark font28"></i>
                </a>  
                <div class="downcontent">
                    <ul class="list-file">
                        @foreach(has_field($item, 'repeater_file_post_investor') as $sub)
                        <li>
                            <a href="{{ get_image_url(has_sub_field($sub, 'file')) }}" target="_blank">
                                {{Str::of(has_sub_field($sub, 'file'))->basename()}} 
                               
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

<script>
    window.urlDownload = "{{route('api-investor.download')}}";
</script>