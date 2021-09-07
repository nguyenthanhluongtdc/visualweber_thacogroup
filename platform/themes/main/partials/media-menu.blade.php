<div {!! clean($options) !!} class="list-media-menu" data-aos="fade-up" data-aos-duration="100" data-aos-delay="50" class="aos-init aos-animate">
    <h3 class="font28 font-myria-bold">THÔNG TIN KHÁC</h3>
    @foreach ($menu_nodes as $key => $row)
    <div class="{{ $row->css_class }} @if ($row->url == Request::url()) current @endif">
    <a href="{{ $row->url }}" target="{{ $row->target }}" class="item_link list-group-item  font18 font-myria-bold {{ $row->active ? "active" : ""}}">
        <i class='{{ trim($row->icon_font) }}'></i> <span>{{ $row->name }}</span>
    </a>
    @if ($row->has_child)
    {!! Menu::generateMenu([
        'slug' => $menu->slug,
        'parent_id' => $row->id
    ]) !!}
@endif
    </div>   
    @endforeach
    {{-- <a href="/ban-tin" class="item_link list-group-item  font18 font-myria-bold">Bản tin</a>
    <a href="/su-kien#scroll-list-news" class="item_link list-group-item  font18 font-myria-bold">Sự kiện</a>
    <a href="/thong-diep#scroll-list-news" class="item_link list-group-item  font18 font-myria-bold">Thông điệp</a>
    <a href="/thu-vien-anh-va-video" class="item_link list-group-item  font18 font-myria-bold">Media</a> --}}
</div>


