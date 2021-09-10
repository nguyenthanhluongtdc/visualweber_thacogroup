<div class="container-customize">

        <ol class="breadcrumb">
            @foreach ($crumbs = Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                @if ($i != (count($crumbs) - 1))
                    <li class="breadcrumb-item">
                        <a href="{{ $crumb['url'] }}" title="{{ $crumb['label'] }}">  {{ $crumb['label'] }}  
                        <meta itemprop="name" content="{{ $crumb['label'] }}" /></a>
                        <meta itemprop="position" content="{{ $i + 1}}" />
                    </li>
                    
                    {{-- <li class="breadcrumb-item">
                        <a href="/truyen-thong">Truyền thông</a>
                    </li> --}}
                @else
                    <li class="breadcrumb-item active">{!! $crumb['label'] !!}
                        <meta itemprop="name" content="{{ $crumb['label'] }}" />
                        <meta itemprop="position" content="{{ $i + 1}}" /></li>
                @endif
            @endforeach
        </ol>
</div>
 