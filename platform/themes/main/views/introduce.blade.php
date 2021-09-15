<section class="banner-introduce">
    <img class="h-100vh w-100"
        src="{{ get_field($page, 'about_us_banner') ? get_image_url(get_field($page, 'about_us_banner')) : Theme::asset()->url('images/introduce/banner-introduce.jpg') }}" alt="banner">
</section>
<div class="breadcrum-intro">
    @includeIf("theme.main::views.breadcrumb")
</div>

<section class="about-us mt-40">

        <div class="container-customize">
            <div class="about-us__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                <img src="{{ Theme::asset()->url('images/introduce/arrow.png') }}" alt="icon">
                <h1  class="font50 big-title">{{has_field($page, 'about_us_title')}}</h1>
            </div>
            <div class="about-us__content mt-40 text-justify" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                {!!has_field($page, 'about_us_content')!!}
            </div>
        </div>
        <div class="container-customize-mobile ">
            <div class="future-goal-banner mt-40" style="background-image:url('{{ get_field($page, 'vision_block_background') ? get_image_url(get_field($page, 'vision_block_background')) : Theme::asset()->url('images/introduce/tam-nhin-chien-luoc.jpg') }}')">
                <div class="future-goal-wrapper">
                    <div class="row mr-0 ml-0"> 
                        
                        @if(has_field($page, 'vision_block'))
                            @forelse (has_field($page, 'vision_block') as $key => $item)
                            <div class="col-sm-4 pl-0 pr-0">
                                <div class="future-goal p-lr-90" data-aos="fade-up" data-aos-duration="700" data-aos-delay="{{50 + $key*100}}" class="aos-init aos-animate">
                                    <img src="{{ get_image_url(has_sub_field($item, 'logo')) }}" alt="{{has_sub_field($item, 'title')}}">
                                    <h3 class="title font40">{{has_sub_field($item, 'title')}}</h3>
                                    <div class="desc font18">
                                        {!!has_sub_field($item, 'description')!!}
                                    </div>
                                </div>
                            </div>
                                
                            @empty
                                ...{{__('Đang cập nhật')}}
                            @endforelse
                        @endif
    
                    </div>
                </div>
              
            </div>
        </div>
        
        <div class="container-customize">
            <div class="field-activity-intro-wrapper">
                <div class="desc-field pt-40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                    <p class="desc-cotent font24 text-justify">
                        {!!has_field($page, 'about_us_field_description')!!}
                     
                    </p>
                </div>
                {!! do_shortcode('[field-activity][/field-activity]') !!}
            </div>
        
       
            
                <div class="leader-of-us-wrapper mt-40">
                    <div class="leader-of-us__title mt-40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                        <img src="{{ Theme::asset()->url('images/introduce/arrow.png') }}" alt="">
                        <h2 class="font50 big-title">   {!!has_field($page, 'leadership_title')!!}</h2>
                    </div>

                    @if(has_field($page, 'council'))
                        @foreach (has_field($page, 'council') as $key => $item_council)
                    
                            <div class="title-admin-top ">
                                <h3 class="title-admin">{{has_sub_field($item_council, 'council_name')}}</h3>
                            </div>
                            <div class="admin-content {{$key == 0 ? 'top' : 'bottom'}}" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                @foreach (has_sub_field($item_council, 'council_member') as $item_member)
                                {{-- @dd(Str::slug({{has_sub_field($item_member, 'name')}})) --}}
                                    <div class="item-member">

                                        <div class="admin-item" data-target="#{{Str::slug(has_sub_field($item_member, 'name'))}}" data-toggle="modal">
                                            <img src="{{ get_image_url(has_sub_field($item_member, 'image')) }}" alt=" {!! has_sub_field($item_member, 'name')!!}">
                                        
                                            <div class="name">
                                            
                                                {!! has_sub_field($item_member, 'name')!!}
                                            </div>
                                            <div class="postion">
                                                {!! has_sub_field($item_member, 'position')!!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    @endif
                </div>
               
                <div class="achievement-wrapper mt-40 mb-60">
                    <div class="achievement-tab-title">
                            <div class="achievement__title mt-40 " data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                <img src="{{ Theme::asset()->url('images/introduce/arrow.png') }}" alt="">
                                <h2 class="font50 big-title"> {{has_field($page, 'title_achivement')}}</h2>
                            </div>
                            <div class="achievement__tabs" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                
                                <ul class=" nav nav-tabs mb-0" id="tab-achievement" role="tablist">
                                    @if(has_field($page, 'achivement'))
                                        @foreach (has_field($page, 'achivement') as $key =>$item_tab)
                                        <li class="__tabs__item " role="achievement">
                                            <a class="__tabs__link nav-link {{ $key==0? 'active': '' }}" id="achievement-company-{{$key}}" data-toggle="tab" role="tab" aria-controls="achievement-{{$key}}" aria-selected="true" href="#achievement-{{$key}}" title="{{has_field($page, 'title_tab')}}">
                                                {{has_sub_field($item_tab, 'title_tab')}}
                                            </a>
                                        </li>
                                        @endforeach
                                    @endif
                                </ul>
                            
                            </div>
                      
                        
                    </div>
                    <div class="achievement-tabs-mobile" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                
                        <ul class=" nav nav-tabs mb-0" id="tab-achievement" role="tablist">
                            @if(has_field($page, 'achivement'))
                                @foreach (has_field($page, 'achivement') as $key =>$item_tab)
                                <li class="__tabs__item " role="achievement">
                                    <a class="__tabs__link nav-link {{ $key==0? 'active': '' }}" id="achievement-company-{{$key}}" data-toggle="tab" role="tab" aria-controls="achievement-{{$key}}" aria-selected="true" href="#achievement-{{$key}}" title="{{has_field($page, 'title_tab')}}">
                                        {{has_sub_field($item_tab, 'title_tab')}}
                                    </a>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        @if(has_field($page, 'achivement'))
                            @foreach (has_field($page, 'achivement') as $key =>$item_tab_content)
                            <div class="tab-pane fade {{ $key==0? 'active show': '' }}" id="achievement-{{$key}}" role="tabpanel" aria-labelledby="field-1-tab">
                                    <div class="content-tab" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                                        <div class="content-title font18 mt-40 text-justify">
                                            {!!has_sub_field($item_tab_content, 'block_desc')!!}
                                        </div>
                                        <div class="bottom">
                                            @foreach (has_sub_field($item_tab_content, 'achivement_year') as $key2 =>$item_achivement_year)
                                            <div class="bottom-content" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate" >
                                                <div class="img-content">
                                                   
                                                    <img src="{{ get_image_url(has_sub_field($item_achivement_year, 'image')) }}" alt="{{has_sub_field($item_achivement_year, 'year')}}">
                                                    <div class="year font24">
                                                        {{has_sub_field($item_achivement_year, 'year')}}
                                                    </div>
                                                </div>
                                                <div class="desc font18">
                                                    {!!has_sub_field($item_achivement_year, 'achivement_name')!!}
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>    
    </div>

    
    <div class="develop-wrapper">
        <div class="develop__title pb-40 container-customize" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
            <img class="img-blue" src="{{ Theme::asset()->url('images/introduce/arrow.png') }}"  alt="icon">
            <img class="img-white" src="{{ Theme::asset()->url('images/introduce/icon-arrow-white.png') }}"  alt="icon" style="display:none">
            <h2 class="font50 big-title"> {!!has_field($page, 'title_develop')!!}</h2>
        </div>
            <div class="develop-banner lazyloaded " style="background-image:url('{{ get_field($page, 'bg_develop') ? get_image_url(get_field($page, 'bg_develop')) : Theme::asset()->url('images/introduce/1.jpg') }}')">
                <div class="develop-content-wrapper">
                    <div class="develop-content__slider">
                        <div class="row">
                            <div class="col-md-3 col-12">
                                <div class="cycle-list-wrap">
                                    <ul class="slider slider-nav thumb-year">
                                        @if(has_field($page,'content_slide'))
                                            @foreach(has_field($page,'content_slide') as $item_develop)
                                            <li class="font30 item-slider">
                                            {{has_sub_field($item_develop,'year')}}
                                            </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                    
                                </div>
                            </div>
                            <div class="col-md-9 col-12">
                                <div class="thumb-wrapper">
                                    <div class="slider slider-for">
                                        @if(has_field($page,'content_slide'))
                                        @foreach(has_field($page,'content_slide') as $item_develop_content)
                                            <div class="thumbnail-image mCustomScrollbar" data-mcs-theme="dark" >
                                                <div class="image-slider">
                                                    
                                                    <img src="{{ get_sub_field($item_develop_content, 'image') ? get_image_url(get_sub_field($item_develop_content, 'image')) :'' }}" alt="{{has_sub_field($item_develop_content,'title')}}" />
                                                </div>
                                                    <div class="content-slider">
                                                        <h3 class="title font30">{{has_sub_field($item_develop_content,'title')}}</h3>
                                                        <div class="desc__wrapper">
                                                            <div class="desc font18 text-justify  ">
                                                                {!!has_sub_field($item_develop_content,'content')!!}
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="carousel-controls transparent-controls">
                            <button class="play active"><img src="{{ Theme::asset()->url('images/introduce/play-button-1.png')}}" alt="icon"></button>
                            <button class="pause"><img src="{{ Theme::asset()->url('images/introduce/pause-1.png')}}" alt="icon"></button>
                        </div>
                    </div>
                </div>
            </div>


    </div>
    
</section>
@if(has_field($page, 'council'))
    @foreach (has_field($page, 'council') as $key => $item_council_2)
            @foreach (has_sub_field($item_council_2, 'council_member') as $item_member)
            <div class="modal fade modal_admin" id="{{Str::slug(has_sub_field($item_member, 'name'))}}" tabindex="-1" role="dialog" aria-labelledby="info_admin_modallLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body mCustomScrollbar p-0" data-mcs-theme="dark">
                            <div class="row mr-md-0">
                                <div class="col-md-4 p-0 col-12 col-right pl-md-4">
                                    <img class="w-100" src="{{ get_image_url(has_sub_field($item_member, 'image')) }}" alt="{!! has_sub_field($item_member, 'name')!!}">
                                
                                </div>
                                <div class="col-md-8">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i class="fal fa-times"></i>
                                        </button>
                                    
                                    <div class="info-admin">
                                        {!! has_sub_field($item_member, 'info_work_detail')!!}
                                    </div>
                                        
                                </div>
                            </div>
                        
                            <div class="work-progress">
                                <h3 class="title font20">{!!__ ('QUÁ TRÌNH LÀM VIỆC TẠI THACO') !!}</h3>
                                <div class="work-progress-table">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            
                                            <th scope="col">{!!__('Vị trí')!!}</th>
                                            <th scope="col">{!!__('Tổ chức')!!}</th>
                                            <th scope="col">{!!__('Thời gian bổ nhiệm')!!}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (has_sub_field($item_member, 'works_for') as $key  =>  $item_work)
                                            <tr>
                                            <td> {{ has_sub_field($item_work, 'position')}}</td>
                                            <td>{!! has_sub_field($item_work, 'organization')!!}	</td>
                                            <td>{{has_sub_field($item_work, 'time_start')}}</td> 
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    @endforeach
@endif

