
<section class="banner-post-detail">
    <img class=" h-auto img-mw-100" src="{{$post->image_banner ? rvMedia::getImageUrl($post->image_banner): Theme::asset()->url('images/introduce/banner-introduce.jpg')  }}" alt="banner">
</section>
<div class="bg-gray">
    <div class="container-customize">
        <ol class="breadcrumb">
            @foreach ($crumbs = Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                @if ($i != (count($crumbs) - 1))
                    <li class="breadcrumb-item">
                        <a href="{{ $crumb['url'] }}" title="{{ $crumb['label'] }}">  {{ $crumb['label'] }}  
                        <meta itemprop="name" content="{{ $crumb['label'] }}" /></a>
                        <meta itemprop="position" content="{{ $i + 1}}" />
                    </li>
                @else
                    <li class="breadcrumb-item active">{{__('Bài viết')}}
                        <meta itemprop="name" content="{{ $crumb['label'] }}" />
                        <meta itemprop="position" content="{{ $i + 1}}" /></li>
                @endif
            @endforeach  
        </ol>
    </div>
</div>
</div>

<div class="post-detail-wrapper">
    <div class="post-detail-content">
        <div class="poster-left order-1">
            @if(theme_option('poster_left'))
            <img src="{{rvMedia::getImageUrl(theme_option('poster_left'))}}" alt="poster">
            @endif
        </div>
        <div class="poster-right order-3">
            @if(theme_option('poster_right'))
            <img src="{{rvMedia::getImageUrl(theme_option('poster_right'))}}" alt="poster">
            @endif
        </div>
        <div class="content-middle order-2">
            <div class="content-main">
                <div id="print-area-1" class="print-area" >
                <div class="post-name">
                    <h1 class=" name font-myria-bold"> {!! $post->name !!}
                    </h1>

                </div>
                <div class="post-time-share">
                    <div class="left">
                        <span class="author">{{ $post->author->name }} </span>
                        <span class="">{{date_format($post->created_at,"d/m/Y")}} </span>
                        
                    </div>
                    <div class="right"> 
  

                         <a href="https://www.facebook.com/sharer/sharer.php?u={{ $post->url }}" target="_blank">
                           
                            <img src="{{Theme::asset()->url('images/media/face.png')}}" alt="icon-fb">
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url={{ $post->url }}&title={{ $post->name }}">
                            <img src="{{Theme::asset()->url('images/media/linkedin.png')}}" alt="icon-linkdin">
                        </a>
                        {{-- <button class="print-button" onclick="window.print();">
                            <i class="fas fa-print text-dark"></i>
                       </button> --}}
                       <a href="javascript:printDiv('print-area-1');" class="print-button">
                        <i class="fas fa-print text-dark"></i>
                       </a>
                    </div>

                </div>
               
                <div class="post-content">
                    <div class="text-content" data-fancybox>
                       
                            {!! $post->content !!}
                    </div>
                </div>
                <textarea id="printing-css" style="display:none;"></textarea>
                <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
                </div>
                <div class="file">
                    <ul class="list-file">
                       
                        <li>
                            <a href="images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf" target="_blank">
                               
                                <i class="fal fa-file-invoice"></i>
                                <p class="text">
                                    Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf
                                </p>
                                <i class="fal fa-arrow-to-bottom"></i>
                            </a>
                        </li>
                        <li>
                            <a href="images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf" target="_blank">
                               
                                <i class="fal fa-file-invoice"></i>
                                <p class="text">
                                    Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf
                                </p>
                                <i class="fal fa-arrow-to-bottom"></i>
                            </a>
                        </li> 
                        <li>
                            <a href="images/file/Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf" target="_blank">
                               
                                <i class="fal fa-file-invoice"></i>
                                <p class="text">
                                    Thông điệp năm 2018 của Chủ tịch HĐQT THACO Trần Bá Dương.pdf
                                </p>
                                <i class="fal fa-arrow-to-bottom"></i>
                            </a>
                        </li>  
                      
                    </ul>
                </div>
                <div class="post-tag">
                    <h4 class="title">{!!__('Từ khóa:')!!}</h4>
                    @foreach ($post->tags as $tag)
                    <div class="tag-item active">
                        <a href="">{{$tag->name}}</a>
                    </div>
                    @endforeach
                   
                </div>
            </div>
 
            @php $relatedPosts = get_related_posts($post->id, 7); @endphp
            @if ($relatedPosts->count())
            <div class="post-related mt-40 mb-60">
                <div class="post-related__title" >
                    <img src="{{ Theme::asset()->url('images/media/icon-title.png') }}" alt="">
                    <h2 class="font30 big-title">{!! __('CÁC BÀI VIẾT LIÊN QUAN') !!}</h2>
                </div>
                <div class="post-related__list mt-40 mb-40">
                    <div class="swiper-container post-slide-relate">
                       
                        <div class="swiper-wrapper">
                            @foreach ($relatedPosts as $relatedItem)
                            <div class="swiper-slide post_relate_content">
                                <a href="{{ $relatedItem->url }}" class="text-dark">
                                    <div class="post-thumbnail">
                                        <img src="{{ get_object_image( $relatedItem->image) }}" alt="">
                                    </div>
                                    <div class="post-content-bottom">
                                        <h4 class="name font20 text-uppercase">{{str::words( $relatedItem->name ,12)}}</h4>
                                            <span class="time text-dark">{{ date_format($relatedItem->created_at, 'd/m/Y') }}</span>
                                            <p class="desc font18">
                                                {{str::words($relatedItem->description,20)}}
                                            </p>
                                    </div>
                                </a>
                                
                            </div>
                            
                            @endforeach
                        </div>
                        
                    </div>
                   
                </div>
                {{-- <ul class="list-post-related">
                    @foreach ($relatedPosts as $relatedItem)
                    <li class="font18">
                        <a href="{{ $relatedItem->url }}">
                            {!! $relatedItem->name !!}
                        </a>
                        <span class="time">{{date_format($post->created_at,"d/m/Y")}}</span>
                    </li>
                    @endforeach
                   data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                    class="aos-init aos-animate"
                </ul> --}}

            </div>
            @endif
        </div>
    </div>
</div>



<script>
    function printDiv(elementId) {
    var a = document.getElementById("printing-css").value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML =
        "<style>" + a + "</style>" + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
    }

</script>