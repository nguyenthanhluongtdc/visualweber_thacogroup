
@php
    $check = false; 

@endphp
<div class="relationship-sibar">
    <div class="relationship__content">
        <div class="list-relationship-menu" data-aos="flip-right" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
            <h3 class="font28 font-myria-bold"> {!! __('QUAN HỆ CỔ ĐÔNG') !!} </h3>
                @foreach ($menu_nodes as $key => $row)
                    <a href="javascript:;" class="item_link_shareholder list-group-item font18 font-myria-bold {{$options==$row->reference_id?'active':''}}" data-category={{$row->reference_id}}> {{$row->title}} </a>
                    @php 
                        if( $options==$row->reference_id) {
                            $check = true;
                        } 
                    @endphp
                @endforeach
        </div>
    </div>
    <div class="list-post-new">
        <div class="wrap">
            <h2 class="font-mi-bold font30" data-aos="fade-left" data-aos-duration="400" data-aos-delay="50" class="aos-init aos-animate">{!! __('Latest News') !!}</h2>
            <ul class="" data-aos="flip-left" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                @php
                // dd($category->id);
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
                    <div class="title font18">
                        <a href="{{$post->url}}">{!!str::words($post->name,16)!!}</a>
                        <p class="time">{{date_format($post->created_at,"d/m/Y")}}</p>
                    </div>
                </div>
                @endforeach
                @endif
                
            </ul>
            
        </div>
    </div>
</div>
