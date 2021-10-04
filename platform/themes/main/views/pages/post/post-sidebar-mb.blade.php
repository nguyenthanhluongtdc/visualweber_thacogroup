<div class="post-sidebar-content mb">
    <div class="media__content_right">
        {!!
            Menu::renderMenuLocation('sidebar-media', [
                'options' => [],
                'theme' => true,
                'view' => 'media-menu',
            ])
        !!}

        <div class="list-post-new">
            <div class="wrap">
                <h2 class="font-mi-bold font30" data-aos="fade-left" data-aos-duration="400" data-aos-delay="50" class="aos-init aos-animate">{!! __('Latest News') !!}</h2>
                <ul class="" data-aos="flip-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                    @php
                 $postsLatest = get_latest_posts_noncategory([
                    theme_option('default_category_news'),
                    theme_option('default_category_newspaper')],3)
                    @endphp 
                    @if (!empty( $postsLatest))
                    @foreach ( $postsLatest as $post) 
                    <div class="post-new-item">
                        <div class="post-thumbnail-wrap">
                            <div class="post-thumbnail">
                                <a href="{{$post->url}}"><img src="{{ Storage::disk('public')->exists($post->image) ? get_object_image($post->image, 'post-large') : RvMedia::getDefaultImage()}}" alt="{{$post->name}}" alt=""></a>
                            </div>
                        </div>
                        <div class="title font18 ">
                            <a href="{{$post->url}}">{{$post->name}}</a>
                            <p class="time">{{date_format($post->created_at,"d/m/Y")}}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    
                </ul>
                
            </div>
        </div>
    </div>
</div>