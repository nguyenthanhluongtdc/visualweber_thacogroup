<div class="post-sidebar-content">
    <div class="media__content_right">
        <div class="list-media-menu" data-aos="fade-up" data-aos-duration="100" data-aos-delay="50" class="aos-init aos-animate">
            <h3 class="font28 font-myria-bold">THÔNG TIN KHÁC</h3>
            <a href="/thong-cao-bao-chi" class="item_link list-group-item font18 font-myria-bold active">Thông cáo báo chí</a>
            <a href="/con-nguoi#scroll-list-news" class="item_link list-group-item  font18 font-myria-bold">Con người</a>
            <a href="/ban-tin" class="item_link list-group-item  font18 font-myria-bold">Bản tin</a>
            <a href="/su-kien#scroll-list-news" class="item_link list-group-item  font18 font-myria-bold">Sự kiện</a>
            <a href="/thong-diep#scroll-list-news" class="item_link list-group-item  font18 font-myria-bold">Thông điệp</a>
            <a href="/thu-vien-anh-va-video" class="item_link list-group-item  font18 font-myria-bold">Media</a>
        </div>
        <div class="list-post-new">
            <div class="wrap">
                <h2 class="font-mi-bold font30" data-aos="fade-left" data-aos-duration="400" data-aos-delay="50" class="aos-init aos-animate">tin tức mới</h2>
                <ul class="" data-aos="flip-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                    @php
                   $postsLatest = get_recent_posts(3);
                    @endphp
                    @if (!empty( $postsLatest))
                    @foreach ( $postsLatest as $post)
                    <div class="post-new-item">
                        <div class="post-thumbnail-wrap">
                            <div class="post-thumbnail">
                                <a href="{{$post->url}}"><img src="{{ Storage::disk('public')->exists($post->image) ? get_object_image($post->image, 'post-large') : RvMedia::getDefaultImage()}}" alt="{{$post->name}}" alt=""></a>
                            </div>
                        </div>
                        <div class="title font18">
                            <a href="{{$post->url}}">{{$post->name}}</a>
                            <p class="time">{{date_format($post->created_at,"d-m-Y")}}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    
                </ul>
                
            </div>
        </div>
    </div>
</div>