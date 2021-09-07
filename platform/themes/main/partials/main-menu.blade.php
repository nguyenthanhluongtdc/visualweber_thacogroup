<nav class="navbar navbar-expand-lg">
    @if (theme_option('logo_white'))
    <a class="logo_link-white" href="{{ route('public.single') }}">
        <img src="{{ RvMedia::getImageUrl(theme_option('logo_white')) }}" alt="{{ theme_option('site_title') }}">
    </a>
    @endif
    <a class="logo_link-blue" href="{{ route('public.single') }}" >
        @if (theme_option('logo'))
        <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="{{ theme_option('site_title') }}">
        @endif
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse " id="navbarTogglerDemo">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            @foreach ($menu_nodes as $key => $row)
            @if ($row->has_child)
            <li class="nav-item nav-link dropdown dmenu">
                <a class="item__link" href="{{$row->url}}" title="{{$row->name}}">{{$row->name}}</a>
                <div class="dropdown-menu sm-menu" style="display:none">
                    @foreach($row->child as $key => $child)
                    <div class="cmenu">
                        <a href="{{ $child->url }}" title="{{$child->name}}" class="dropdown-item">
                            {{$child->name}}
                        </a>
                    </div>
                    @endforeach
                </div>
            </li>
            @else
            <li class="nav-item nav-link  dropdown dmenu">
                <a href="{{ $row->url }}" target="{{ $row->target }}" class="item__link">
                    @if ($row->icon_font)<i class='{{ trim($row->icon_font) }}'></i> @endif{{ $row->title }}
                </a>
            </li>
            @endif
            @endforeach

            <li class="nav-item nav-link dropdown dmenu">
                <a class="item__link" href="#" id="navbardrop" data-toggle="dropdown" >
                    <i class="fas fa-search"></i>
                </a>
                <div class="dropdown-menu sm-menu dropdown--search">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="">
                                <div class="search-box input-group">
                                    <input type="text" name="query" value="" aria-label="Search" class="form-control" placeholder="Tìm kiếm... ">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            
        </ul>
    </div>
</nav>