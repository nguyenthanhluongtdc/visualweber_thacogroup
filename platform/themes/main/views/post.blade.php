
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
                <textarea id="printing-css" style="display:none;">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 Arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}h1,h2,h3,h4,h5,h6{font-weight:bold;line-height:normal;margin:1.5em 0 0}h1{font-size:200%}h2{font-size:180%}h3{font-size:160%}h4{font-size:140%}h5{font-size:120%}h6{font-size:100%}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;text-align:left;vertical-align:top}th{font-weight:bold}table[border="1"] caption{border:none;font-style:italic}.no-print{display:none}</textarea>
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
                                <a href=""{{ $relatedItem->url }}" class="text-dark">
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