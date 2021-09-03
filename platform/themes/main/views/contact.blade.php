<section class="banner-introduce">
    @if(has_field($page, 'banner_contact'))
    <img class=" h-45vw img-mw-100" src="{{ Storage::disk('public')->exists(has_field($page,'banner_contact')) ? get_image_url(has_field($page,'banner_contact')) : RvMedia::getDefaultImage()}}" alt="">
    @endif
</section>
<section class="contact-content">
    <div class="contact-wrapper">
        <div class="contact-title  mt-60 mb-60" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
            @if(has_field($page, 'banner_contact'))
            <h1 class="font40 title text-uppercase"> {!! has_field($page,'contact_title') !!}  </h1> 
            @endif
        </div>
        <div class="contact-box  mt-60 mb-60" id="support-tab">
            @if(has_field($page, 'repeater_info_block'))
            @foreach(has_field($page, 'repeater_info_block') as $item)
            <div class="contact-box__item info" data-filter=".data-filter-01" data-aos="flip-up" data-aos-duration="700" data-aos-delay="50" class="aos-init aos-animate">
                <div class="image">
                    <img src="{{ get_image_url(get_sub_field($item, 'symbol')) }}" alt="">
                </div>
           
                <h3 class="title font28"> {!! has_sub_field($item, 'title') ? has_sub_field($item, 'title') : '' !!}</h3>
                <div class="content font20"> {!! has_sub_field($item, 'desc') ? has_sub_field($item, 'desc') : '' !!}</div>
                <i class="fas fa-angle-down"></i>
            </div>
            @endforeach
            @endif
            {{-- <div class="contact-box__item email" data-aos="flip-up" data-filter=".data-filter-02" data-aos-duration="700" data-aos-delay="200" class="aos-init aos-animate">
                <div class="image">
                    <img src="{{ Theme::asset()->url('images/contact/mail.png') }}" alt="">
                </div>
           
                <h3 class="title font28">Email cho chúng tôi</h3>
                <div class="content font20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </div>
                <i class="fas fa-angle-down"></i>
            </div>
            <div class="contact-box__item" data-aos="flip-up" data-aos-duration="700" data-aos-delay="500" class="aos-init aos-animate">
                <div class="image">
                    <img src="{{ Theme::asset()->url('images/contact/chat.png') }}" alt="">
                </div>
           
                <h3 class="title font28">Hỗ trợ trực tuyến</h3>
                <div class="content font20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, </div>
                <i class="fas fa-angle-down"></i>
            </div> --}}
        </div>
        <div class="office-contact-wrapper mt-100 data-filter-01">
            
            @if(has_field($page, 'repeater_contact_info'))
            @foreach(has_field($page, 'repeater_contact_info') as $item)
            <div class="office-item mb-100" data-aos="fade-up" data-aos-duration="700" data-aos-delay="150" class="aos-init aos-animate">
                <div class="left">
                    <div class="office-name">
                        <h3 class="name font21"> {!! has_sub_field($item, 'title') ? has_sub_field($item, 'title') : '' !!}</h3>
                    </div>
                    <div class="office-image">
                        <img class="" src="{{ Storage::disk('public')->exists(has_sub_field($item,'image')) ? get_image_url(has_sub_field($item,'image')) : RvMedia::getDefaultImage()}}" alt="">
                    </div>
                </div>
                <div class="right font20">
                    <div class="office-address">
                        <i class="fas fa-map-marker-alt"></i>
                        <p class="address"> Địa chỉ : {!! has_sub_field($item, 'address') ? has_sub_field($item, 'address') : '' !!}</p>
                       
                    </div>
                    <div class="office-hotline">
                        <i class="fas fa-phone-alt"></i>
                            <p class="phone">SĐT: 
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
            @endforeach
            @endif
            {{-- <div class="office-item mb-100" data-aos="fade-up" data-aos-duration="700" data-aos-delay="150" class="aos-init aos-animate">
                <div class="left">
                    <div class="office-name">
                        <h3 class="name font21">VP HÀ NỘI</h3>
                    </div>
                    <div class="office-image">
                        <img class="" src="{{ Theme::asset()->url('images/contact/office.jpg') }}" alt="">
                    </div>
                </div>
                <div class="right font20">
                    <div class="office-address">
                        <i class="fas fa-map-marker-alt"></i>
                        <p class="address"> Địa chỉ : Lô D6, KCN Hà Nội Đài Tư, 386 Nguyễn Văn Linh, Sài Đồng, Long Biên, Hà Nội</p>
                       
                    </div>
                    <div class="office-hotline">
                        <i class="fas fa-phone-alt"></i>
                        <p class="phone">SDT: 
                            
                            <a href="">+84-(0)43.8758914</a></p>
                    </div>
                    <div class="office-email">
                        <i class="fas fa-envelope"></i>
                        <p class="email"> Email: 
                            <a href=""> Loreissum@gmail.com</a></p>
                    </div>
                    <div class="desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                    </div>
                </div>
            </div>
            <div class="office-item mb-100" data-aos="fade-up" data-aos-duration="700" data-aos-delay="150" class="aos-init aos-animate">
                <div class="left">
                    <div class="office-name">
                        <h3 class="name font21">VP CHU LAI</h3>
                    </div>
                    <div class="office-image">
                        <img class="" src="{{ Theme::asset()->url('images/contact/office.jpg') }}" alt="">
                    </div>
                </div>
                <div class="right font20">
                    <div class="office-address">
                        <i class="fas fa-map-marker-alt"></i>
                        <p class="address"> Địa chỉ : Thôn 4, Xã Tam Hiệp, Huyện Núi thành, Tỉnh Quảng Nam</p>
                       
                    </div>
                    <div class="office-hotline">
                        <i class="fas fa-phone-alt"></i>
                        <p class="phone">SĐT: 
                            <a href="">+84-02353.567.160 - 02353.567.161</a></p>
                    </div>
                    <div class="office-email">
                        <i class="fas fa-envelope"></i>
                        <p class="email"> Email: 
                            <a href="">chulai-truonghai@dng.vnn.vn</a></p>
                    </div>
                    <div class="desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                    </div>
                </div>
            </div> --}}

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
                    <div class="col-md-6">
                        <div class="form-group">
                            <input id='contact_name' type="text" class="form-control" name="name" value="{{ old('name') }}" id="contact_name"
                                   placeholder="Họ và tên / Tên công ty" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="contact_email"
                                   placeholder="Thư điện tử" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" class="form-control" name="phone" value="{{ old('phone') }}" id="contact_phone"
                                   placeholder="Số điện thoại" required="required">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="content" id="contact_content" class="form-control" rows="5" placeholder="Nội dung" required="required">{{ old('content') }}</textarea>
                        </div>
                    </div>
                    @if (setting('enable_captcha') && is_plugin_active('captcha'))
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="form-group">
                                {!! Captcha::display() !!}
                            </div>
                        </div>
                    @endif
                    <div class="col-md-12">
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn cyan text">Gửi ngay</button>
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

