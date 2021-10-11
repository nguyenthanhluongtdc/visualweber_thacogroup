@if(theme_option('enable_popup', 0) == 1)
<div id="boxes">
    <div id="dialog" class="window">
        <a href="{{ theme_option('link_popup') }}" id="lorem" target="_blank">
            <button class="close popup"> <i class="fal fa-times"></i> </button>
            <img class="w-auto h-auto" src="{{rvMedia::getImageUrl(theme_option('image_popup'))}}" />
        </a>
    </div>
    <div id="mask"></div> 
</div>
@endif
  