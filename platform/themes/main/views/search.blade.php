<div class="search-page">
    <form action="{{route('public.search')}}" class="form-search" method="GET">
        <div class="container-customize">
            <div class="search-intro">
                <h1 class="font-myria-bold font60 text-center mt-5"> {!! __('KẾT QUẢ TÌM KIẾM') !!}</h1>
            </div>
            <div class="search-wrapper">
                <div class="search-input mt-5 mb-3">
                    <div class="search-bar mb-4">

                        <div class="search">
                            <input type="text" class="form-control font20" id="search-bar" placeholder="Tìm kiếm"
                                name="keyword" value="">
                            <button id="button-addon5" type="submit" class="btn"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="search-month-year-mb">
                            <select name="search-month" id="search-month" class="search-month font18">
                                <option value="1">Tháng 7</option>
                                <option value="2">Tháng 8</option>
                                <option value="3">Tháng 9</option>
                            </select>
                            <select name="search-year" id="search-year" class="search-year font18">
                                <option value="1">2021</option>
                                <option value="2">2020</option>
                                <option value="3">2019</option>
                            </select>
                        </div>
                       
                    </div>
                    <p class=" mt-2">
                        @if(isset($count))
                        {!!$count!!}
                        @endif
                    </p>
                </div>
                <div class="search-range pb-4 mt-5">
                   <div class="form-search">
                    {{-- <div class="search-cate">
                        <div class="box">
                            <input id="one" type="checkbox">
                            <span class="check"></span>
                            <label for="one" class=" font18">Media</label>
                        </div>
                        <div class="box">
                            <input id="two" type="checkbox">
                            <span class="check"></span>
                            <label for="two" class=" font18">Truyền thông</label>
                        </div>
                        <div class="box">
                            <input id="three" type="checkbox">
                            <span class="check"></span>
                            <label for="three" class=" font18">Quan hệ cổ đông</label>
                        </div>
                        <div class="box">
                            <input id="four" type="checkbox">
                            <span class="check"></span>
                            <label for="four" class=" font18">Tất cả</label>
                        </div>
                    </div> --}}
                    <div class="filter-list">
                        <div class="col-md-12 col-12 search-cate">
                            <div class="pretty p-default p-smooth">
                                <input type="checkbox" />
                                <div class="state p-primary">
                                    <label>Media</label>
                                </div>
                            </div>
                            <div class="pretty p-default p-smooth">
                                <input type="checkbox" />
                                <div class="state p-primary">
                                    <label>Truyền thông</label>
                                </div>
                            </div>  
                            <div class="pretty p-default p-smooth">
                                <input type="checkbox" />
                                <div class="state p-primary">
                                    <label>Quan hệ cổ đông</label>
                                </div>
                            </div> 
                            <div class="pretty p-default p-smooth">
                                <input type="checkbox" />
                                <div class="state p-primary">
                                    <label>Tất cả</label>
                                </div>
                            </div> 
                           
                        </div>
                    </div>
                    <div class="select-time-wrapper">
                        <i class="fas fa-sort"></i>
                        <select name="" id="" class="select-time font18">
                            <option value="" disabled selected>
                                Sắp xếp
                            </option>
                            <option value="">Thời gian mới nhất</option>
                            <option value="">Thời gian cũ nhất</option>
                            <option value="">Từ A-Z</option>
                            <option value="">Từ Z-A</option>
                        </select>
                    </div>

                    <div class="search-month-year ">
                        <select name="search-month" id="search-month" class="search-month font18">
                            <option value="1">Tháng 7</option>
                            <option value="2">Tháng 8</option>
                            <option value="3">Tháng 9</option>
                        </select>
                        <select name="search-year" id="search-year" class="search-year font18">
                            <option value="1">2021</option>
                            <option value="2">2020</option>
                            <option value="3">2019</option>
                        </select>
                    </div>
                   </div>

                </div>
                
            </div>
            @if(!empty($posts))
                @forelse($posts as $item)
                    <div class="search-result row mb-md-4 mb-5" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <div class="col-lg-3 col-md-5 result-img">
                            <a class="image h-100" href="{{$item->url}}" title="">
                                <img src="{{ Storage::disk('public')->exists($item->image) ? get_object_image($item->image) : RvMedia::getDefaultImage() }}" alt="img-detail"
                                    class="w-100 h-100 object-fit-cover">
                            </a>
                        </div>
                        <div class="col-lg-9 col-md-7 result-content">
                            <div class="content">
                                <a href="{{$item->url}}">
                                    <h3 class="font-myria-bold font30  color-gray">
                                        {!! $item->name !!}
                                    </h3>
                                </a>
                                <p class=" desc my-3 font15">
                                    {!! $item->description??$item->name !!}
                                </p>
                                <p class=" date font15"> {{$item->created_at->format('d/m/Y')}} </p>
                            </div>
                        </div>
                    </div>
                    @empty

                @endforelse
            @endif
            {{ $posts->links('vendor.pagination.custom') }} 
        </div>
    </form>
</div>
</div>
<style>
    .list-social-sidebar {
        display: none;
    }

    .page-content {
        padding-top: 96px;
    }

    .header {
        background-color: white !important;
        box-shadow: 0 5px 8px -5px #555;


    }

    .navbar .navbar-nav .nav-item a {
        color: rgb(38, 38, 38) !important;
    }

    .header-top {

        background-color: #F6F6F7 !important;
    }

    .header .header-top .list-item-top .item-top__link {
        color: rgb(38, 38, 38) !important;
    }

    .header .header-top::after {
        visibility: visible;
        opacity: 1;
    }

    .logo_link-white {
        display: none !important;
    }

    .logo_link-blue {
        display: block !important;
    }
</style>