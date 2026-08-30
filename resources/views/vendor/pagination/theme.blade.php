@if ($paginator->hasPages())
    <div class="th-theme-pagination mt-4 text-center">
        <ul class="d-inline-flex align-items-center list-unstyled gap-2 mb-0">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled"><a href="javascript:void(0);" class="opacity-50 pointer-events-none"><span class="th-prev"><img src="{{ asset('assets/img/designer/th-pagination-arrow.png') }}" alt="" class="me-1">Prev</span></a></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}"><span class="th-prev"><img src="{{ asset('assets/img/designer/th-pagination-arrow.png') }}" alt="" class="me-1">Prev</span></a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><a href="javascript:void(0);" class="th-pagination-num text-secondary">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a href="javascript:void(0);" class="th-pagination-num active">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}" class="th-pagination-num">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}"><span class="th-prev">Next<img src="{{ asset('assets/img/designer/th-pagination-arrow1.png') }}" alt="" class="ms-1"></span></a></li>
            @else
                <li class="disabled"><a href="javascript:void(0);" class="opacity-50 pointer-events-none"><span class="th-prev">Next<img src="{{ asset('assets/img/designer/th-pagination-arrow1.png') }}" alt="" class="ms-1"></span></a></li>
            @endif
        </ul>
    </div>
@endif
