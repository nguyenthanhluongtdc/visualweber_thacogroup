{{-- <div class="col-md-2 col-sm-2 col-6">
    <a class="text-white" href="/dieu-khoan-su-dung">Điều khoản sử dụng

  </a>
  </div> --}}
  <div class="col-md-5 col-sm-4 col-6 policy">
    @foreach($menu_nodes as $key => $row)
     <a href="{{$row->url}}" class="text-white">{{$row->name}}</a>
    @endforeach
  </div>