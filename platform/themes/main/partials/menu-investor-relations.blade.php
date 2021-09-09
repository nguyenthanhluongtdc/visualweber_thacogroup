
@php
    $check = false; 
@endphp
<div class="relationship-sibar">
    <div class="relationship__content">
        <div class="list-relationship-menu" data-aos="flip-right" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
            <h3 class="font28 font-myria-bold"> {!! __('QUAN HỆ CỔ ĐÔNG') !!} </h3>
                @foreach ($menu_nodes as $key => $row)
                    <a href="{{$row->url}}" class="item_link list-group-item font18 font-myria-bold {{url()->current()==$row->url?'active':''}}"> {{$row->title}} </a>

                    @php 
                        if( url()->current()==$row->url) {
                            $check = true;
                        }
                    @endphp
                @endforeach
            {{-- <a href="/cong-bo-thong-tin" class="item_link list-group-item  font18 font-myria-bold">Công bố thông tin</a>
            <a href="/thong-tin-co-dong" class="item_link list-group-item  font18 font-myria-bold ">Thông tin cổ đông</a>
            <a href="/bao-cao-thuong-nien" class="item_link list-group-item  font18 font-myria-bold">Báo cáo thường niên</a>
            <a href="/bao-cao-tai-chinh" class="item_link list-group-item  font18 font-myria-bold">Báo cáo tài chính</a> --}}
        </div>
    </div>
</div>

<script>
    let scroll = "{{$check}}";
    if(scroll) {
        let position = $('.relationship-sibar').position();
        $('html, body').animate({
            scrollTop: position.top-100
        }, 1500);
    }
</script>