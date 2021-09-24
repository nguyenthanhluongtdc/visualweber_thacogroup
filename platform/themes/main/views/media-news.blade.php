
@includeIf("theme.main::views.pages.post.slide")
@includeIf("theme.main::views.breadcrumb")
<section class="media-newspapers mb-60">
    <div class="media-newspapers-wrapper">
        <div class="container-customize">
             <div class="shareholder-infomation mb-100">
                        <div class="shareholder-infomation_left">
                            <div class="filter-search-media mb-40 field">
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
                             @php
                                $posts = get_posts_by_category($category->id ?? 16, 6);
                            @endphp
                            
                            <div class="list-info">
                                @if (!empty($posts))
                                @foreach ($posts as $post) 
                                <div class="report-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="50" class="aos-init aos-animate">
                                    
                                    <div class="thumb-img">
                                        <img src="{{ get_object_image($post->image) }}" alt="report">
                                    </div>
                                    <span class="date"> {{date_format($post->created_at,"d-m-Y")}}</span>
                                    <a href="{{$post->url}}" class="text-dark">
                                        <p class="name-file font18 ">{{$post->name}}</p>
                                    </a>
                                   
                                    <div class="download">
                                        <a href="{{ get_object_image(get_field($post, 'newspapper_files')) }}" title="download">DOWNLOAD</a>
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