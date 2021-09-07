<template>
  <v-app>
    <section-main>
      <container-custom>
        <v-breadcrumbs :items="breadcrumb"></v-breadcrumbs>
        <title-section-media>
          <img src="themes/main/images/introduce/arrow.png" alt="" />
          <h2 class="__title font50">HÌNH ẢNH</h2>
        </title-section-media>
      </container-custom>

      <section-media>
        <container-custom>
            <header-section-media>
                <v-row>
                    <v-col md="3">
                        <v-btn-toggle mandatory>
                            <v-btn class="text-capitalize" @click="activeAlternateGallery = !activeAlternateGallery">
                            <v-icon size="18">mdi-image-multiple</v-icon>
                            Album
                            </v-btn>
                            <v-btn class="text-capitalize" @click="activeAlternateGallery = !activeAlternateGallery">
                            <v-icon size="18">mdi-image</v-icon>
                            Hình ảnh
                            </v-btn>
                        </v-btn-toggle>
                    </v-col>

                    <v-col md="9">
                        <v-row>
                            <v-col md="4"> 
                                <v-autocomplete
                                    v-model="model"
                                    :items="itemsSearch"
                                    :loading="isLoading"
                                    :search-input.sync="search"
                                    chips
                                    clearable
                                    hide-details
                                    hide-selected
                                    item-text="name"
                                    item-value="symbol"
                                    label="Nhập nội dung cần tìm..."
                                    solo
                                    append-icon="mdi-magnify"
                                >
                                    <template v-slot:no-data>
                                        <v-list-item>
                                        <v-list-item-title>
                                            Search for your favorite
                                            <strong>Cryptocurrency</strong>
                                        </v-list-item-title>
                                        </v-list-item>
                                    </template>
                                    <template v-slot:selection="{ attr, on, item, selected }">
                                        <v-chip
                                        v-bind="attr"
                                        :input-value="selected"
                                        color="blue-grey"
                                        class="white--text"
                                        v-on="on"
                                        >
                                        <v-icon left> mdi-bitcoin </v-icon>
                                        <span v-text="item.name"></span>
                                        </v-chip>
                                    </template>
                                    <template v-slot:item="{ item }">
                                        <v-list-item-avatar
                                        color="indigo"
                                        class="text-h5 font-weight-light white--text"
                                        >
                                        {{ item.name.charAt(0) }}
                                        </v-list-item-avatar>
                                        <v-list-item-content>
                                        <v-list-item-title v-text="item.name"></v-list-item-title>
                                        <v-list-item-subtitle v-text="item.symbol"></v-list-item-subtitle>
                                        </v-list-item-content>
                                        <v-list-item-action>
                                        <v-icon>mdi-bitcoin</v-icon>
                                        </v-list-item-action>
                                    </template>
                                </v-autocomplete>
                            </v-col>

                            <v-col md="3">
                                <v-menu
                                    ref="menu"
                                    v-model="menu"
                                    :close-on-content-click="false"
                                    :return-value.sync="date"
                                    transition="scale-transition"
                                    offset-y
                                    min-width="auto"
                                >
                                    <template v-slot:activator="{ on, attrs }">
                                        <v-text-field
                                        v-model="date"
                                        label="dd/mm/yyyy"
                                        prepend-icon="mdi-calendar"
                                        readonly
                                        v-bind="attrs"
                                        v-on="on"
                                        ></v-text-field>
                                    </template>
                                    <v-date-picker v-model="date" no-title scrollable>
                                        <v-spacer></v-spacer>
                                        <v-btn text color="primary" @click="menu = false"> Cancel </v-btn>
                                        <v-btn text color="primary" @click="$refs.menu.save(date)"> OK </v-btn>
                                    </v-date-picker>
                                </v-menu>
                            </v-col>
                            <v-col md="2">
                                <v-select :items="items" label="Filter" solo></v-select>
                            </v-col>
                            <v-col md="3">
                                <v-select :items="items" label="Sắp xếp" solo></v-select>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-row>
            </header-section-media>
        </container-custom>

        <div class="tabs-content" v-show="activeAlternateGallery">
          <container-custom>
            <v-row>
              <v-col
                md="4"
                v-for="(item, i) in dataImages"
                :key="i"
                v-if="dataImages.length"
                @click="showModalList(item)"
              >
                <div class="album-item">
                  <a>
                    <img :src="'storage/' + item.image" />
                    <div class="info-item">
                      <div class="album-item__name">
                        <p class="name font20">{{ item.name }}</p>
                      </div>
                      <span class="album-item__date">
                        {{ item.created_at | formatDate("DD/MM/YY") }}
                      </span>
                      <div class="album-item__count">
                        <i class="far fa-image"></i>
                        <p class="quantity font18"> {{ item.album }} </p>
                      </div>
                      <div class="album-item__download">
                        <i class="fas fa-download"></i>
                      </div>
                    </div>
                  </a>
                </div>
              </v-col>
            </v-row>
          </container-custom>
        </div>

        <div class="tabs-content" v-show="!activeAlternateGallery">
          <container-custom>
            <v-row>
              <v-col
                md="4"
                v-for="(item, i) in dataImages"
                :key="i"
                v-if="dataImages.length"
                @click="showModalList(item)"
              >
                <div class="album-item">
                    <img :src="'storage/' + item.image" />
                    <div class="album-item__back">
                      <i class="far fa-image"></i>
                      <p class="text">Album</p>
                    </div>
                    <div class="album-item__download">
                      <a download title="Tải xuống">
                        <i class="fas fa-download text-white"></i>
                      </a>
                    </div>
                </div>
              </v-col>
            </v-row>
          </container-custom>
        </div>

        <div class="text-center">
          <v-pagination
            v-model="paginationGallery.current"
            :length="paginationGallery.total"
            :total-visible="7"
            previous-aria-label
            @input="onChangePageGallery"
          ></v-pagination>
        </div>
      </section-media>

      <section-video>
        <container-custom>
            <header-section-media>
                <v-row>
                    <v-col md="3">
                        <v-btn-toggle mandatory>
                            <v-btn class="text-capitalize" @click="activeAlternateVideo = !activeAlternateVideo">
                            <v-icon size="18">mdi-image-multiple</v-icon>
                            Album
                            </v-btn>
                            <v-btn class="text-capitalize" @click="activeAlternateVideo = !activeAlternateVideo">
                            <v-icon size="18">mdi-image</v-icon>
                            Hình ảnh
                            </v-btn>
                        </v-btn-toggle>
                    </v-col>

                    <v-col md="9">
                        <v-row>
                            <v-col md="4"> 
                                <v-autocomplete
                                    v-model="model"
                                    :items="items"
                                    :loading="isLoading"
                                    :search-input.sync="search"
                                    chips
                                    clearable
                                    hide-details
                                    hide-selected
                                    item-text="name"
                                    item-value="symbol"
                                    label="Nhập nội dung cần tìm..."
                                    solo
                                    append-icon="mdi-magnify"
                                >
                                    <template v-slot:no-data>
                                        <v-list-item>
                                        <v-list-item-title>
                                            Search for your favorite
                                            <strong>Cryptocurrency</strong>
                                        </v-list-item-title>
                                        </v-list-item>
                                    </template>
                                    <template v-slot:selection="{ attr, on, item, selected }">
                                        <v-chip
                                        v-bind="attr"
                                        :input-value="selected"
                                        color="blue-grey"
                                        class="white--text"
                                        v-on="on"
                                        >
                                        <v-icon left> mdi-bitcoin </v-icon>
                                        <span v-text="item.name"></span>
                                        </v-chip>
                                    </template>
                                    <template v-slot:item="{ item }">
                                        <v-list-item-avatar
                                        color="indigo"
                                        class="text-h5 font-weight-light white--text"
                                        >
                                        {{ item.name.charAt(0) }}
                                        </v-list-item-avatar>
                                        <v-list-item-content>
                                        <v-list-item-title v-text="item.name"></v-list-item-title>
                                        <v-list-item-subtitle v-text="item.symbol"></v-list-item-subtitle>
                                        </v-list-item-content>
                                        <v-list-item-action>
                                        <v-icon>mdi-bitcoin</v-icon>
                                        </v-list-item-action>
                                    </template>
                                </v-autocomplete>
                            </v-col>

                            <v-col md="3">
                                <v-menu
                                    ref="menu"
                                    v-model="menu"
                                    :close-on-content-click="false"
                                    :return-value.sync="date"
                                    transition="scale-transition"
                                    offset-y
                                    min-width="auto"
                                >
                                    <template v-slot:activator="{ on, attrs }">
                                        <v-text-field
                                        v-model="date"
                                        label="dd/mm/yyyy"
                                        prepend-icon="mdi-calendar"
                                        readonly
                                        v-bind="attrs"
                                        v-on="on"
                                        ></v-text-field>
                                    </template>
                                    <v-date-picker v-model="date" no-title scrollable>
                                        <v-spacer></v-spacer>
                                        <v-btn text color="primary" @click="menu = false"> Cancel </v-btn>
                                        <v-btn text color="primary" @click="$refs.menu.save(date)"> OK </v-btn>
                                    </v-date-picker>
                                </v-menu>
                            </v-col>
                            <v-col md="2">
                                <v-select :items="items" label="Filter" solo></v-select>
                            </v-col>
                            <v-col md="3">
                                <v-select :items="items" label="Sắp xếp" solo></v-select>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-row>
            </header-section-media>
        </container-custom>

        <div class="tabs-content" v-show="activeAlternateVideo">
          <container-custom>
            <v-row>
              <v-col
                md="4"
                v-for="(item, i) in dataVideos"
                :key="i"
                v-if="dataVideos.length"
              >
                <div class="album-item">
                  <a>
                    <img :src="'storage/' + item.image" />
                    <div class="info-item">
                      <div class="album-item__name">
                        <p class="name font20">{{ item.name }}</p>
                      </div>
                      <span class="album-item__date">
                        {{ item.created_at | formatDate("DD/MM/YY") }}
                      </span>
                      <div class="album-item__count">
                        <i class="far fa-image"></i>
                        <p class="quantity font18">{{ item.album }}</p>
                      </div>
                      <div class="album-item__download">
                        <i class="fas fa-download"></i>
                      </div>
                    </div>
                  </a>
                </div>
              </v-col>
            </v-row>
          </container-custom>
        </div>

        <div class="tabs-content" v-show="!activeAlternateVideo">
          <container-custom>
            <v-row>
              <v-col
                md="4"
                v-for="(image, i) in dataVideos"
                :key="i"
                v-if="dataVideos.length"
              >
                <div class="album-item">
                  <a href="">
                    <img :src="'storage/' + image.image" />
                    <div class="album-item__back">
                      <i class="far fa-image"></i>
                      <p class="text">Album</p>
                    </div>
                    <div class="album-item__download">
                      <a download title="Tải xuống">
                        <i class="fas fa-download text-white"></i>
                      </a>
                    </div>
                  </a>
                </div>
              </v-col>
            </v-row>
          </container-custom>
        </div>

        <div class="text-center">
          <v-pagination
            v-model="paginationVideo.current"
            :length="paginationVideo.total"
            :total-visible="7"
            previous-aria-label
            @input="onChangePageVideo"
          ></v-pagination>
        </div>
      </section-video>
    </section-main>

        <v-dialog
            v-model="dialog"
            width="60%"
            height="80vh"
        >
            <modal-dialog>
                <h3 class="name font28 mb-6">
                    THACO giới thiệu thương hiệu PEUGEOT &amp; xe PEUGEOT 408 tại Việt...
                </h3>
                <vue-custom-scrollbar class="scroll-area"  :settings="settings" @ps-scroll-y="scrollHanle">
                 <div class="list-image">
                    <div class="item"
                        v-for="(item, i) in dataModalList"
                        :key="i"
                        v-if="dataModalList.length">
                        <img :src="'storage/' + item.img" class="mw-100" />
                    </div>
                </div>
                </vue-custom-scrollbar>
            </modal-dialog>
        </v-dialog>

        <section-fixed
        v-show="loading">
            <v-progress-circular
                indeterminate
                color="primary"
            ></v-progress-circular>
        </section-fixed>
  </v-app>
