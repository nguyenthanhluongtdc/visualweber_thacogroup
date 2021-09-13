        <footer class="footer">
            <div class="container-customize ">
                <div class="footer-content">
                    <div class="logo_footer">
                        <img src="{{ get_image_url(theme_option('logo-footer')) }}" alt="">
                    </div>
                    <div class="company_name">
                        <h4 class="font30">{{theme_option('company-name') }}</h4>
                    </div>
                    <div class="office-wrapper">
                   
                            <div class="office">
                                <h2 class="font18 text-white title">{!! theme_option('office-name') !!}</h2>
                                <div class="address">
                                        <p class="font18 text-white">  {!! theme_option('office-address') !!}  </p>
                                </div>
                                <div class="phone">
                                    <a class="text-white" href="tel: {!! theme_option('office-phone') !!} "> {!! theme_option('office-phone') !!} </a>
                                </div>
                                <div class="global">
                                    <a class="text-white" href="{!! theme_option('office-global') !!}"> {!! theme_option('office-global') !!} </a>
                                </div>
                            </div>
                            <div class="office">
                                <h2 class="font18 text-white title">{!! theme_option('office-name-two') !!}</h2>
                                <div class="address">
                                        <p class="font18 text-white">
                                            {!! theme_option('office-address-two') !!}                                           
                                        </p>
                                </div>
                                <div class="phone ">
                                    <a class="text-white" href="tel:{!! theme_option('office-phone-two') !!}">{!! theme_option('office-phone-two') !!}</a>
                                </div>
                                <div class="global ">
                                    <a class="text-white" href="{!! theme_option('office-global-two') !!}">{!! theme_option('office-global-two') !!}</a>
                                </div>
                            </div>
                            <div class="office">
                                <h2 class="font18 text-white title">{!! theme_option('office-name-three') !!}</h2>
                                <div class="address">
                                   
                                        <p class="font18 text-white">
                                            {!! theme_option('office-address-three') !!}
                                        </p>
                                    
                                </div>
                                <div class="phone">
                                    <a class="text-white" href="tel: {!! theme_option('office-phone-three') !!}">{!! theme_option('office-phone-three') !!}</a>
                                </div>
                                <div  class="global">
                                    <a class="text-white" href="{!! theme_option('office-global-three') !!}">{!! theme_option('office-global-three') !!}</a>
                                </div>
                            </div>
                    </div>
                    <div class="list-social">
                        <ul>
                            <li>
                                <a href="{!! theme_option('footer-facebook') !!}">
                                    <img src="{{ get_image_url(theme_option('footer-facebook-icon')) }}" alt="{!! theme_option('footer-facebook') !!}">
                                </a>
                            </li>
                            <li>
                                <a href="{!! theme_option('footer-youtube') !!}">
                                    <img src="{{ get_image_url(theme_option('footer-youtube-icon')) }}" alt="{!! theme_option('footer-youtube') !!}">
                                </a>
                            </li>
                            <li>
                                <a href="tel:{!! theme_option('footer-phone') !!}">
                                    <img src="{{ get_image_url(theme_option('footer-phone-icon')) }}" alt="{!! theme_option('footer-phone') !!}">
                                </a>
                            </li>
                            <li>
                                <a href="{!! theme_option('footer-linkedin') !!}">
                                    <img src="{{ get_image_url(theme_option('footer-linkedin-icon')) }}" alt="{!! theme_option('footer-linkedin') !!}">
                                </a>
                            </li>
                            <li>
                                <a href="maito:{!! theme_option('footer-email') !!}">
                                    <img src="{{ get_image_url(theme_option('footer-email-icon')) }}" alt="">
                                </a>
                            </li>
                          

                        </ul>
                    </div>
                   
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container-customize ">
                    <div class="row">
                        <div class="col-md-7 col-sm-6 col-12">
                           <p class="text-white">
                            {!! theme_option('license') !!}
                           </p> 
    
                        </div>
                       
                        {!! Menu::renderMenuLocation('footer-menu', [
                            'options' => [],
                            'theme' => true,
                            'view' => 'policy',
                        ]) !!}
                    </div>
                </div>
               
            </div>
        </footer>
        {!! Theme::footer() !!}
        <script>
            AOS.init({
                easing: 'ease-in-out-sine'
            });
            // $('.datepicker').datepicker();
    
        </script>
    </body>
</html>