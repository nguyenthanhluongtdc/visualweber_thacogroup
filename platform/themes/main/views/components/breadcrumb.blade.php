<div class="container-customize">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                @if ($i != (count(Theme::breadcrumb()->getCrumbs()) - 1))
                    <li class="breadcrumb-item">
                        <a href="{!! $crumb['url'] !!}">{!! $crumb['label'] !!}</a>
                    </li>
                @else
                    <li class="breadcrumb-item active">{!! $crumb['label'] !!}</li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>

{{-- @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
@if ($i != (count(Theme::breadcrumb()->getCrumbs()) - 1))
    <li><a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a><span class="divider">/</span></li>
@else
    <li class="active">{!! $crumb['label'] !!}</li>
@endif
@endforeach --}}