@includeIf("theme.main::views.pages.post.slide")
@includeIf("theme.main::views.breadcrumb")
<section class="media-newspapers mb-60">
    <div class="media-newspapers-wrapper">
        <div class="container-customize"> 
             <div class="shareholder-infomation mb-100">
                        <div class="shareholder-infomation_left">
                            <div class="filter-search-media field">
                                <form action="" class="form-search ">
                                    <div class="search">
                                        <input type="text" class=" form-control form-control-sm " placeholder="Nhập nội dung cần tìm" value="" name="q">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <select class="select-year font18" id="">
                                        <option value="">2019</option>
                                        <option value="">2018</option>
                                        <option value="">2017</option>
                                        <option value="">2016</option>
                                    </select>
                                    <select class="select-by-field font18" id="">
                                        <option value="">Ô tô - Cơ Khí</option>
                                        <option value="">Nông nghiệp</option>
                                        <option value="">Thương mại - dịch vụ</option>
                                        <option value="">Đầu tư xây dựng</option>
                                        <option value="">Logistics</option>
                                    </select>
                                </form>
                             </div>
                            <div class="list-info"> 
                                @php
                                $posts = get_posts_by_category($category->id ?? 18, 5);
                                 @endphp
                                  @if (!empty($posts))
                                  @foreach ($posts as $post)
                                <div class="info-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
                                    <div class="info-left">
                                        <div class="date">
                                            @php
                                            $month = $post->created_at->format('m')
                                             @endphp
                                            <p> 
                                               
                                                <span class="date-day">{{ $post->created_at->format('d') }}</span>
                                                <sup class="">-{{ $post->created_at->format('m') }}</sup>
                                            </p> 
                                            <p class="date-year fon16 text-center">{{ $post->created_at->format('Y') }}</p>
                                        </div>
                                    </div> 
                                    <div class="info-right"> 
                                        <h3 >
                                            <a href="" class="font25 itemdown-show text-justify">
                                                {{$post->name}}
                                            </a> 
                                        </h3>
                                        <p class="count">
                                            1 files  
                                        </p>
                                        <a href="{{ get_image_url(get_field($post, 'newspapper_files')) }}" class="download" target="_blank" download>

                                            <img src="{{ Theme::asset()->url('images/relationship/download.png') }}" alt="" >
                                            <img src="{{ Theme::asset()->url('images/relationship/down.png') }}" alt="" class="img-mobile">
                                        </a>
                                        <div class="downcontent">
                                            <ul class="list-file">
                                                <a href="{{ get_image_url(get_field($post, 'newspapper_files')) }}" target="_blank" download>
                                                    <div class="text-dark">
                                                        {{@get_file_name(get_field($post, 'newspapper_files'))}}
                                                        
                                                    </div>
                                                </a>
                                                
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                              
                            </div>
                            {{ $posts->links('vendor.pagination.custom') }}
                        </div>
                        @includeIf("theme.main::views.pages.post.post-sidebar")
               
             </div>
        </div>
    </div>
</section>