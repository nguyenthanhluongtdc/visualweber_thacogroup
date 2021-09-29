<template>
  <div>
    <div class="media-content">
      <!---gallery--->
      <div class="media-wrapper">
        <div class="container-customize">
          <div
            class="image__title"
            data-aos="fade-right"
            data-aos-duration="700"
            data-aos-delay="50"
          >
            <img src="themes/main/images/introduce/arrow.png" alt="" />
            <h1 class="font50 big-title"> {{__('Hình ảnh')}} </h1>
          </div>

          <div class="tab-image">
            <div class="media__tabs">
              <ul class="nav nav-tabs" id="tab-media" role="tablist">
                <li class="__tabs__item" role="media">
                  <a
                    class="__tabs__link nav-link active"
                    id="media-album-tab"
                    data-toggle="tab"
                    role="tab"
                    aria-controls="media-image"
                    aria-selected="true"
                    href="#media-album"
                    :title="__('Tất Cả')"
                  >
                    <i class="far fa-images"></i>
                    {{__('Albums')}}
                  </a>
                </li>
                <li class="__tabs__item" role="media">
                  <a
                    class="__tabs__link nav-link"
                    id="media-single-image-tab"
                    data-toggle="tab"
                    role="tab"
                    aria-controls="media-video"
                    aria-selected="true"
                    href="#media-single-image"
                    :title="__('Tất Cả')"
                  >
                    <i class="fas fa-image"></i>
                    {{__('Hình ảnh')}}
                  </a>
                </li>
              </ul>

                <media-filter 
                    :on-filter="galleryFilter" 
                    :media-type="'gallery'" />
                
            </div>

            <div class="tab-content" id="nav-tabContent3 tab-content2" v-show="!loadingImage">
              <div
                class="tab-pane fade active show"
                id="media-album"
                role="tabpanel"
                aria-labelledby="field-1-tab"
              >
                <div class="media-banner">
                  <div class="list-album">
                    <div
                      class="album-item"
                      data-target="#album_modal"
                      data-toggle="modal"
                      v-if="dataImage"
                      v-for="item in dataImage.data"
                      :key="item.id"
                    >
                      <div class="album-item__img" @click="loadAlbumGallery(item.id, 'album')">
                        <img :src="'storage/' + item.image" alt="" />
                      </div>
                      <div class="album-item__name">
                        <p class="name font20">
                          {{ item.name }}
                        </p>
                      </div>
                      <span class="album-item__date">{{
                        item.created_at | formatDate("DD-MM-YYYY")
                      }}</span>
                      <div class="album-item__count">
                        <i class="far fa-image"></i>
                        <p class="quantity font18"> {{item.album_total}} </p>
                      </div>
                      <div
                        :title="__('Tải xuống album')"
                        class="album-item__download"
                        @click="zipDownload(item.id)"
                      >
                        <i class="fas fa-download"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="tab-pane fade"
                id="media-single-image"
                role="tabpanel"
                aria-labelledby="field-2-tab"
              >
                <div class="media-banner">
                  <div class="list-image">
                    <div
                      class="image-item"
                      v-if="dataImage"
                      v-for="item in dataImage.data"
                      :key="item.id"
                    >
                      <div class="image-item__img" @click="loadAlbumGallery(item.id)">
                        <img class="" :src="'storage/' + item.image" alt="" />
                      </div>
                      <div
                        class="image-item__back"
                        @click="loadAlbumGallery(item.id, 'album')"
                      >
                        <i class="far fa-image"></i>
                        <p class="text font18">{{__('Album')}}</p>
                      </div>
                      <div class="icon--download">
                        <a download :href="'storage/' + item.image" :title="__('Tải xuống')">
                          <i class="fas fa-download text-white"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="loading" v-show="loadingImage">
              <img src="themes/main/images/media/loading.gif" alt="Loading">
            </div>
          </div>

          <paginationn
            v-if="dataImage.data"
            :data="dataImage"
            @pagination-change-page="onChangePageImage"
          >
          </paginationn>
        </div>
      </div>
      <!---end gallery---->

      <!---video--->
      <div class="media-wrapper mt-5">
        <div class="container-customize">
          <div
            class="image__title"
            data-aos="fade-right"
            data-aos-duration="700"
            data-aos-delay="50"
          >
            <img src="themes/main/images/introduce/arrow.png" alt="" />
            <h1 class="font50 big-title">Video</h1>
          </div>

          <div class="tab-video">
            <div class="media__tabs">
              <ul class="nav nav-tabs" id="tab-media" role="tablist">
                <li class="__tabs__item" role="media">
                  <a
                    class="__tabs__link nav-link active"
                    id="media-video-tab"
                    data-toggle="tab"
                    role="tab"
                    aria-controls="media-video"
                    aria-selected="true"
                    href="#media-video"
                    title="Tất Cả"
                  >
                    <i class="far fa-images"></i>
                    Albums
                  </a>
                </li>
                <li class="__tabs__item" role="media">
                  <a
                    class="__tabs__link nav-link"
                    id="media-single-video-tab"
                    data-toggle="tab"
                    role="tab"
                    aria-controls="media-single-video"
                    aria-selected="true"
                    href="#media-single-video"
                    title="Tất Cả"
                  >
                    <i class="fas fa-image"></i>
                    Video
                  </a>
                </li>
              </ul>

              <media-filter 
                :on-filter="videoFilter" 
                :media-type="'video'" />

            </div>

            <div class="tab-content" id="nav-tabContent3 tab-content2" v-show="!loadingVideo">
              <div
                class="tab-pane fade active show"
                id="media-video"
                role="tabpanel"
                aria-labelledby="field-1-tab"
              >
                <div class="list-video-wrapper">
                  <div class="list-video">
                    <div
                      class="video-item"
                      data-target="#album_modal"
                      data-toggle="modal"
                      v-if="dataVideo"
                      v-for="item in dataVideo.data"
                      :key="item.id"
                    >
                      <div
                        class="video-thumbnail"
                        @click="loadGalleryVideo(item.id, 'album')"
                      >
                        <img :src="'storage/' + item.image" alt="" />
                      </div>
                      <div class="video-item__name font20">
                        <p class="name font20">
                          {{ item.name }}
                        </p>
                      </div>
                      <span class="video-item__date">{{
                        item.created_at | formatDate("DD-MM-YYYY")
                      }}</span>
                      <div class="video-item__count">
                        <i class="fas fa-photo-video"></i>
                        <p class="quantity font18">{{item.album_total}}</p>
                      </div>
                      <!-- <div title="Tải xuống album" class="video-item__download" @click="zipDownload(item.id)">
                        <i class="fas fa-download"></i>
                    </div> -->
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="tab-pane fade"
                id="media-single-video"
                role="tabpanel"
                aria-labelledby="field-2-tab"
              >
                <div class="media-video mCustomScrollbar" data-mcs-theme="dark">
                  <div class="list-video">
                    <div class="left">
                      <div class="video-main" v-if="videoPlay">
                        <div class="video-wrapper">
                          <!-- <video muted loop  autoplay class="__video w-100">
                                <source src="themes/main/images/video/chuc-mung-nam-moi.mp4" type="video/mp4">
                            </video>  -->

                          <iframe
                            class="youtube-player"
                            id="player"
                            type="text/html"
                            :src="
                              'https://www.youtube.com/embed/' +
                              videoPlay.youtube_code +
                              '?wmode=opaque&autohide=1&enablejsapi=1'
                            "
                            frameborder="0"
                            muted="muted"
                          ></iframe>
                        </div>
                        <p class="name font30">
                          {{ dataVideo.name }}
                        </p>
                      </div>
                    </div>
                    <div class="right">
                      <div class="list-video-left">
                        <div
                          class="video-item"
                          v-if="dataVideo"
                          v-for="item in dataVideo.data"
                          :key="item.id"
                        >
                          <div class="img-button" @click="changeVideoPlay(item)">
                            <img :src="'storage/' + item.image" alt="" />
                            <i class="far fa-play-circle button-video"></i>
                          </div>
                          <p class="name font20">
                            {{ item.name }}
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="loading" v-show="loadingVideo">
              <img src="themes/main/images/media/loading.gif" alt="Loading">
            </div>
          </div>

          <paginationn
            v-if="dataVideo.data"
            :data="dataVideo"
            @pagination-change-page="onChangePageVideo"
          >
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
            <button
              class="btn-close border-0 font30 font-weight-normal bg-white"
              @click="hideModalAlbumImage"
            >
              <i class="fas fa-times"></i>
            </button>
          </p>
          <PuSkeleton circle height="50px" :count="5">
            <h2 class="name font28 text-center mb-4 font-weight-bold">
              {{ galleryImage.name }}
            </h2>
          </PuSkeleton>
        </div>

        <div class="modal-body-custom">
          <vue-custom-scrollbar class="scroll-area" :settings="settingsScrollbar">
            <div class="list-item">
              <div
                class="item"
                v-if="galleryImage"
                v-for="(item, i) in galleryImage.data"
                :key="i"
              >
                <div class="box-img" @click="showModalSliderImage">
                  <img :src="'storage/' + item.img" class="fit-cover" />
                </div>
                <div class="icon--download">
                  <a download :href="'storage/' + item.img" :title="__('Tải xuống')">
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
      <div class="modal-main">
        <div class="modal-header-custom">
          <p class="text-right mb-0">
            <button
              class="btn-close border-0 font30 font-weight-normal bg-white"
              @click="hideModalAlbumVideo"
            >
              <i class="fas fa-times"></i>
            </button>
          </p>
          <PuSkeleton circle height="50px" :count="5">
            <h2 class="name font28 text-center mb-4 font-weight-bold">
              {{ galleryVideo.name }}
            </h2>
          </PuSkeleton>
        </div>

        <div class="modal-body-custom">
          <vue-custom-scrollbar class="scroll-area" :settings="settingsScrollbar">
            <div class="list-item">
              <div
                class="item"
                v-if="galleryVideo"
                v-for="(item, i) in galleryVideo.data"
                :key="i"
              >
                <div class="box-img" @click="showModalSliderVideo(item)">
                  <img
                    :src="
                      'http://img.youtube.com/vi/' + item.youtube_code + '/mqdefault.jpg'
                    "
                    class="fit-cover"
                  />
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
            <button
              class="btn-close border-0 font30 font-weight-normal bg-white"
              @click="hideModalSliderImage"
            >
              <i class="fas fa-times"></i>
            </button>
          </p>
          <h2 class="name font28 text-center font-weight-bold">
            {{ galleryImage.name }}
          </h2>
        </div>

        <div class="modal-body-custom">
          <template>
            <div class="swiper-galleryImage h-100">
              <swiper ref="galleryImage" class="swiper" :options="swiperOptions">
                <swiper-slide
                  v-if="galleryImage"
                  v-for="(item, i) in galleryImage.data"
                  :key="i"
                >
                  <img
                    :src="'storage/' + item.img"
                    alt=""
                    class="w-100 h-100 fit-cover"
                  />
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
            <button
              class="btn-close border-0 font30 font-weight-normal bg-white"
              @click="hideModalSliderVideo"
            >
              <i class="fas fa-times"></i>
            </button>
          </p>
          <h2 class="name font28 text-center font-weight-bold">
            {{ itemVideoDetail.description }}
          </h2>
        </div>

        <div class="modal-body-custom">
          <iframe
            width="420"
            class="w-100"
            height="345"
            :src="'https://www.youtube.com/embed/' + itemVideoDetail.youtube_code"
          ></iframe>
        </div>
      </div>
    </modal>
    <!---end modal-detail--->
  </div>
