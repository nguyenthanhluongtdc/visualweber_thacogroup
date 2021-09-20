@includeIf("theme.main::views.pages.post.slide")
@includeIf("theme.main::views.breadcrumb")
 @php
$posts = get_posts_by_category($category->id ?? 16, 3);
$postSlider = get_featured_posts(1);
@endphp
<section class="media-message mb-60">
    <div class="media-message-wrapper">
        <div class="container-customize"> 
             <div class="media-message-content mt-40 mb-100">
                        <div class="media__content_left">
                            @if (!empty($postSlider))
                            @foreach ($postSlider as $post) 
                            <div class="news__top" data-aos="fade-down" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                <div class="img-post">
                                    <img class="img-mw-100" src="{{ get_object_image($post->image) }}" alt="">
                                </div>
                                <div class="news-post h-100">
                                    <h3 class=" title font18 text-uppercase">{!!__ ('THÔNG ĐIỆP NĂM') !!}</h3>
                                    <a href="{{$post->url}}">  <h4 class="name font18 text-justify">{{$post->name}}</h4></a>
                                    <span class="time">{{date_format($post->created_at,"d-m-Y")}}</span> 
                                    <p class="description font18  text-justify">{{$post->description}}</p>
                                    <a href="{{$post->url}}" class="read-more">{!!__('Xem thêm')!!}</a>
                                </div>
                            </div>
                            @endforeach
                            @endif
                           
                             <div class="list-media_wrapper" id="scroll-list-news">
                                <div class="list-media mt-60">
                                    @if (!empty($posts))
                                @foreach ($posts as $post) 
                                   <div class="media-item ">
                                       <div class="img-content">
                                           <div class="image" data-aos="fade-right" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                               <div class="post-thumbnail">
                                                   <a href="{{$post->url}}"><img src="{{ get_object_image($post->image) }}" alt=""></a>
                                               </div>
                                           </div>
                                           <div class="content"  data-aos="fade-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                               <a href="{{$post->url}}"><h3 class="name font18 text-justify">{{$post->name}}</h3></a>
                                             
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

                        
                        @includeIf("theme.main::views.pages.post.post-sidebar")
             </div>
        </div>
    </div>
</section>
