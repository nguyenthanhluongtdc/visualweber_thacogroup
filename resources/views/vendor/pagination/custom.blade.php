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
              <?php
              $start = $paginator->currentPage() - 2; // show 3 pagination links before current
              $end = $paginator->currentPage() +2 ; // show 3 pagination links after current
              if($start < 1) {
                  $start = 1; // reset start to 1
                  $end += 1;
              } 
              if($end >= $paginator->lastPage() ) $end = $paginator->lastPage(); // reset end to last page
          ?>
      
          @if($start > 1)
              <li class="page-item">
                  <a class="page-link" href="{{ $paginator->url(1) }}">{{1}}</a>
              </li>
              @if($paginator->currentPage() != 4)
                  {{-- "Three Dots" Separator --}}
                  <li class="disabled page-item mb-1" aria-disabled="true"><span class="font25 bg-white text-dark border-0 page-link">...</span></li>
              @endif
          @endif
              @for ($i = $start; $i <= $end; $i++)
                  <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                      <a class="page-link" href="{{ $paginator->url($i) }}">{{$i}}</a>
                  </li>
              @endfor
          @if($end < $paginator->lastPage())
              @if($paginator->currentPage() + 3 != $paginator->lastPage())
                  {{-- "Three Dots" Separator --}}
                  <li class="disabled page-item mb-1" aria-disabled="true"><span class="font25 bg-white text-dark border-0 page-link">...</span></li>
              @endif
              <li class="page-item">
                  <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{$paginator->lastPage()}}</a>
              </li>
          @endif

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