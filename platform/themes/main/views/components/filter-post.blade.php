<div class="filter-search-media field mt-40">
    <form action="{{$category->url}}/search/media" class="form-search">
        <div class="search">
            <input type="text" class=" form-control form-control-sm " placeholder="Nhập nội dung cần tìm" value="{{Request::get('keyword')}}" name="keyword">
            <button class="btn btn-secondary" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <select class="select-year font18" id="" name="year">
            <option value="all">{{__('Tất cả')}}</option>
            <option value="2021">2021</option>
            <option value="2020">2020</option>
            <option value="2019">2019</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
        </select>
        <select class="select-by-field font18" id="" name="field-activity">
            <option value="">Ô tô - Cơ Khí</option>
            <option value="">Nông nghiệp</option>
            <option value="">Thương mại - dịch vụ</option>
            <option value="">Đầu tư xây dựng</option>
            <option value="">Logistics</option>
        </select>
    </form>
</div>