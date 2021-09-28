<template>
  <div class="filter-media">
    <form action="" @submit="submitForm">
      <div class="list-tool">
        <div class="search">
          <input
            type="text"
            class="form-control form-control-sm"
            placeholder="Nhập nội dung cần tìm"
            value=""
            name="keyword"
            autocomplete="off"
            v-model="keyword"
          />
          <button class="btn btn-secondary" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
        <div class="calender">
          <div
            id="date-picker-example"
            class="md-form md-outline input-with-post-icon datepicker"
          >
            <input
              type="date"
              @change="changeDate($event)"
              id="datepicker"
              name="date"
              class="font15"
            />
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
              <option value="" selected disabled>Sắp xếp</option>
              <option value="new">Thời gian mới nhất</option>
              <option value="old">Thời gian cũ nhất</option>
              <option value="a-z">Từ A-Z</option>
              <option value="z-a">Từ Z-A</option>
            </select>
          </div>
        </div>

        <div class="dropdown-filter-mobile">
          <div class="dropdownn">
            <button
              class="btn btn-default dropdown-toggle"
              type="button"
              data-toggle="dropdown"
            >
              Lọc <i class="fal fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-lg-end">
              <li class="dropdown-submenu">
                <a class="test d-inline-block w-100" tabindex="-1" href="#"
                  >Thời gian <i class="fal fa-angle-down date-mobile"></i
                ></a>
                <ul class="dropdown-menu datepicker-mobile click-show">
                  <li>
                    <a tabindex="-1" href="#">
                      <!-- <div
                        id="date-picker-example"
                        class="md-form md-outline input-with-post-icon datepicker"
                      >
                        <input
                          type="date"
                          @change="changeDate($event)"
                          id="datepicker"
                          name="calendars"
                          class="font15"
                        />
                      </div> -->
                  
                      <div class="datepicker">
                         
                        <input type="date" id="datepicker" name="calendars" class="font15">
                        <ion-icon name="calendar-outline" class="font15 calendar md hydrated" role="img" aria-label="calendar outline"></ion-icon>
                    </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="test d-inline-block w-100" tabindex="-1" href="#"
                  >Ngành nghề <i class="fal fa-angle-down filter-mobile"></i
                ></a>
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
                <a class="test d-inline-block w-100" tabindex="-1" href="#"
                  >Sắp xếp <i class="fal fa-angle-down sort-mobile-down"></i
                ></a>
                <div class="sort-list-mobile dropdown-menu click-show">
                  <select
                    name="sort"
                    class="font18 js-example-basic-single"
                    placeholder="Sắp xếp"
                  >
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
</template>

<script>
export default {
  name: 'MediaFilter',
  data() {
    return {
      filterParams: {
        keyword: '',
        date: '',
        categoryId: 15,
        sort: '',
        format_type: this.mediaType
      },
    };
  },

  methods: {
      changeDate(e){
        this.filterParams.date = e.target.value
        this.onFilter(this.filterParams)
      },

      submitForm(e){
        e.preventDefault();
        this.filterParams.keyword = e.target.elements.keyword.value
        this.onFilter(this.filterParams)
      },
  },

  props: {
    url: {
      type: String,
      default: '',
    },
    mediaType: {
      type: String,
      default: '',
    },
    onFilter: {
      type: Function,
      default: () => null
    }
  }
};
</script>
