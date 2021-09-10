<ul class="list-item-top">
    @foreach ($menu_nodes as $key => $row)
          
    <li class="item-top">
        <a href="{{$row->url}}" class="item-top__link" target="_self">
            {{$row->name}}
        </a>
    </li>
    @endforeach
    <li class="item-top ">
        <ul class="language">
            <li class="lang lang-vi">
                <a class="item-top__link" rel="alternate" hreflang="vi" href="{{ Language::getLocalizedURL('vi') }}">
                    <span>VN</span>
                </a>
            </li>
            <li class="lang lang-en ">
                <a class="item-top__link" rel="alternate" hreflang="en" href="{{ Language::getLocalizedURL('en') }}">
                    <span>EN</span>
                </a>
            </li>
        </ul>
    </li>
</ul>