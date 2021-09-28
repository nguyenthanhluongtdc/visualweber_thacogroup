<template>
    <div>
        <div class="media-content">
            <!---gallery--->
            <div class="media-wrapper">
                <div class="container-customize">
                    <div class="image__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50">
                        <img src="themes/main/images/introduce/arrow.png" alt="" />
                        <h1 class="font50 big-title">Hình ảnh</h1> 
                    </div>
                    
<div class="tab-image">
    <div class="media__tabs">
        <ul class=" nav nav-tabs" id="tab-media" role="tablist">
            <li class="__tabs__item " role="media">
                <a class="__tabs__link nav-link active" id="media-album-tab" data-toggle="tab" role="tab" aria-controls="media-image" aria-selected="true" href="#media-album" title="Tất Cả">
                    <i class="far fa-images"></i>
                    Albums
                </a>
            </li>
            <li class="__tabs__item" role="media">
                <a class="__tabs__link nav-link" id="media-single-image-tab" data-toggle="tab" role="tab" aria-controls="media-video" aria-selected="true" href="#media-single-image" title="Tất Cả">
                    <i class="fas fa-image"></i>
                    Hình ảnh
                </a>
            </li>
        </ul>

        <div class="filter-media "> 
            <form action="">
                <div class="list-tool">
                    <div class="search">
                        <input type="text" class=" form-control form-control-sm " placeholder="Nhập nội dung cần tìm" value="" name="keyword" autocomplete="off" v-model="keyword">
                        <button class="btn btn-secondary" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="calender">
                        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
                            <input type="date" @change="changeDateAndLoadDataImage($event)" id="datepicker" name="calendars" class="font15">
                        </div>
                    </div>
                    <div class="filter" id="filter">
                        <div class="filter__title">
                            <label for="">Filter</label>    
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="filler-list">
                            <div class="col-md-12 col-12 search-cate">
                                <div class="pretty p-default p-smooth">
                                    <input type="checkbox" />
                                    <div class="state p-primary">
                                        <label>THACO</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-smooth">
                                    <input type="checkbox" />
                                    <div class="state p-primary">
                                        <label>Ô tô & Cơ khí</label>
                                    </div>
                                </div>  
                                <div class="pretty p-default p-smooth">
                                    <input type="checkbox" />
                                    <div class="state p-primary">
                                        <label>Nông Lâm Nghiệp</label>
                                    </div>
                                </div> 
                                <div class="pretty p-default p-smooth">
                                    <input type="checkbox" />
                                    <div class="state p-primary">
                                        <label>Đầu tư - Xây Dựng</label>
                                    </div>
                                </div> 
                                <div class="pretty p-default p-smooth">
                                    <input type="checkbox" />
                                    <div class="state p-primary">
                                        <label>Thương mại - Dịch vụ</label>
                                    </div>
                                </div> 
                                <div class="pretty p-default p-smooth">
                                    <input type="checkbox" />
                                    <div class="state p-primary">
                                        <label>Logistics</label>
                                    </div>
                                </div>     
                            </div>
                        </div>
                    </div>
                    <div class="arrange">
                        <div class="sort-list">
                            <select name="sort" class="sort-time font18 js-example-basic-single">
                                <option value="" selected disabled>
                                    Sắp xếp
                                </option>
                                <option value="new">Thời gian mới nhất</option>
                                <option value="old">Thời gian cũ nhất</option>
                                <option value="a-z">Từ A-Z</option>
                                <option value="z-a">Từ Z-A</option>
                            </select>
                        </div>
                    </div>


                    
                    <div class="dropdown-filter-mobile">
                         <div class="dropdownn">
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Lọc
                             <i class="fal fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-lg-end">
                           
                                <li class="dropdown-submenu ">
                                    <a class="test d-inline-block w-100" tabindex="-1" href="#">Thời gian  <i class="fal fa-angle-down date-mobile"></i></a>
                                    <ul class="dropdown-menu datepicker-mobile click-show">
                                    <li><a tabindex="-1" href="#">
                                        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
                                            <input type="date" @change="changeDateAndLoadDataImage($event)" id="datepicker" name="calendars" class="font15">
                                        </div>    
                                    </a></li>
                                    </ul> 
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="test d-inline-block w-100" tabindex="-1" href="#">Ngành nghề <i class="fal fa-angle-down filter-mobile"></i></a>
                                    <ul class="dropdown-menu filter-menu mobile click-show">
                                        <li>
                                            <a tabindex="-1" href="#">
                                                <div class="pretty p-default p-smooth">
                                                <input type="checkbox" />
                                                <div class="state p-primary">
                                                    <label>THACO</label>
                                                </div>
                                                </div>
                                                <div class="pretty p-default p-smooth">
                                                    <input type="checkbox" />
                                                    <div class="state p-primary">
                                                        <label>Ô tô & Cơ khí</label>
                                                    </div>
                                                </div>  
                                                <div class="pretty p-default p-smooth">
                                                    <input type="checkbox" />
                                                    <div class="state p-primary">
                                                        <label>Nông Lâm Nghiệp</label>
                                                    </div>
                                                </div> 
                                                <div class="pretty p-default p-smooth">
                                                    <input type="checkbox" />
                                                    <div class="state p-primary">
                                                        <label>Đầu tư - Xây Dựng</label>
                                                    </div>
                                                </div> 
                                                <div class="pretty p-default p-smooth">
                                                    <input type="checkbox" />
                                                    <div class="state p-primary">
                                                        <label>Thương mại - Dịch vụ</label>
                                                    </div>
                                                </div> 
                                                <div class="pretty p-default p-smooth">
                                                    <input type="checkbox" />
                                                    <div class="state p-primary">
                                                        <label>Logistics</label>
                                                    </div>
                                                </div>  
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu sort-mobile">
                                    <a class="test d-inline-block w-100" tabindex="-1" href="#">Sắp xếp  
                                    <i class="fal fa-angle-down filter-mobile"></i></a>
                                    <div class="sort-list-mobile dropdown-menu click-show">
                                        <select name="sort" class="font18 js-example-basic-single" placeholder="Sắp xếp">
                                            <option value="new">Thời gian mới nhất</option>
                                            <option value="old">Thời gian cũ nhất</option>
                                            <option value="a-z">Từ A-Z</option>
                                            <option value="z-a">Từ Z-A</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="search-btn">
                        <button type="button" class="btn btn-primary">Tìm kiếm</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

                        <div class="tab-content" id="nav-tabContent3 tab-content2">
                            <div class="tab-pane fade active show" id="media-album" role="tabpanel" aria-labelledby="field-1-tab">
                                <div class="media-banner">
                                    <div class="list-album">
                                        <div class="album-item" data-target="#album_modal" data-toggle="modal" v-if="dataImage" v-for="(item) in dataImage.data" :key="item.id">
                                            <div class="album-item__img" @click="loadGallery(item.id, 'album')">
                                                <img :src="'storage/'+item.image" alt="">
                                            </div>
                                            <div class="album-item__name">
                                                <p class="name font20">
                                                {{item.name}}                                         
                                                </p> 
                                            </div>
                                            <span class="album-item__date">{{item.created_at | formatDate('DD-MM-YYYY')}}</span>
                                            <div class="album-item__count">
                                                <i class="far fa-image"></i> 
                                                <p class="quantity font18">100 </p>
                                            </div>
                                            <div title="Tải xuống album" class="album-item__download" @click="zipDownload(item.id)">
                                                <i class="fas fa-download"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <p v-if="!dataImage.data">
                                Khong tim thay du lieu
                            </p>

                            <div class="tab-pane fade" id="media-single-image" role="tabpanel" aria-labelledby="field-2-tab">
                                <div class="media-banner">
                                    <div class="list-image">
                                        <div class="image-item" v-if="dataImage" v-for="(item) in dataImage.data" :key="item.id">
                                            <div class="image-item__img" @click="loadGallery(item.id)">
                                                <img class="" :src="'storage/'+item.image" alt="">
                                            </div>
                                            <div class="image-item__back" @click="loadGallery(item.id, 'album')">
                                                <i class="far fa-image"></i>
                                                <p  class="text font18">Album</p>
                                            </div>
                                            <div class="icon--download">
                                                <a download :href="'storage/'+item.image" title="Tải xuống">
                                                    <i class="fas fa-download text-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <paginationn 
                        :perPage="albumImagePerPage"
                        :totalPages="albumImageTotalPages"
                        :currentPage="albumImageCurrentPage"
                        @pagechanged="albumImageOnPageChange"
                    /> -->

                        <paginationn  
                            v-if="dataImage.data"
                            :data="dataImage" 
                            @pagination-change-page="albumImageOnPageChange">
                        </paginationn>
                </div>
            </div>
            <!---end gallery---->

            <!---video--->
            <div class="media-wrapper mt-5">
                <div class="container-customize">
                    <div class="image__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50">
                        <img src="themes/main/images/introduce/arrow.png" alt="" />
                        <h1 class="font50 big-title">Video</h1>
                    </div>
                    
                    <div class="tab-video">
                        <div class="media__tabs">
                            <ul class=" nav nav-tabs" id="tab-media" role="tablist">
                                <li class="__tabs__item " role="media">
                                    <a class="__tabs__link nav-link active" id="media-video-tab" data-toggle="tab" role="tab" aria-controls="media-video" aria-selected="true" href="#media-video" title="Tất Cả">
                                        <i class="far fa-images"></i>
                                        Albums
                                    </a>
                                </li>
                                <li class="__tabs__item" role="media">
                                    <a class="__tabs__link nav-link" id="media-single-video-tab" data-toggle="tab" role="tab" aria-controls="media-single-video" aria-selected="true" href="#media-single-video" title="Tất Cả">
                                        <i class="fas fa-image"></i>
                                        Video
                                    </a>
                                </li>
                            </ul>

                            <div class="filter-media">
                                <form action="">
                                    <div class="list-tool">
                                        <div class="search video">
                                            <input type="text" class=" form-control form-control-sm " placeholder="Nhập nội dung cần tìm" value="" name="keyword" autocomplete="off" v-model="keywordVideo">
                                            <button class="btn btn-secondary" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                        <div class="calender">
                                            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
                                                <input type="date" @change="changeDateAndLoadDataVideo($event)" id="datepicker" name="calendars" class="font15">
                                            </div>
                                        </div>
                                        <div class="filter" id="filter">
                                            <div class="filter__title">
                                                <label for="">Filter </label>    
                                                <i class="fas fa-angle-down"></i>
                                            </div>
                                            <div class="filler-list">
                                                <div class="col-md-12 col-12 search-cate">
                                                    <div class="pretty p-default p-smooth">
                                                        <input type="checkbox" />
                                                        <div class="state p-primary">
                                                            <label>THACO</label>
                                                        </div>
                                                    </div>
                                                    <div class="pretty p-default p-smooth">
                                                        <input type="checkbox" />
                                                        <div class="state p-primary">
                                                            <label>Ô tô & Cơ khí</label>
                                                        </div>
                                                    </div>  
                                                    <div class="pretty p-default p-smooth">
                                                        <input type="checkbox" />
                                                        <div class="state p-primary">
                                                            <label>Nông Lâm Nghiệp</label>
                                                        </div>
                                                    </div> 
                                                    <div class="pretty p-default p-smooth">
                                                        <input type="checkbox" />
                                                        <div class="state p-primary">
                                                            <label>Đầu tư - Xây Dựng</label>
                                                        </div>
                                                    </div> 
                                                    <div class="pretty p-default p-smooth">
                                                        <input type="checkbox" />
                                                        <div class="state p-primary">
                                                            <label>Thương mại - Dịch vụ</label>
                                                        </div>
                                                    </div> 
                                                    <div class="pretty p-default p-smooth">
                                                        <input type="checkbox" />
                                                        <div class="state p-primary">
                                                            <label>Logistics</label>
                                                        </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </div>
                                        <div class="arrange">
                                            <div class="sort-list">
                                                <select name="sort" class="sort-time font18 js-example-basic-single">
                                                    <option value="" selected disabled>
                                                        Sắp xếp
                                                    </option>
                                                    <option value="new">Thời gian mới nhất</option>
                                                    <option value="old">Thời gian cũ nhất</option>
                                                    <option value="a-z">Từ A-Z</option>
                                                    <option value="z-a">Từ Z-A</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="dropdown-filter-mobile video">
                         <div class="dropdownn">
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Lọc
                             <i class="fal fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-lg-end">
                           
                                <li class="dropdown-submenu ">
                                    <a class="test d-inline-block w-100" tabindex="-1" href="#">Thời gian  <i class="fal fa-angle-down date-mobile"></i></a>
                                    <ul class="dropdown-menu datepicker-mobile click-show">
                                    <li><a tabindex="-1" href="#">
                                        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
                                            <input type="date" @change="changeDateAndLoadDataImage($event)" id="datepicker" name="calendars" class="font15">
                                        </div>    
                                    </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="test d-inline-block w-100" tabindex="-1" href="#">Ngành nghề <i class="fal fa-angle-down filter-mobile"></i></a>
                                    <ul class="dropdown-menu filter-menu mobile click-show">
                                        <li>
                                            <a tabindex="-1" href="#">
                                                <div class="pretty p-default p-smooth">
                                                <input type="checkbox" />
                                                <div class="state p-primary">
                                                    <label>THACO</label>
                                                </div>
                                                </div>
                                                <div class="pretty p-default p-smooth">
                                                    <input type="checkbox" />
                                                    <div class="state p-primary">
                                                        <label>Ô tô & Cơ khí</label>
                                                    </div>
                                                </div>  
                                                <div class="pretty p-default p-smooth">
                                                    <input type="checkbox" />
                                                    <div class="state p-primary">
                                                        <label>Nông Lâm Nghiệp</label>
                                                    </div>
                                                </div> 
                                                <div class="pretty p-default p-smooth">
                                                    <input type="checkbox" />
                                                    <div class="state p-primary">
                                                        <label>Đầu tư - Xây Dựng</label>
                                                    </div>
                                                </div> 
                                                <div class="pretty p-default p-smooth">
                                                    <input type="checkbox" />
                                                    <div class="state p-primary">
                                                        <label>Thương mại - Dịch vụ</label>
                                                    </div>
                                                </div> 
                                                <div class="pretty p-default p-smooth">
                                                    <input type="checkbox" />
                                                    <div class="state p-primary">
                                                        <label>Logistics</label>
                                                    </div>
                                                </div>  
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu sort-mobile">
                                    <a class="test d-inline-block w-100" tabindex="-1" href="#">Sắp xếp  
                                    <i class="fal fa-angle-down filter-mobile"></i></a>
                                    <div class="sort-list-mobile dropdown-menu click-show">
                                        <select name="sort" class="font18 js-example-basic-single" placeholder="Sắp xếp">
                                            <option value="new">Thời gian mới nhất</option>
                                            <option value="old">Thời gian cũ nhất</option>
                                            <option value="a-z">Từ A-Z</option>
                                            <option value="z-a">Từ Z-A</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="search-btn">
                        <button type="button" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-content" id="nav-tabContent3 tab-content2">
                            <div class="tab-pane fade active show" id="media-video" role="tabpanel" aria-labelledby="field-1-tab">
                                <div class="list-video-wrapper">
                                    <div class="list-video">
                                        <div class="video-item" data-target="#album_modal" data-toggle="modal" v-if="dataVideo" v-for="(item) in dataVideo.data" :key="item.id">
                                            <div class="video-thumbnail" @click="loadGalleryVideo(item.id, 'album')">
                                                <img :src="'storage/'+item.image" alt="">
                                            </div>
                                            <div class="video-item__name font20">
                                                <p class="name font20">
                                                {{item.name}}                                         
                                                </p>
                                            </div>
                                            <span class="video-item__date">{{item.created_at | formatDate('DD-MM-YYYY')}}</span>
                                            <div class="video-item__count">
                                                <i class="fas fa-photo-video"></i>
                                                <p class="quantity font18">100</p>
                                            </div>
                                            <!-- <div title="Tải xuống album" class="video-item__download" @click="zipDownload(item.id)">
                                                <i class="fas fa-download"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="media-single-video" role="tabpanel" aria-labelledby="field-2-tab">
                                    <div class="media-video mCustomScrollbar" data-mcs-theme="dark">
                                        <div class="list-video">
                                            <div class="left">
                                                <div class="video-main" v-if="videoPlay">
                                                    <div class="video-wrapper">
                                                        <!-- <video muted loop  autoplay class="__video w-100">
                                                            <source src="themes/main/images/video/chuc-mung-nam-moi.mp4" type="video/mp4">
                                                        </video>  -->

                                                        <iframe  class="youtube-player" id="player" type="text/html" :src="'https://www.youtube.com/embed/'+videoPlay.youtube_code+'?wmode=opaque&autohide=1&autoplay=1&enablejsapi=1'" frameborder="0" muted="muted"></iframe>

                                                    </div>
                                                    <p class="name font30">
                                                        {{dataVideo.name}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="right">
                                                <div class="list-video-left">
                                                    <div class="video-item" v-if="dataVideo" v-for="(item) in dataVideo.data" :key="item.id">
                                                        <div class="img-button" @click="changeVideoPlay(item)">
                                                            <img :src="'storage/'+item.image" alt="">
                                                            <i class="far fa-play-circle button-video"></i>
                                                        </div>
                                                        <p class="name font20">
                                                           {{item.name}}
                                                        </p>                         
                                                    </div>

                                                    <!-- <div class="video-item ">
                                                        <a href="" class="img-button">
                                                            <img src="themes/main/images/media/video-2.jpg" alt="">
                                                            <i class="far fa-play-circle button-video"></i>
                                                        </a>
                                                        
                                                        <p class="name  font20">
                                                            10 ĐIỂM GIÚP MAZDA6 MỚI THUYẾT PHỤC KHÁCH HÀNG VIỆT NAM
                                                        </p>
                                                    </div>
                                                    <div class="video-item ">
                                                        <a href="" class="img-button">
                                                            <img src="themes/main/images/media/video-2.jpg" alt="">
                                                            <i class="far fa-play-circle button-video"></i>
                                                        </a>
                                                    
                                                        <p class="name  font20">
                                                            10 ĐIỂM GIÚP MAZDA6 MỚI THUYẾT PHỤC KHÁCH HÀNG VIỆT NAM
                                                        </p>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <!-- <paginationn 
                        :perPage="albumImagePerPage"
                        :totalPages="albumImageTotalPages"
                        :currentPage="albumImageCurrentPage"
                        @pagechanged="albumImageOnPageChange"
                    /> -->

                        <paginationn  
                            v-if="dataVideo.data"
                            :data="dataVideo" 
                            @pagination-change-page="albumVideoOnPageChange">
                        </paginationn>
                </div>
            </div>
            <!---end video---->
        </div>

        <!---modal-album--->
        <modal name="albumImage-modal">
            <div class="modal-main">
                <div class="modal-header-custom">
                    <p class="text-right mb-0">
                        <button class="btn-close border-0 font30 font-weight-normal bg-white"@click="hideModalAlbumImage">
                            <i class="fas fa-times"></i>
                        </button>
                    </p>
                    <PuSkeleton circle height="50px" :count="5">
                        <h2 class="name font28 text-center mb-4 font-weight-bold">
                            {{galleryImage.name}}
                        </h2>
                    </PuSkeleton>
                </div>
                
                <div class="modal-body-custom">
                    <vue-custom-scrollbar class="scroll-area"  :settings="settingsScrollbar">
                        <div class="list-item">
                            <div class="item" v-if="galleryImage" v-for="(item, i) in galleryImage.data" :key="i">
                                <div class="box-img" @click="showModalSliderImage">
                                    <img :src="'storage/'+item.img" class=" fit-cover" /> 
                                </div>
                                <div class="icon--download">
                                    <a download :href="'storage/'+item.img" title="Tải xuống">
                                        <i class="fas fa-download text-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </vue-custom-scrollbar>
                </div>
            </div>
        </modal>
        <!---end modal-album--->

        <!---modal-album video--->
        <modal name="albumVideo-modal">
            <div class="modal-main ">
                <div class="modal-header-custom">
                    <p class="text-right mb-0">
                        <button class="btn-close border-0 font30 font-weight-normal bg-white"@click="hideModalAlbumVideo">
                            <i class="fas fa-times"></i>
                        </button>
                    </p>
                    <PuSkeleton circle height="50px" :count="5">
                        <h2 class="name font28 text-center mb-4 font-weight-bold">
                            {{galleryVideo.name}}
                        </h2>
                    </PuSkeleton>
                </div>
                
                <div class="modal-body-custom">
                    <vue-custom-scrollbar class="scroll-area"  :settings="settingsScrollbar">
                        <div class="list-item">
                            <div class="item" v-if="galleryVideo" v-for="(item, i) in galleryVideo.data" :key="i">
                                <div class="box-img" @click="showModalSliderVideo(item)">
                                    <img :src="'http://img.youtube.com/vi/'+item.youtube_code+'/mqdefault.jpg'" class=" fit-cover" /> 
                                </div>
                                <!-- <div class="icon--download">
                                    <a download :href="'http://img.youtube.com/vi/'+item.youtube_code+'/mqdefault.jpg'" title="Tải xuống">
                                        <i class="fas fa-download text-white"></i>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </vue-custom-scrollbar>
                </div>
            </div>
        </modal> 
        <!---end modal-album--->

        <!---modal-detail--->
        <modal name="sliderImage-modal">
            <div class="modal-main">
                <div class="modal-header-custom">
                    <p class="text-right mb-0">
                        <button class="btn-close border-0 font30 font-weight-normal bg-white" @click="hideModalSliderImage">
                            <i class="fas fa-times"></i>
                        </button>
                    </p>
                    <h2 class="name font28 text-center font-weight-bold">
                        {{galleryImage.name}}
                    </h2>
                </div>
               
                <div class="modal-body-custom">
                    <template>
                        <div class="swiper-galleryImage h-100">
                            <swiper ref="galleryImage" class="swiper" :options="swiperOptions">
                                <swiper-slide v-if="galleryImage" v-for="(item, i) in galleryImage.data" :key="i">
                                    <img :src="'storage/'+item.img" alt="" class="w-100 h-100 fit-cover">
                                    <!-- <div class="icon--download">
                                        <a download :href="'storage/'+item.img" title="Tải xuống">
                                            <i class="fas fa-download text-white"></i>
                                        </a>
                                    </div> -->
                                </swiper-slide>

                                <div class="swiper-pagination" slot="pagination"></div>
                                <div class="swiper-button-prev" slot="button-prev"></div>
                                <div class="swiper-button-next" slot="button-next"></div>
                            </swiper>
                        </div>
                    </template>
                </div>
            </div>
        </modal>
        <!---end modal-detail--->

        <!---modal-detail--->
        <modal name="sliderVideo-modal">
            <div class="modal-main">
                <div class="modal-header-custom">
                    <p class="text-right mb-0">
                        <button class="btn-close border-0 font30 font-weight-normal bg-white" @click="hideModalSliderVideo">
                            <i class="fas fa-times"></i>
                        </button>
                    </p>
                    <h2 class="name font28 text-center font-weight-bold">
                        {{itemVideoDetail.description}}
                    </h2>
                </div>
                
                <div class="modal-body-custom ">
                    <iframe width="420" class="w-100" height="345" :src="'https://www.youtube.com/embed/'+itemVideoDetail.youtube_code"></iframe>
                </div>
            </div>
        </modal>
        <!---end modal-detail--->

    </div>
</template>

<script>

//custom-scrollbar
import vueCustomScrollbar from 'vue-custom-scrollbar';
import "vue-custom-scrollbar/dist/vueScrollbar.css"

//pagination
import Paginationn from 'laravel-vue-pagination';

//swiper use gallery
import { Swiper as SwiperClass, Pagination, Navigation, Keyboard, Mousewheel} from 'swiper/js/swiper.esm'
import getAwesomeSwiper from 'vue-awesome-swiper/dist/exporter'
const { Swiper, SwiperSlide } = getAwesomeSwiper(SwiperClass)

// Swiper modules
SwiperClass.use([Pagination, Navigation, Keyboard, Mousewheel]);

export default {

    //export component
    name: 'Media',

    //get props
    props: ['categoryId', 'perPage', 'totalPages'],

    //import component
    components: {
        vueCustomScrollbar,
        Swiper,
        SwiperSlide,
        Pagination,
        Keyboard,
        Mousewheel,
    },

    //init data
    data() {
        return {
            //gallery
            swiperOptions: {
               
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'progressbar'
                },
                keyboard: {
                    enabled: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev' 
                }
            },
            indexItem: -1,
            dataImage: [],
            galleryImage: [],
            
            settingsScrollbar: {
                suppressScrollY: false,
                suppressScrollX: true,
                wheelPropagation: false
            },
            filterAlbumImage: {
                keyword: "",
                date: "",
                type: [],
                sort: "",
                format_type: 'gallery',
                categoryId: this.categoryId,
            },
            keyword: '',
            changeFilterPhoto: {
                type: Number,
            },
            menuFilterImage: [],

            //video
            dataVideo: [],
            galleryVideo: [],
            filterAlbumVideo: {
                keyword: "",
                date: "",
                type: "",
                sort: "",
                format_type: 'video',
                categoryId: this.categoryId,
            },
            keywordVideo: '',
            itemVideoDetail: [],
            videoPlay: [],
        }
    },

    //event watch
    watch: {
        keyword(after, before) {
            this.loadAlbumImage()
        },
        keywordVideo(after, before) {
            this.loadAlbumVideo();
        },
        changeFilterPhoto() {
             this.loadAlbumImage()
        },
    },

    //init method
    methods: { 

        //gallery
        loadGallery: async function(id, album="") {
            if(this.indexItem != id) {
                this.indexItem = id;

                await this.$http.get('api/get/gallery/post/'+id)
                    .then(response=> {
                        return response.data
                    })
                    .then(response=> {
                        this.galleryImage = response
                        this.showGallery(album)
                    })
                    .catch(error=> {
                        console.log(error)
                    })
            }else {
                this.showGallery(album)
            }
        },

        loadAlbumImage: function(page=1) {
            this.filterAlbumImage.keyword = this.keyword
            this.filterAlbumImage.type = this.changeFilterPhoto

            this.loadAlbumCommon(page, this.filterAlbumImage)
            // await this.$http.post('api/get/album/image?page='+page, {data: this.filterAlbumImage} )
            //         .then(response=> {
            //             // console.log(response)
            //             return response.data.data
            //         })
            //         .then(response=> {
            //             this.dataImage = response
            //         })
            //         .catch(error=> {
            //             console.log(error)
            //         })
        },

        loadAlbumCommon: async function(page=1, filter) {
            this.filterAlbumImage.keyword = this.keyword
            await this.$http.post('api/get/album/image?page='+page, {data: filter} )
                .then(response=> {
                    // console.log(response)
                    return response.data.data
                })
                .then(response=> {

                    if(filter.format_type=='gallery') {
                        this.dataImage = response
                    }else {
                        this.dataVideo = response
                        this.videoPlay = this.dataVideo.data[0]
                    }
                    
                })
                .catch(error=> {
                    console.log(error)
                })
        },

        showGallery: function(album) {
            if(album) {
                this.showModalAlbumImage();
            }else {
                this.showModalSliderImage()
            }
        },

        showGalleryVideo: function(album) {
            if(album) {
                this.showModalAlbumVideo();
            }else {
                this.showModalSliderVideo()
            }
        },

        showModalAlbumImage: function() {
            this.$modal.show('albumImage-modal');
        },
        hideModalAlbumImage: function() {
            this.$modal.hide('albumImage-modal');
        },
        showModalSliderImage: function() {
            this.$modal.show('sliderImage-modal');
        },
        hideModalSliderImage: function() {
            this.$modal.hide('sliderImage-modal');
        },

        showModalAlbumVideo: function() {
            this.$modal.show('albumVideo-modal');
        },
        hideModalAlbumVideo: function() {
            this.$modal.hide('albumVideo-modal');
        },
        showModalSliderVideo: function(item) {
            this.itemVideoDetail = item;
            this.$modal.show('sliderVideo-modal');
        },
        hideModalSliderVideo: function() {
            this.$modal.hide('sliderVideo-modal');
        },

        albumImageOnPageChange(page) {
            this.loadAlbumImage(page);
        },
        changeDateAndLoadDataImage: function(event) {
            this.filterAlbumImage.date = event.target.value;
            this.loadAlbumImage()
        },
        zipDownload: async function(id) {
            await this.$http.post('api/download/album/image/',{id: id})
                .then(response=> {
                    window.location = response.data
                })
                .catch(error=> {
                    console.log(error)
                })
        },
        loadMenuFilter: async function(location) {
            await this.$http.post('api/get/menu/',{location: location})
                .then(response=> {
                    return response.data
                })
                .then(response=> {
                    this.menuFilterImage = response.data
                })
                .catch(error=> {
                    console.log(error)
                })
        },

        //video
        loadAlbumVideo: function(page=1) {
            this.filterAlbumVideo.keyword = this.keywordVideo
            this.loadAlbumCommon(page, this.filterAlbumVideo)
        },
        loadGalleryVideo: async function(id, album="") {
            if(this.indexItem != id) {
                this.indexItem = id;

                await this.$http.get('api/get/video/post/'+id)
                    .then(response=> {
                        return response.data
                    })
                    .then(response=> {
                        this.galleryVideo = response
                        this.showGalleryVideo(album)
                        console.log(this.galleryVideo)
                    })
                    .catch(error=> {
                        console.log(error)
                    })
            }else {
                this.showGalleryVideo(album)
            }
        },
        //change video play
        changeVideoPlay: function(video) {
            this.videoPlay = video
        },

        //filter date
        changeDateAndLoadDataVideo: function(event) {
            this.filterAlbumVideo.date = event.target.value;
            this.loadAlbumVideo()
        },
        //pagination
        albumVideoOnPageChange(page) {
            this.loadAlbumVideo(page);
        },

    },

    //computed
    computed: {
        sortedDate: function() {
            return this.dataImage.data.sort((a, b) => new Date(a.date) - new Date(b.date))
        }
    },

    //mouted run when document load all
    mounted() {
        //load album image
        this.loadAlbumImage();

        //load album video
        this.loadAlbumVideo();

        //menu filter
        this.loadMenuFilter('photo-gallery-menu');
    },
}


$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $('.click-show').hide();
    $(this).next('.click-show').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});


</script>
<style>
.pagination {
    width: 100%;
    justify-content: center;
    margin: 40px 0;
}


</style>
