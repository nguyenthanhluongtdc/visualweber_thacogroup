@php
$supportedLocales = array_reverse(Language::getSupportedLocales()) ;
$showRelated = setting('language_show_default_item_if_current_version_not_existed', true);
$currentLanguage = Language::getCurrentLocale();
@endphp
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
            @foreach($supportedLocales as $name => $language)
            <li class="lang lang-vi text-uppercase ">
                <a class="item-top__link" rel="alternate" hreflang="{{$name}}" href="{{$showRelated ? Language::getLocalizedURL($name) : url($name)}}">
                    <span class="{{$name==$currentLanguage?'active':''}}"> {!! $name !!}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </li>
</ul> 