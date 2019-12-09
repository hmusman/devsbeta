@if ($paginator->hasPages())
    {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="prev-btn disabled" href="#"><i class="fe-icon-chevron-left"></i>Prev</a>
        @else
            <a class="prev-btn disabled" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fe-icon-chevron-left"></i>Prev</a>
        @endif
    <ul class="pages">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="d-none d-sm-inline-block disabled"><span>{{ $element }}</span></li>
            @endif


            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="d-none d-sm-inline-block active"><span>{{ $page }}</span></li>
                    @else
                        <li class="d-none d-sm-inline-block"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>
    {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="next-btn" href="{{ $paginator->nextPageUrl() }}">Next<i class="fe-icon-chevron-right"></i></a>
        @else
           <a class="disabled" href="{{ $paginator->nextPageUrl() }}">Next<i class="fe-icon-chevron-right"></i></a>
        @endif
@endif