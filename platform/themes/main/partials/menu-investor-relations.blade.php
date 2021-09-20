
@php
    $check = false; 
@endphp
<div class="relationship-sibar">
    <div class="relationship__content">
        <div class="list-relationship-menu" data-aos="flip-right" data-aos-duration="500" data-aos-delay="50" class="aos-init aos-animate">
            <h3 class="font28 font-myria-bold"> {!! __('QUAN HỆ CỔ ĐÔNG') !!} </h3>
                @foreach ($menu_nodes as $key => $row)
                    <a href="{{$row->url}}" class="item_link list-group-item font18 font-myria-bold {{$options==$row->reference_id?'active':''}}"> {{$row->title}} </a>

                    @php 
                        if( $options==$row->reference_id) {
                            $check = true;
                        }
                    @endphp
                @endforeach
        </div>
    </div>
</div>

<script>
   
   if (screen.width > 1080) {
    let scroll = "{{$check}}";
    if (scroll) {
        let position = $('.relationship-sibar').position();
        $('html, body').animate({
            scrollTop: position.top - 100
        }, 1000);

    }
    }
   
</script>