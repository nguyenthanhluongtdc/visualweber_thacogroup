<template>
  <div class="page-pagination mt-40 mb-40">
    <ul class="pagination font18">
        <li class="page-item" v-for="page in pages" :key="page.name">
            <button class="page-link"  @click="onClickPage(page.name)" :disabled="page.isDisabled" :class="{ active: isPageActive(page.name) }">
                {{ page.name }}
            </button>
        </li>
        <li class="page-item">
            <button class="page-link" @click="onClickNextPage" :disabled="isInLastPage">
                >
            </button>
        </li>
        <li class="page-item">
            <button class="page-link"  @click="onClickLastPage" :disabled="isInLastPage">
                >>
            </button>
        </li>
    </ul>
</div> 
</template>

<script>
export default {
    name: 'Paginationn',
    props: {
        maxVisibleButtons: {
            type: Number,
            required: false,
            default: 3
        },
        totalPages: {
            type: Number,
            required: true
        },
        perPage: {
            type: Number,
            required: true
        },
        currentPage: {
            type: Number,
            required: true
        }
    },
    computed: {
        startPage() {
            // When on the first page
            if (this.currentPage === 1) {
                return 1;
            }

            // When on the last page
            if (this.currentPage === this.totalPages) {
                return this.totalPages - this.maxVisibleButtons;
            }

            // When inbetween
            return this.currentPage - 1;
        },
        pages() {
            const range = [];

            for (
                let i = this.startPage;
                i <= Math.min(this.startPage + this.maxVisibleButtons - 1, this.totalPages);
                i++
            ) {
                range.push({
                name: i,
                isDisabled: i === this.currentPage
                });
            }

            return range;
        },

        isInFirstPage() {
            return this.currentPage === 1;
        },
        isInLastPage() {
            return this.currentPage === this.totalPages;
        },
    },

    methods: {
        onClickFirstPage() {
            this.$emit('pagechanged', 1);
        },
        onClickPreviousPage() {
            this.$emit('pagechanged', this.currentPage - 1);
        },
        onClickPage(page) {
            this.$emit('pagechanged', page);
        },
        onClickNextPage() {
            this.$emit('pagechanged', this.currentPage + 1);
        },
        onClickLastPage() {
            this.$emit('pagechanged', this.totalPages);
        },
        isPageActive(page) {
            return this.currentPage === page;
        }
    }
};
</script>


<style>

.page-item .page-link.active {
  background-color: #0B5CA8;
  color: #ffffff !important;
}
</style>