</template>

<script>

import {
  TitleSectionMedia,
  ContainerCustom,
  SectionMedia,
  SectionVideo,
  SectionMain,
  HeaderSectionMedia,
  ModalDialog,
  SectionFixed
} from "./Media.style";

import ModalList from '../../components/Modal-List';
import vueCustomScrollbar from 'vue-custom-scrollbar'
import "vue-custom-scrollbar/dist/vueScrollbar.css"

export default {
  name: "Media",
  data() {
    return {
        settings: {
        suppressScrollY: false,
        suppressScrollX: false,
        wheelPropagation: false
      },
      breadcrumb: [
        {
          text: "Trang chủ",
          disabled: false,
          href: "breadcrumbs_dashboard",
        },
        {
          text: "Truyền thông",
          disabled: false,
          href: "breadcrumbs_link_1",
        },
        {
          text: "Media",
          disabled: true,
          href: "breadcrumbs_link_2",
        },
      ],
      activeAlternateGallery: true,
      activeAlternateVideo: true,
      showAlbum: true,
      showImage: false,
      category: {
        galleryId: this.galleryId,
      },
      dataImages: [],
      dataVideos: [],
      paginationGallery: {
        current: 1,
        total: 2,
      },
      paginationVideo: {
        current: 1,
        total: 0,
      },
      itemsSearch: [],
      dataModalList: [],
      dialog: false,
      loading: false,
    };
  },
  props: ["galleryId"],
  components: {
    TitleSectionMedia,
    ContainerCustom,
    SectionMedia,
    SectionMain,
    HeaderSectionMedia,
    SectionVideo,
    ModalList,
    ModalDialog,
    SectionFixed,
    vueCustomScrollbar
  },

  methods: {
    getGallery: function () {
      if (this.category.galleryId) {
        this.$http
          .get(
            `/api/media/gallery/${this.category.galleryId}?page=${this.paginationGallery.current}`
          )
          .then((response) => {
            if (response.status === 200) return response.data.data;
          })
          .then((data) => {
            this.dataImages = data.data;
            this.paginationGallery.current = data.current_page;
            this.paginationGallery.total = data.last_page;
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },

    getVideo: function () {
      if (this.category.galleryId) {
        this.$http
          .get(
            `/api/media/video/${this.category.galleryId}?page=${this.paginationVideo.current}`
          )
          .then((response) => {
            if (response.status === 200) return response.data.data;
          })
          .then((data) => {
            this.dataVideos = data.data;
            this.paginationVideo.current = data.current_page;
            this.paginationVideo.total = data.last_page;
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },

    onChangePageGallery: function () {
      this.getGallery();
    },

    onChangePageVideo: function () {
      this.getVideo();
    },
    showModalList: function(item) {
        this.loading = true;
        this.gallery_meta_data(item.slugable.key)
       
    },
    gallery_meta_data: function(slug) {
       if (slug) {
        this.$http
          .get(
            `/api/gallery_meta_data/${slug}`
          )
          .then((response) => {
            if (response.status === 200) return response.data.data;
          })
          .then(data=> {
              this.dataModalList = data
              this.dialog = true;
              this.loading =false;
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },
    scrollHanle(evt) {
      console.log(evt)
    }
  },

  mounted() {
    this.getGallery();
    this.getVideo();
  },
};
</script>

<style>
    .v-dialog {
      overflow :hidden;
    }
    .scroll-area {
        height: 70vh;
        background-color: #f1f1f1;
    }

    /* .scroll-area .ps__rail-y {
      background-color: gray;
    }

    .scroll-area .ps_rail-y .ps__thumb-y {
      background-color: white;
    } */
</style>