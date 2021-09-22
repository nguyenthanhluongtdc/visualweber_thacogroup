<ul class="nav-list">
    @foreach ($menu_nodes as $key => $row)
    @if ($row->has_child)
    <li class="nav-item">
        <a href="javascript:;">{{$row->name}}</a>
       
        <ul class="nav-dropdown">
            @foreach($row->child as $key => $child)
            <li class="dropdown-item">
                <a href="{{ $child->url }}" class="{{ $row->active ? "active" : ""}}">{{$child->name}}</a>
            </li>
            @endforeach
        </ul>
        
    </li> 
    @else
    <li class="nav-item">
        <a href="{{ $row->url }}">{{ $row->title }}</a>
    </li>
    @endif
    @endforeach
    <li class="icon-social nav-item">
        <a href="{!! theme_option('footer-facebook') !!}" target="_blank">
            <img src="{{ get_image_url(theme_option('footer-facebook-icon-mb')) }}" alt="{!! theme_option('footer-facebook') !!}">
        </a>
        <a href="{!! theme_option('footer-youtube') !!}" target="_blank">
            <img src="{{Theme::asset()->url('images/home/logo/youtube.png') }}" alt="{!! theme_option('footer-youtube') !!}" >
        </a>
        <a href="tel:{!! theme_option('footer-phone') !!}">
            <img src="{{ get_image_url(theme_option('footer-phone-icon-mb')) }}" alt="{!! theme_option('footer-phone') !!}" >
        </a>
        <a href="{!! theme_option('footer-linkedin') !!}" target="_blank" >
            <img src="{{ get_image_url(theme_option('footer-linkedin-icon-mb')) }}" alt="{!! theme_option('footer-linkedin') !!}" >
        </a>
        
        <a href="maito:{!! theme_option('footer-email') !!}" >
            <img src="{{ get_image_url(theme_option('footer-email-icon-mb')) }}" alt="{!! theme_option('footer-email') !!}" >
        </a>
    </li>
</ul>