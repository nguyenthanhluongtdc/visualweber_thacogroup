
<section class="banner-post-detail">
    <img class=" h-auto img-mw-100" src="{{rvMedia::getImageUrl($post->image_banner)}}" alt="banner">
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
                <div class="post-name">
                    <h1 class=" name font-myria-bold"> {{ $post->name }}
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
                        <button class="print-button" onclick="window.print();">
                            <i class="fas fa-print text-dark"></i>
                       </button>
                    </div>

                </div>
                <div class="post-content">
                    <div class="text-content">
                            {!! $post->content !!}
                    </div>
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
                <div class="post-related__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                    class="aos-init aos-animate">
                    <img src="{{ Theme::asset()->url('images/media/icon-title.png') }}" alt="">
                    <h2 class="font30 big-title">{!! __('CÁC BÀI VIẾT LIÊN QUAN') !!}</h2>
                </div>
                <ul class="list-post-related">
                    @foreach ($relatedPosts as $relatedItem)
                    <li class="font18">
                        <a href="{{ $relatedItem->url }}">
                            {{ $relatedItem->name }}
                        </a>
                        <span class="time">{{date_format($post->created_at,"d/m/Y")}}</span>
                    </li>
                    @endforeach
                   
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>

