@php
use Platform\Page\Models\Page;
use Platform\Page\Repositories\Interfaces\PageInterface;
$homepageId = BaseHelper::getHomepageId();
$page = app(PageInterface::class)->findById($homepageId);   
@endphp
<div class="recruitment-wrapper">
    <div class="recruitment-banner " style="background-image:url({{ has_field($page , 'image_bg') ? get_object_image(get_field($page , 'image_bg')) :''}})">
        <div class="swiper-content">    
            <div class="swiper-content__desc">
                <h3 class="title font28">{{ has_field($page , 'title')}}</h3>
                <p class="description font24 text-justify">
                    {{ has_field($page , 'desc_short') ? get_field($page , 'desc_short') :''}}
                </p>
                <a href="{{ has_field($page , 'link_apply') ? get_field($page , 'link_apply') :''}}" class="btn-apply font24" title="{{has_field($page , 'link_apply')}}">{!!__ ('Ứng tuyển ngay') !!}</a>
            </div>
            <div class="bottom_slider_wrapper"> 
                <div class="title_label">
                    <h3 class="title font28 font-myria-bold">{!!__ ('Vị trí')!!}</h3>
                </div>
               
                <div class="swiper-container recruitment-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                        <div class="swiper-wrapper">
                            @if(has_field($page , 'position'))
                                @foreach (get_field($page , 'position') as $position)
                                <div class="swiper-slide" >
                                    <div class="swiper-content-bottom">
                                        <a href="{{ has_sub_field($position , 'link') ? get_sub_field($position , 'link') :''}}" target="_self" title="{{ has_sub_field($position , 'link') ? get_sub_field($position , 'link') :''}}">
                                            <p class="postion-apply font28"> {{ has_sub_field($position , 'position_name') ? get_sub_field($position , 'position_name') :''}}
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            @endif

                        </div>
                        <div class="swiper-pagination"></div>
                </div>
            </div>
           
        </div> 
    </div>
</div>
