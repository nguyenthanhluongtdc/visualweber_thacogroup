@includeIf("theme.main::views.pages.post.slide", ['page' => $category])
@includeIf("theme.main::views.breadcrumb")
@php
$posts = get_posts_by_category($category->id ?? 16, 6);
$postSlider = get_posts_by_category($category->id ?? 16, 6);
@endphp
<section>

       <div class="media_content-wrapper mb-100">
           <div class="container-customize">
               <div class="media-content"> 
                   <div class="content-left">
                               <div class="media__content_left">
                                   <div class="news__content" data-aos="zoom-in-up" data-aos-duration="300" data-aos-delay="50" class="aos-init aos-animate">
                                       <div class="swiper-container new-post-slide " style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
                                           <div class="swiper-wrapper">
                                            @if (!empty($posts))
                                            @foreach ($posts as $post) 
                                               <div class="swiper-slide">
                                                   <div class="news__top">
                                                               <div class="img-post">
                                                                   <img class="img-mw-100" src="{{ get_object_image($post->image) }}" alt="">
                                                               </div>
                                                               <div class="news-post h-100">
                                                                 
                                                                   <h3 class=" title font18">BẢN TIN NỘI BỘ</h3>
                                                                   <a href="{{$post->url}}">  <h4 class="name font18 ">{{$post->name}}</h4></a>
                                                                   <span class="time"> {{date_format($post->created_at,"d-m-Y")}}</span>
                                                                   <p class="description font18  text-justify">{{$post->description}}</p>
                                                                   <a href="{{$post->url}}" class="read-more">Xem thêm</a>
                                                               </div>
                                                   </div>
                                               </div>
                                               @endforeach
                                               @endif
                                           </div>
                                           
                                           <div class="swiper-pagination"></div>
                                       </div>    
                                       <div class="post-slider">
                                           <div class="swiper-container post-slide-bottom">
                                               <div class="swiper-wrapper">
                                                @if (!empty($postSlider))
                                                @foreach ($postSlider as $post) 
                                                        <div class="swiper-slide d-flex justify-content-center">             
                                                           <div class="post_content_bottom h-100">
                                                               <a class="post-wrapper" href=" {{$post->url}}">
                                                                   <div class="post-thumbnail">
                                                                       <img src="{{ get_object_image($post->image) }}" alt="">
                                                                   </div>
                                                                  
                                                                   <h4 class="post_name font18">{{$post->name}}</h4>
                                                                   <p class="post_description font18">{{$post->description}}
                                                                   </p>
                                                                   <span class="time">{{date_format($post->created_at,"d-m-Y")}}</span>
                                                               </a>   
                                                           </div> 
                                                        </div>
                                                @endforeach
                                                @endif
                                                 
                                               </div>
                                               <div class="swiper-button-next drop-shadow-button"> <img src="{{ Theme::asset()->url('images/home/Icon-right.png') }}" alt="">  </div>
                                               <div class="swiper-button-prev drop-shadow-button"> <img src="{{ Theme::asset()->url('images/home/icon-left.png') }}" alt=""> </div>
                                               
                                   
                                         </div>
                                          
                                       </div>
                                    </div>
                               </div>
                        <div class="filter-search-media mt-40">
                                    <form action="" class="form-search">
                                        <div class="search">
                                            <input type="text" class=" form-control form-control-sm " placeholder="Nhập nội dung cần tìm" value="" name="q">
                                            <button class="btn btn-secondary" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                        <select class="select-year font18" id="">
                                            <option value="">2019</option>
                                            <option value="">2018</option>
                                            <option value="">2017</option>
                                            <option value="">2016</option>
                                        </select>
                                        <select class="select-by-field font18" id="">
                                            <option value="">Ô tô - Cơ Khí</option>
                                            <option value="">Nông nghiệp</option>
                                            <option value="">Thương mại - dịch vụ</option>
                                            <option value="">Đầu tư xây dựng</option>
                                            <option value="">Logistics</option>
                                        </select>
                                    </form>
                            
                        </div>
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
                                               <a href="{{$post->url}}"><h3 class="name font18">{{$post->name}}</h3></a>
                                             
                                               <p class="time">{{date_format($post->created_at,"d-m-Y")}}</p>
                                               <p class="desc font18">{{$post->description}}</p>
                                           </div>
                                       </div>
                                   </div>
                                   @endforeach
                                   @endif
                               
                                   
               
                               </div>
                               {{ $posts->links('vendor.pagination.custom') }}
                           </div>
                      
                   </div>
                   @includeIf("theme.main::views.pages.post.post-sidebar")
               </div>
             
           </div>
       </div>
   </section>

   