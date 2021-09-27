{{-- <div class="page-pagination mt-40 mb-40">
    <ul class="pagination font18">
        <li class="page-item active">
            <a href="" class="page-link">
                1
            </a>
        </li>
        <li class="page-item">
            <a href="" class="page-link">
                2
            </a>
        </li>
        <li class="page-item">
            <a href="" class="page-link">
                3
            </a>
        </li>
        <li class="page-item">
            <a href="" class="page-link">
                4
            </a>
        </li>
        <li class="page-item">
            <a href="" class="page-link">
                5
            </a>
        </li>
        <li class="page-item">
            <a href="" class="page-link">
                6
            </a>
        </li>
        <li class="page-item">
            <a href="" class="page-link">
                7
            </a>
        </li>
        <li class="page-item">
            <a href="" class="page-link">
                >
            </a>
        </li>
        <li class="page-item">
            <a href="" class="page-link">
                >>
            </a>
        </li>
    </ul>
</div> --}}

@if ($paginator->hasPages())
    <nav class="page-pagination mt-40 mb-40">
        <ul class="pagination font18 flex-wrap">
            {{-- Previous Page Link --}}
            {{-- @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif --}}

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled page-item mb-1" aria-disabled="true"><span class="font25 bg-white text-danger border-0 page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active mb-1" aria-current="page">
                                <span class="page-link">
                                    {{$page}}
                                </span>
                            </li>
                        @else
                            {{-- <li><a href="{{ $url }}">{{ $page }}</a></li> --}}
                            <li class="page-item mb-1" aria-current="page">
                                <a class="page-link" href="{{ $url }}">
                                    {{$page}}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item mb-1">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">></a>
                </li>
            @else
                <li class="page-item mb-1" class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">></span>
                </li>
            @endif

            @if($paginator->lastPage() == $paginator->currentPage())
                <li class="page-item mb-1"> <span class="page-link">>></span> </li>
            @else
                <li class="page-item mb-1"> <a class="page-link" href="{{$elements[array_key_last($elements)][$paginator->lastPage()]}}"> >> </a> </li>
                
            @endif
        </ul>
    </nav>
@endif