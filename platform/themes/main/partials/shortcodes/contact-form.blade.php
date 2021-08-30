<section id="contact-fo" class="contact-fo data-filter-02" >
    <div class="contact-fo-container  mb-60">
        <h2>Gửi email cho chúng tôi</h2>
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
                           placeholder="Họ và tên / Tên công ty">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="contact_email"
                           placeholder="Thư điện tử">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <select id="contact_address" name="address" class="form-control">
                        <option value="">Phòng kinh doanh</option>
                        <option value="">Phòng nhân sự</option>
                        <option value=" ">Phòng truyền thông</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="number" class="form-control" name="phone" value="{{ old('phone') }}" id="contact_phone"
                           placeholder="Số điện thoại">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea name="content" id="contact_content" class="form-control" rows="5" placeholder="Nội dung">{{ old('content') }}</textarea>
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