</template>

<script>
  //custom-scrollbar
  import vueCustomScrollbar from "vue-custom-scrollbar";
  import "vue-custom-scrollbar/dist/vueScrollbar.css";

  //pagination
  import Paginationn from "laravel-vue-pagination";
  import MediaFilter from '../components/MediaFilter';

//swiper use gallery
  import {
    Swiper as SwiperClass,
    Pagination,
    Navigation,
    Keyboard,
    Mousewheel,
  } from "swiper/js/swiper.esm";

  import getAwesomeSwiper from "vue-awesome-swiper/dist/exporter";
  const { Swiper, SwiperSlide } = getAwesomeSwiper(SwiperClass);

  // Swiper modules
  SwiperClass.use([Pagination, Navigation, Keyboard, Mousewheel]);

  export default {
    //export component
    name: "Media",

    //get props
    props: ["categoryId", "perPage", "totalPages"],

    //import component
    components: {
      vueCustomScrollbar,
      Swiper,
      SwiperSlide,
      Pagination,
      Keyboard,
      Mousewheel,
      MediaFilter,
      Paginationn
    },

    //init data
    data() {
      return {
        //gallery
        swiperOptions: {
          slidesPerView: 1,
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
          },
          keyboard: {
            enabled: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        },
        indexItem: -1,

        settingsScrollbar: {
          suppressScrollY: false,
          suppressScrollX: true,
          wheelPropagation: false,
        },

        menuFilterImage: [],

        //gallery
        dataImage: [],
        galleryImage: [],
        loadingImage: false,
        filterParamsImage: {
          keyword: '',
          date: '',
          categoryId: this.categoryId,
          sort: '',
          format_type: 'gallery',
          page: 1
        },

        //video
        dataVideo: [],
        galleryVideo: [],
        itemVideoDetail: [],
        videoPlay: [],
        loadingVideo: false,
        filterParamsVideo: {
          keyword: '',
          date: '',
          categoryId: 15,
          sort: '',
          format_type: 'video',
          page: 1
        },
      };
    },

    //event watch
    watch: {
    
    },

    //init method
    methods: {
      //gallery
      galleryFilter(filter = null) {
          this.loadingImage = true;
          
          setTimeout(() => {
            if(filter!=null) this.filterParamsImage = filter

            this.apiLoadMedia(this.filterParamsImage, this.setDataImage)
          }, 500);
      },

      setDataImage(data) {
        this.dataImage = data
        this.loadingImage = false;
      },

      onChangePageImage(page) {
        this.filterParamsImage.page = page
        this.galleryFilter()
      },

      loadAlbumGallery: async function (id, album = "") {
        if (this.indexItem != id) {
          this.indexItem = id;

          await this.$http
            .get("api/album/image/", {
              params: {
                id: id
              }
            })
            .then(({data}) => {
              this.galleryImage = data;
              this.showGallery(album);
            })
            .catch((error) => {
              console.log(error);
            });
        } else {
          this.showGallery(album);
        }
      },

      //video
      videoFilter(filter = null) {
        this.loadingVideo = true;

        setTimeout(() => {
          if(filter!=null) this.filterParamsVideo = filter
          this.apiLoadMedia(this.filterParamsVideo, this.setDataVideo)
        }, 500);
      },

      setDataVideo(data) {
        this.dataVideo = data
        this.loadingVideo = false;
      },
      onChangePageVideo(page) {
        this.filterParamsVideo.page = page 
        this.videoFilter()
      },

      //change video play
      changeVideoPlay: function (video) {
        this.videoPlay = video;
      },

      loadGalleryVideo: async function (id, album = "") {
        if (this.indexItem != id) {
          this.indexItem = id;

          await this.$http
            .get("api/album/video", {
              params: {
                id: id
              }
            })
            .then(({data}) => {
              this.galleryVideo = data;
              this.showGalleryVideo(album);
            })
            .catch((error) => {
              console.log(error);
            });
        } else {
          this.showGalleryVideo(album);
        }
      },

      apiLoadMedia(filter, cb) {
          this.$http
          .get("api/media/gallery", {
            params: {
              ...filter
            }
          })
          .then(({data}) => {
            return data
          })
          .then(({data})=> {
            cb(data)
          })
          .catch((error) => {

          });
      },


      //hide show modal
      showGallery: function (album) {
        if (album) {
          this.showModalAlbumImage();
        } else {
          this.showModalSliderImage();
        }
      },

      showGalleryVideo: function (album) {
        if (album) {
          this.showModalAlbumVideo();
        } else {
          this.showModalSliderVideo();
        }
      },

      showModalAlbumImage: function () {
        this.$modal.show("albumImage-modal");
      },
      hideModalAlbumImage: function () {
        this.$modal.hide("albumImage-modal");
      },
      showModalSliderImage: function () {
        this.$modal.show("sliderImage-modal");
      },
      hideModalSliderImage: function () {
        this.$modal.hide("sliderImage-modal");
      },

      showModalAlbumVideo: function () {
        this.$modal.show("albumVideo-modal");
      },
      hideModalAlbumVideo: function () {
        this.$modal.hide("albumVideo-modal");
      },
      showModalSliderVideo: function (item) {
        this.itemVideoDetail = item;
        this.$modal.show("sliderVideo-modal");
      },
      hideModalSliderVideo: function () {
        this.$modal.hide("sliderVideo-modal");
      },

      zipDownload: async function (id) {
        await this.$http
          .post("api/download/album/image/", { id: id })
          .then((response) => {
            window.location = response.data;
          })
          .catch((error) => {
            console.log(error);
          });
      },
      loadMenuFilter: async function (location) {
        await this.$http
          .post("api/get/menu/", { location: location })
          .then((response) => {
            return response.data;
          })
          .then((response) => {
            this.menuFilterImage = response.data;
          })
          .catch((error) => {
            console.log(error);
          });
      },
    
    },

    //computed
    computed: {
      
    },

    //mouted run when document load all
    mounted() {
      this.galleryFilter()
      this.videoFilter();
      //menu filter
      this.loadMenuFilter("photo-gallery-menu");
    },
  };

  $(document).ready(function () {
    $(".dropdown-submenu a.test").on("click", function (e) {
      $(".click-show").hide();
      $(this).next(".click-show").toggle();
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
  .loading {
    height: 100px;
    text-align: center;
  }

  .loading img {
    max-height: 100%;
  }
</style>
