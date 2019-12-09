@if ($paginator->hasPages())
<nav class="pagination">
{{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <a class="prev-btn" href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')"  style="pointer-events: none;"><i class="fe-icon-chevron-left"></i>Prev</a>
@else

 <a class="prev-btn" href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')"><i class="fe-icon-chevron-left" ></i>Prev</a>
  @endif
    <ul class="pages">
    
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active" aria-current="page" style="color: green;"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

       
     
    </ul>
 {{-- Next Page Link --}}
@if ($paginator->hasMorePages())
  <a class="next-btn" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next<i class="fe-icon-chevron-right"></i></a>
   @else
 <a class=" disabled next-btn" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" style="pointer-events: none;">Next<i class="fe-icon-chevron-right"></i></a>
   @endif
</nav>
@endif