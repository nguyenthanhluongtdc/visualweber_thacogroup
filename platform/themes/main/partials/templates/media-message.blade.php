
@includeIf("theme.main::views.breadcrumb")
<div class="media__content_left">
    <div class="news__content">
    @if (!empty($postSlider))
    <div class="news__top">
        <div class="img-post">
            <img class="img-mw-100" src="{{ get_object_image($postSlider[0]->image) }}" alt="{{$postSlider[0]->name}}">
        </div>
        <div class="news-post h-100">
            <h3 class=" title font18 text-uppercase">{!!__ ('THÔNG ĐIỆP NĂM') !!}</h3>
            <a href="{{$postSlider[0]->url}}">  
                <h4 class="name font18 text-justify">{{$postSlider[0]->name}}</h4>
            </a>
            <span class="time">{{date_format($postSlider[0]->created_at,"d-m-Y")}}</span> 
            <p class="description font18  text-justify">{{$postSlider[0]->description}}</p>
            <a href="{{$postSlider[0]->url}}" class="read-more">{!!__('Xem thêm')!!}</a>
        </div>
    </div>
    @endif
    </div>
    <div class="list-media_wrapper" id="scroll-list-news">
        <div class="list-media mt-60">
         @if (!empty($posts))
         @foreach ($posts as $post) 
            <div class="media-item ">
                <div class="img-content">
                    <div class="image">
                        <div class="post-thumbnail">
                            <a href="{{$post->url}}"><img src="{{ get_object_image($post->image) }}" alt=""></a>
                        </div>
                    </div>
                    <div class="content">
                        <a href="{{$post->url}}"><h3 class="name font18">{{$post->name}}</h3></a>
                      
                        <p class="time">{{date_format($post->created_at,"d-m-Y")}}</p>
                        <p class="desc font18">{{$post->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            {{ $posts->links('vendor.pagination.custom') }}

        </div>
    </div>
</div>
    