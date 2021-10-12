
<div {!! clean($options) !!} class="list-media-menu" data-aos="fade-up" data-aos-duration="100" data-aos-delay="50" class="aos-init aos-animate">
    <h3 class="font28 font-myria-bold">{!! __('THÔNG TIN KHÁC') !!}</h3>
    @foreach ($menu_nodes as $key => $row)
    <a href="{{$row->reference_id != theme_option('default_category_image_video') ?  'javascript:void(0)' : $row->url}} " 
        target="{{ $row->target }}" 
        class=" {{$row->reference_id != theme_option('default_category_image_video') ?  'item_link_media' :''}} list-group-item  font18 font-myria-bold {{ $row->active ? "active-row" : ""}}" 
        data-category={{$row->reference_id}}>
        <i class='{{ trim($row->icon_font) }}'></i> <span>{{ $row->name }}</span>
    </a> 
    @endforeach
</div>

  
 