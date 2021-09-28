
<div {!! clean($options) !!} class="list-media-menu" data-aos="fade-up" data-aos-duration="100" data-aos-delay="50" class="aos-init aos-animate">
    <h3 class="font28 font-myria-bold">{!! __('THÔNG TIN KHÁC') !!}</h3>
    @foreach ($menu_nodes as $key => $row)
    <a href="{{ $key!=5 ? 'javascript:;' : $row->url }}" target="{{ $row->target }}" class="item_link_media list-group-item  font18 font-myria-bold {{ $row->active ? "active" : ""}}" data-category={{$row->reference_id}}>
        <i class='{{ trim($row->icon_font) }}'></i> <span>{{ $row->name }}</span>
    </a> 
    @if ($row->has_child)
    {!! Menu::generateMenu([
        'slug' => $menu->slug,
        'parent_id' => $row->id
    ]) !!}
    @endif
    @endforeach
</div>


