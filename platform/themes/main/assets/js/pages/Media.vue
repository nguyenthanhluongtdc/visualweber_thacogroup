<template>
    <div class="media-content">
        <div class="container-customize">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/truyenthong">Truyền thông</a>
                    </li>
                    <li class="breadcrumb-item active">Media</li>
                </ol>
            </nav>
        </div>

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
                    </div>

                    <div class="tab-content" id="nav-tabContent3 tab-content2">
                        <div class="tab-pane fade active show" id="media-album" role="tabpanel" aria-labelledby="field-1-tab">
                            <div class="media-banner">
                                <div class="list-album">
                                    <div class="album-item" data-target="#album_modal" data-toggle="modal">
                                        <img src="themes/main/images/media/2.jpg" alt="">
                                        <div class="album-item__name ">
                                            <p class="name font20">
                                                50 tấn tinh bột sắn của Doanh nghiệp Việt Nam vừa được xuất khẩu qua Cảng Chu Lai                                            
                                            </p>
                                        </div>
                                        <span class="album-item__date">(25/08/2021)</span>
                                        <div class="album-item__count">
                                            <i class="far fa-image"></i>
                                            <p class="quantity font18">100</p>
                                        </div>
                                        <div class="album-item__download">
                                            <i class="fas fa-download"></i>
                                        </div>
                                    </div>
                                    <div class="album-item" data-target="#album_modal" data-toggle="modal">
                                        <img src="themes/main/images/media/3.jpg" alt="">
                                        <div class="album-item__name ">
                                            <p class="name font20">
                                                THACO tài trợ trang thiết bị, vật tư y tế phòng chống dịch cho Công an TP.HCM                                            
                                            </p>
                                        </div>
                                        <span class="album-item__date">(25/08/2021)</span>
                                        <div class="album-item__count">
                                        
                                            <i class="far fa-image"></i>
                                            <p class="quantity font18">100</p>
                                        </div>
                                        <div class="album-item__download">
                                            <i class="fas fa-download"></i>
                                        </div>
                                    </div>
                                    <div class="album-item" data-target="#album_modal" data-toggle="modal">
                                        <img src="themes/main/images/media/4.jpg" alt="">
                                        <div class="album-item__name ">
                                            <p class="name font20">Những trái tim nhiệt huyết
                                                </p>
                                        </div>
                                        <span class="album-item__date">(25/08/2021)</span>
                                        <div class="album-item__count">
                                        
                                            <i class="far fa-image"></i>
                                            <p class="quantity font18">100</p>
                                        </div>
                                        <div class="album-item__download">
                                            <i class="fas fa-download"></i>
                                        </div>
                                    </div>
                                    <div class="album-item" data-target="#album_modal" data-toggle="modal">
                                        <img src="themes/main/images/media/5.jpg" alt="">
                                        <div class="album-item__name ">
                                            <p class="name font20">
                                                Tiêm vaccine Covid-19 cho người lao động tại KCN THACO Chu Lai
                                            </p>
                                        </div>
                                        <span class="album-item__date">(25/08/2021)</span>
                                        <div class="album-item__count">
                                        
                                            <i class="far fa-image"></i>
                                            <p class="quantity font18">100</p>
                                        </div>
                                        <div class="album-item__download">
                                            <i class="fas fa-download"></i>
                                        </div>
                                    </div>
                                    <div class="album-item" data-target="#album_modal" data-toggle="modal">
                                        <img src="themes/main/images/media/6.jpg" alt="">
                                        <div class="album-item__name ">
                                            <p class="name font20">Mazda “trình làng” loạt xe mới tại VMS 2016
                                                </p>
                                        </div>
                                        <span class="album-item__date">(25/08/2021)</span>
                                        <div class="album-item__count">
                                        
                                            <i class="far fa-image"></i>
                                            <p class="quantity font18">100</p>
                                        </div>
                                        <div class="album-item__download">
                                            <i class="fas fa-download"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="media-single-image" role="tabpanel" aria-labelledby="field-2-tab">
                            <div class="media-banner">
                                <div class="list-image">
                                    <div class="image-item">
                                        <div class="img-click">
                                            <img class="" src="themes/main/images/media/2.jpg" alt="">
                                        </div>
                                        <div class="image-item__back">
                                            <i class="far fa-image"></i>
                                            <p  class="text font18">Album</p>
                                        </div>
                                        <div class="image-item__download">
                                            <i class="fas fa-download"></i>
                                        </div>
                                    </div>
                                    <div class="image-item">
                                        <div class="img-click">
                                            <img class="" src="themes/main/images/media/3.jpg" alt="">
                                        </div>
                                        <div class="image-item__back">
                                            <i class="far fa-image"></i>
                                            <p  class="text font18">Album</p>
                                        </div>
                                        <div class="image-item__download">
                                            <i class="fas fa-download"></i>
                                        </div>
                                    </div>
                                    <div class="image-item">
                                        <div class="img-click">
                                            <img class="" src="themes/main/images/media/4.jpg" alt="">
                                        </div>
                                        <div class="image-item__back">
                                            <i class="far fa-image"></i>
                                            <p  class="text font18">Album</p>
                                        </div>
                                        <div class="image-item__download">
                                            <i class="fas fa-download"></i>
                                        </div>
                                    </div>
                                    <div class="image-item">
                                        <div class="img-click">
                                            <img class="" src="themes/main/images/media/5.jpg" alt="">
                                        </div>
                                        <div class="image-item__back">
                                            <i class="far fa-image"></i>
                                            <p  class="text font18">Album</p>
                                        </div>
                                        <div class="image-item__download">
                                            <i class="fas fa-download"></i>
                                        </div>
                                    </div>
                                    <div class="image-item">
                                        <div class="img-click">
                                            <img class="" src="themes/main/images/media/6.jpg" alt="">
                                        </div>
                                        <div class="image-item__back">
                                            <i class="far fa-image"></i>
                                            <p  class="text font18">Album</p>
                                        </div>
                                        <div class="image-item__download">
                                            <i class="fas fa-download"></i>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Media',
    props: ['albumImage', 'albumVideo'],

    data() {
        return {
            
        }
    },

    mounted() {
        console.log(this.albumImage)
    },
}
</script>