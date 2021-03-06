<section class="banner-introduce overflow-x-hidden">
    @if(has_field($page, 'banner_contact'))
    <img class=" h-auto w-100" src="{{ Storage::disk('public')->exists(has_field($page,'banner_contact')) ? get_image_url(has_field($page,'banner_contact')) : RvMedia::getDefaultImage()}}" alt="">
    @endif
</section>
<section class="contact-content">
    <div class="contact-wrapper">
        <div class="contact-title  mt-40 mb-40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
            @if(has_field($page, 'banner_contact'))
            <h1 class="font50 title text-uppercase"> {!! has_field($page,'contact_title') !!}  </h1> 
            @endif 
        </div> 
        <div class="contact-box  mt-60 mb-60" id="support-tab">
            @if(has_field($page, 'repeater_info_block'))
            @foreach(has_field($page, 'repeater_info_block') as $item)
            <div class="contact-box__item info" data-filter=".data-filter-01" data-aos="flip-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                <div class="image">
                    <img src="{{ get_image_url(get_sub_field($item, 'symbol')) }}" alt="">
                </div>
           
                <div class="title">
                    <h3 class=" font28"> {!! has_sub_field($item, 'title') ? has_sub_field($item, 'title') : '' !!}</h3>
                </div>
               
                <div class="content font20"> {!! has_sub_field($item, 'desc') ? has_sub_field($item, 'desc') : '' !!}</div>
                <i class="fas fa-angle-down"></i>
            </div>
            @endforeach
            @endif
        
        </div>
        <div class="office-contact-wrapper mt-60 data-filter-01">
            @if (has_field($page, 'contact_info'))
            @foreach (has_field($page, 'contact_info') as $item)
            <div class="office-tabs">
                <ul class="nav nav-tabs active-tabs">
                    @if (has_sub_field($item, 'info_block'))
                    @foreach (has_sub_field($item, 'info_block') as $key => $item_tab)
                    <li class="font18 office-title {{ $key == 0 ? 'active' : '' }}">
                        <a 
                        href="#contact-{{ $key }}" 
                        data-toggle="tab"
                        >
                        {{ has_sub_field($item_tab, 'name_office') }}
                    </a>  
                    </li>
                    @endforeach
                    @endif
                    {{-- <li class="font18 office-title">
                        <a href="#secondtab" data-toggle="tab">V??n ph??ng THACO CHU LAI</a>
                    </li>
                    <li class="font18 office-title">
                        <a href="#thirdtab" data-toggle="tab">V??n ph??ng H?? N???i</a>
                    </li> --}}
                </ul>

                {{-- <div class="map-location">
                    <iframe src="{{has_field($page,'link_map') ? get_field($page,'link_map'):''}}" width="1920" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div> --}}
                <div class="tab-content  office-content">
                    @if (has_sub_field($item, 'info_block'))
                    @foreach (has_sub_field($item, 'info_block') as $key => $item_tab)
                        <div 
                        class="tab-pane {{ $key == 0 ? 'active show' : '' }}" 
                        id="contact-{{ $key }}"
                        > 
                            <div class="map-location">
                                <iframe src=" {{ has_sub_field($item_tab, 'link_map') }}" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="office-address font20">
                                <i class="fas fa-map-marker-alt location"></i>
                                <p class="address">{!!__ ('?????a ch???') !!} :  {{ has_sub_field($item_tab, 'address') }}</p>
                            </div>
                            <div class="office-phone font20">
                                <i class="fas fa-phone-alt"></i>
                                <p class="phone">{!!__ ('S??T') !!}:  {{ has_sub_field($item_tab, 'phone') }}</p>
                            </div>
                            <div class="office-email font20">
                                <i class="fas fa-envelope"></i>
                                <p class="email">Email:   {{ has_sub_field($item_tab, 'email') }}</p>
                            </div>
                            <div class="office-desc">
                                <p class="desc font20">
                                    {{ has_sub_field($item_tab, 'desc') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        {{-- <div class="tab-pane" id="secondtab">
                            <div class="map-location">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5080290085093!2d106.72027741474892!3d10.772347792324274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fcdd2041771%3A0xa46e9842e044baf4!2sSOFIC%20Tower!5e0!3m2!1svi!2s!4v1634137150175!5m2!1svi!2s"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="office-address font20">
                                <i class="fas fa-map-marker-alt location"></i>
                                <p class="address">?????a ch??? : Th??n 4, X?? Tam Hi???p, Huy???n N??i Th??nh, T???nh Qu???ng Nam</p>
                            </div>
                            <div class="office-phone font20">
                                <i class="fas fa-phone-alt"></i>
                                <p class="phone">S??T: +84-(0)510.3567.161</p>
                            </div>
                            <div class="office-email font20">
                                <i class="fas fa-envelope"></i>
                                <p class="email">Email:vanhoatruyenthong@thaco.com.vn</p>
                            </div>
                            <div class="office-desc">
                                <p class="desc font20">
                                   ????y l?? Khu Kinh t??? m??? Chu Lai - t???nh Qu???ng Nam v?? ?????n nay THACO CHU LAI c?? t???ng di???n t??ch h??n 1.200 ha g???m: KCN C?? kh?? & ?? t??; KCN N??ng - L??m nghi???p; Khu C???ng & h???u c???n C???ng; Khu ???? th??? Chu Lai.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane" id="thirdtab">
                            <div class="map-location">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5080290085093!2d106.72027741474892!3d10.772347792324274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fcdd2041771%3A0xa46e9842e044baf4!2sSOFIC%20Tower!5e0!3m2!1svi!2s!4v1634137150175!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="office-address font20">
                                <i class="fas fa-map-marker-alt location"></i>
                                <p class="address">?????a ch??? : L?? D6, KCN H?? N???i ????i T??, S??i ?????ng, Long Bi??n, H?? N???i</p>
                            </div>
                            <div class="office-phone font20">
                                <i class="fas fa-phone-alt"></i>
                                <p class="phone">S??T: +84-(0)43.3567.161</p>
                            </div>
                            <div class="office-email font20">
                                <i class="fas fa-envelope"></i>
                                <p class="email">Email:vanhoatruyenthong@thaco.com.vn</p>
                            </div>
                            <div class="office-desc">
                                <p class="desc font20">
                                    V??n ph??ng ?????i di???n t???i th??nh ph??? H?? N???i l?? n??i ?????i di???n ??? khu v???c mi???n B???c c???a t???ng c??ng ty ?? t?? Tr?????ng H???i (THACO).
                                </p>
                            </div>
                        </div> --}}
                </div>
            </div>
            @endforeach
            @endif 











            {{-- @if(has_field($page, 'repeater_contact_info'))
            @foreach(has_field($page, 'repeater_contact_info') as $item)
            <div class="office-item mb-100 " data-aos="fade-up" data-aos-duration="700" data-aos-delay="150" class="aos-init aos-animate">
                <div class="row">

                
                <div class="left col-lg-12">
                    <div class="office-name">
                        <h3 class="name font21"> {!! has_sub_field($item, 'title') ? has_sub_field($item, 'title') : '' !!}</h3>
                    </div>
                    <div class="office-image">
                        <img class="" src="{{ Storage::disk('public')->exists(has_sub_field($item,'image')) ? get_image_url(has_sub_field($item,'image')) : RvMedia::getDefaultImage()}}" alt="">
                    </div>
                </div>
                <div class="right font20 col-lg-12">
                    <div class="office-address">
                        <i class="fas fa-map-marker-alt location"></i>
                        <p class="address"> <span> {!!__ ('?????a ch???') !!} : </span>{!! has_sub_field($item, 'address') ? has_sub_field($item, 'address') : '' !!}</p>
                       
                    </div>
                    <div class="office-hotline">
                        <i class="fas fa-phone-alt"></i>
                            <p class="phone"> <span> {!!__ ('S??T') !!}: </span>
                                <a href="tel: {{get_sub_field($item, 'hotline')}}">
                            {!! has_sub_field($item, 'hotline') ? has_sub_field($item, 'hotline') : '' !!} </a></p>
                       
                    </div>
                    <div class="office-email">
                        <i class="fas fa-envelope"></i>
                        
                        <a href="mailto: {{get_sub_field($item, 'mail')}}">
                            <p class="email"> Email: 
                           {!! has_sub_field($item, 'mail') ? has_sub_field($item, 'mail') : '' !!}</p>
                        </a>
                    </div>
                    <div class="desc">
                        {!! has_sub_field($item, 'desc') ? has_sub_field($item, 'desc') : '' !!}
                    </div>
                </div>
            </div>
            </div>
            @endforeach
            @endif --}}
         

        </div>
        <section id="contact-fo" class="contact-fo data-filter-02" >
            <div class="contact-fo-container  mb-60">
                @if(has_field($page, 'title_form_contact'))
                <h2> {!! has_field($page,'title_form_contact') !!} </h2>
                @endif
                {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST']) !!}
                @if(session()->has('success_msg') || session()->has('error_msg') || isset($errors))
                    @if (session()->has('success_msg'))
                        <div class="alert alert-success">
                            <span class="m-b-0">{{__('Send contact successfully')}}</span>
                        </div>
                    @endif 
                    @if (session()->has('error_msg'))
                        <div class="alert alert-danger">
                            <p>{{ session('error_msg') }}</p>
                        </div>
                    @endif
                    @if (isset($errors) && count($errors))
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}</span> <br>
                            @endforeach
                        </div>
                    @endif
                @endif
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="form-group">
                            <input id='contact_name' type="text" class="form-control" name="name" value="{{ old('name') }}" id="contact_name"
                                   placeholder="{!!__ ('H??? v?? t??n / T??n c??ng ty') !!}" required="required">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="contact_email"
                                   placeholder="{!!__ ('Th?? ??i???n t???') !!}" required="required">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="form-group">
                            <select id="contact_address" name="address" class="form-control" required="required">
                                @if (has_field($page, 'send_to_list'))
                                @foreach (get_field($page, 'send_to_list') as $key => $item)
                                <option value="{{ get_sub_field($item, 'send_to_item') }}">{{ get_sub_field($item, 'send_to_item') }}</option>
                                @endforeach

                                @endif
                            </select>
                        </div>
                    </div> 
                    <div class="col-xl-6 col-lg-12">
                        <div class="form-group">
                            <input type="number" class="form-control" name="phone" value="{{ old('phone') }}" id="contact_phone"
                                   placeholder="{!!__ ('S??? ??i???n tho???i')!!}" required="required">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <textarea name="content" id="contact_content" class="form-control" rows="5" placeholder="{!!__ ('N???i dung')!!}" required="required">{{ old('content') }}</textarea>
                        </div>
                    </div>
                  
                    @if (setting('enable_captcha') && is_plugin_active('captcha'))
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="form-group">
                                {!! Captcha::display() !!}
                            </div>
                        </div>
                    @endif
                    <div class="col-xl-12">
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn cyan text">{!!__ ('G???i ngay') !!}</button>
                        </div>
        
                    </div>
                </div>
                {!! Form::close() !!}    
            </div>
        </section>
        
        <div class="chat-online mb-60">
            @if(has_field($page, 'title_chat_online'))
            <h2> {!! has_field($page,'title_form_contact') !!} </h2>
            @endif
        </div>
    </div>
  
</section>
