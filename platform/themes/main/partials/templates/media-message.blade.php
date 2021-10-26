
@includeIf("theme.main::views.breadcrumb")
<div class="media__content_left message">
    <div class="news__content">
    @if (!empty($postSlider))
    <div class="news__top">
        <div class="img-post">
            <a href="{{$postSlider[0]->url}}">  
            <img class="img-mw-100" src="{{ get_object_image($postSlider[0]->image) }}" alt="{{$postSlider[0]->name}}">
        </a>
        </div>
        <div class="news-post h-100">
            @if(has_field($postSlider[0], 'post_category'))
                <h3 class=" title font18">{!! has_field($postSlider[0],'post_category') !!}  </h3>
            @endif
            
            <a href="{{$postSlider[0]->url}}">  
                <h4 class="name font18 text-justify">{!!str::words($postSlider[0]->name ,15)!!}</h4>
                <span class="time">{{date_format($postSlider[0]->created_at,"d/m/Y")}}</span> 
                <p class="description font18  text-justify">{{str::words($postSlider[0]->description,40)}}</p>
                <a href="{{$postSlider[0]->url}}" class="read-more message text-uppercase">{!!__('Xem thêm')!!}  <i class="fas fa-arrow-right"></i></a>
            </a>
            
        </div>
    </div> 
    @endif
    </div>

    <div class="news-content-mobile human" style="display: none">
        <div class="swiper-container new-post-slide-mb " id="js-swiper-news"
            style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
            <div class="swiper-wrapper">
                @if (!empty($postSlider))
                        <div class="swiper-slide">
                            <div class="news-content">
                                <a href="{{$postSlider[0]->url}}">  
                                <div class="img-post">
                                    <img class="img-mw-100" src="{{ get_object_image($postSlider[0]->image) }}"
                                    alt="{{$postSlider[0]->name}}">
                                </div>
                                <div class="name text-dark">
                                    <h3 class="font40">
                                        {!!$postSlider[0]->name!!}
                                    </h3>
                                </div>
                                </a>
                            </div>
                        </div>
                        @endif
            </div>
        </div>
       

    </div>
    <div class="list-media_wrapper" id="scroll-list-news">
        <div class="list-media mt-40">
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
                        <a href="{{$post->url}}"><h3 class="name font18">{{str::words($post->name,18)}}</h3></a>
                      
                        <p class="time">{{date_format($post->created_at,"d/m/Y")}}</p>
                        <p class="desc font18">{{str::words($post->description,45)}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            {{ $posts->links('vendor.pagination.custom') }}

        </div>
    </div>
</div>
<script>
    if($('.media__content_left.message').length>0){
        $('.media-tab').css('display','none');
    }
    if ($('.itemdown-show').length > 0) {
    $('.itemdown-show').click(function() {
        $(this).parents('.info-right').find('.downcontent').slideToggle();
        return false;
    });
}
 </script>

