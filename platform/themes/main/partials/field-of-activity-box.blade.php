<ul class="pagination-customize" {!! clean($options) !!}>
    @foreach ($menu_nodes as $key => $row)
    <li class="pagi-item {{ $row->active ? "active-row" : ""}}">
        <span class="text text-uppercase  {{ trim($row->icon_font) }}"> {{ $row->name }} </span>
        <a href="{{ $row->url }}" title="" class="number click_scroll">
            <img loading="lazy" src="{{ Theme::asset()->url('images/lvhd/thilogi-logo.png') }}" alt=""
                class="icon">

        </a>
    </li>
    @endforeach

     {{-- <a href="{{$row->reference_id != theme_option('default_category_image_video') ?  'javascript:void(0)' : $row->url}} " 
        target="{{ $row->target }}" 
        class=" {{$row->reference_id != theme_option('default_category_image_video') ?  'item_link_media' :''}} list-group-item  font18 font-myria-bold {{ $row->active ? "active-row" : ""}}" 
        data-category={{$row->reference_id}}>
        <i class='{{ trim($row->icon_font) }}'></i> <span>{{ $row->name }}</span>
    </a>  --}}
    {{-- <li class="pagi-item">
        <span class="text text-uppercase"> đầu tư và xây dựng </span>
        <a href="#section_two" title="" class="number click_scroll">
            <img loading="lazy" src="{{ Theme::asset()->url('images/lvhd/thadico-logo.png') }}" alt=""
                class="icon">
        </a>

    </li>

    <li class="pagi-item">
        <span class="text text-uppercase"> ô tô & cơ khí </span>
        <a href="#section_three" title="" class="number click_scroll">
            <img loading="lazy" src="{{ Theme::asset()->url('images/lvhd/thacoauto-logo.png') }}" alt=""
                class="icon">
        </a>

    </li>

    <li class="pagi-item">
        <span class="text text-uppercase"> nông nghiệp </span>
        <a href="#section_four" title="" class="number click_scroll">
            <img loading="lazy" src="{{ Theme::asset()->url('images/lvhd/thagrico-logo.png') }}" alt=""
                class="icon">
        </a>

    </li>

    <li class="pagi-item">
        <span class="text text-uppercase"> thương mại và dịch vụ </span>
        <a href="#section_five" title="" class="number click_scroll">
            <img loading="lazy" src="{{ Theme::asset()->url('images/lvhd/thiso-logo.png') }}" alt=""
                class="icon">
        </a>

    </li> --}}

</ul>