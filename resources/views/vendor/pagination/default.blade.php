@if ($paginator->hasPages())
    <div class="section-bottom">
        <div class="paginator">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="paginator-item disabled" href="#" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <i class="fas fa-chevron-left"></i>
                </a>
            @else
                <a class="paginator-item" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                    <i class="fas fa-chevron-left"></i>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="paginator-item">...</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="active paginator-item" aria-current="page">{{ $page }}</span>
                        @else
                            <a class="paginator-item" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="paginator-item" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                    <i class="fas fa-chevron-right"></i>
                </a>
            @else
                <a class="paginator-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <i class="fas fa-chevron-right"></i>
                </a>
            @endif
            </div>
    </div>
@endif
