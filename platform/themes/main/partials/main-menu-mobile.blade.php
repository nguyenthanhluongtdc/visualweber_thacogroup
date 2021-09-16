<ul class="nav-list">
{{--     
    <li>
        <a href="#">Lĩnh vực hoạt động</a>
    </li> --}}
    @foreach ($menu_nodes as $key => $row)
    @if ($row->has_child)
    <li>
        <a href="{{$row->url}}">{{$row->name}}</a>
       
        <ul class="nav-dropdown">
            @foreach($row->child as $key => $child)
        <li>
            <a href="{{ $child->url }}">{{$child->name}}</a>
        </li>
            @endforeach
        </ul>
        
    </li>
    @else
    <li>
        <a href="{{ $row->url }}">{{ $row->title }}</a>
    </li>
    @endif
    @endforeach
    <li class="icon-social">
        <a href="#" >
            <img src="{{Theme::asset()->url('images/home/logo/fb.png') }}" alt="">
        </a>
        <a href="#" >
            <img src="{{Theme::asset()->url('images/home/logo/youtube.png') }}" alt="" >
        </a>
        <a href="#" >
            <img src="{{Theme::asset()->url('images/home/logo/linkedin.png') }}" alt="" >
        </a>
        <a href="#" >
            <img src="{{Theme::asset()->url('images/home/logo/phone.png') }}" alt="" >
        </a>
        <a href="#" >
            <img src="{{Theme::asset()->url('images/home/logo/mail.png') }}" alt="" >
        </a>
    </li>
</ul>