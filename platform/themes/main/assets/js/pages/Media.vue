<template>
    <div>
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

                            <div class="filter-media ">
                                <form action="">
                                    <div class="list-tool">
                                        <div class="search">
                                            <input type="text" class=" form-control form-control-sm " placeholder="Nhập nội dung cần tìm" value="" name="q">
                                            <button class="btn btn-secondary" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                        <div class="calender">
                                            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
                                                <input type="date" id="datepicker" name="calendars" autocomplete="off" class="font15">
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
                                                <select name="" id=""  class="sort-time font18 js-example-basic-single">
                                                    <option value="" selected disabled>
                                                        Sắp xếp
                                                    </option>
                                                    <option value="">Thời gian mới nhất</option>
                                                    <option value="">Thời gian cũ nhất</option>
                                                    <option value="">Từ A-Z</option>
                                                    <option value="">Từ Z-A</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-content" id="nav-tabContent3 tab-content2">
                            <div class="tab-pane fade active show" id="media-album" role="tabpanel" aria-labelledby="field-1-tab">
                                <div class="media-banner">
                                    <div class="list-album">
                                        <div class="album-item" data-target="#album_modal" data-toggle="modal" v-for="(item) in dataImage.data">
                                            <div class="album-item__img" @click="loadGallery(item.id)">
                                                <img :src="'storage/'+item.image" alt="">
                                            </div>
                                            <div class="album-item__name ">
                                                <p class="name font20">
                                                {{item.name}}                                         
                                                </p>
                                            </div>
                                            <span class="album-item__date">{{item.created_at | formatDate('d/m/Y')}}</span>
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
                                        <div class="image-item" v-for="(item) in dataImage.data">
                                            <div class="image-item__img">
                                                <img class="" :src="'storage/'+item.image" alt="">
                                            </div>
                                            <div class="image-item__back">
                                                <i class="far fa-image"></i>
                                                <p  class="text font18">Album</p>
                                            </div>
                                            <div class="image-item__download">
                                                <a download :href="'storage/'+item.image"title="Tải xuống">
                                                    <i class="fas fa-download text-white"></i>
                                                </a>
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

        <modal name="my-first-modal">
            <div class="modal-main p-4">
                <div class="modal-header-custom">
                    <p class="text-right">
                        <button class="btn-close border-0 font30 font-weight-normal bg-white" @click="hideModalAlbumImage">
                            <i class="fas fa-times"></i>
                        </button>
                    </p>
                    <h2 class="name font28 text-center mb-4 font-weight-bold">
                        THACO tài trợ trang thiết bị, vật tư y tế phòng chống dịch cho Công an TP.HCM
                    </h2>
                </div>
                <div class="modal-body-custom">
                    <vue-custom-scrollbar class="scroll-area"  :settings="settingsScrollbar">
                        <div class="row m-n2">
                            <div class="col-lg-4 p-2" v-for="(item) in galleryImage">
                                <div class="box-img">
                                    <img :src="'storage/'+item.img" class="mw-100 fit-cover" /> 
                                </div>
                            </div>
                        </div>
                    </vue-custom-scrollbar>
                </div>
            </div>
        </modal>
    </div>
</template>

<script>
import vueCustomScrollbar from 'vue-custom-scrollbar'
import "vue-custom-scrollbar/dist/vueScrollbar.css"

export default {
    name: 'Media',
    props: ['albumImage', 'albumVideo'],
    components: {
        vueCustomScrollbar
    },

    data() {
        return {
            dataImage: JSON.parse(this.albumImage),
            dataVideo: JSON.parse(this.albumVideo),
            galleryImage: [],
            settingsScrollbar: {
                suppressScrollY: false,
                suppressScrollX: false,
                wheelPropagation: false
            }
        }
    },

    methods: {
        loadGallery: function(id) {
            this.$http.get('api/get/gallery/post/'+id,)
                .then(response=> {
                    return response.data.data
                })
                .then(response=> {
                    this.galleryImage = response
                    this.showModalAlbumImage();
                })
                .catch(error=> {
                    console.log(error)
                })
        },

        showModalAlbumImage () {
            this.$modal.show('my-first-modal');
        },
        hideModalAlbumImage () {
            this.$modal.hide('my-first-modal');
        }
    },

    mounted() {
       
    },
}
</script>

<style>
    .vm--modal {
        height: 80vh !important;
        width: 60% !important;
        top: 50% !important;
        left: 50% !important;
        transform: translate(-50%, -50%);
    }

    .fit-cover {
        object-fit: cover;
    }
</style>