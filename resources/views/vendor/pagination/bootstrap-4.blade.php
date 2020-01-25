@if ($paginator->hasPages())
    <div class="pagination w3-bar w3-padding" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <div class="page-item disabled w3-bar-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link w3-disabled w3-btn" aria-hidden="true">First Page</span>
            </div>
        @else
            <div class="page-item w3-bar-item">
                <a class="page-link w3-btn " href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"> &lsaquo; Previous</a>
            </div>
        @endif

<!--         {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <div class="page-item w3-bar-item  disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></div>
            @endif -->

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <div class="page-item w3-bar-item active" aria-current="page"><span class="page-link w3-btn">{{ $page }}</span></div>
                    @else
                        <div class="page-item w3-bar-item "><a class="page-link w3-btn" href="{{ $url }}">{{ $page }}</a></div>
                    @endif
                @endforeach
            @endif
        @endforeach 

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <div class="page-item w3-bar-item">
                <a class="page-link w3-btn" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"> Next &rsaquo;</a>
            </div>
        @else
            <div class="page-item disabled w3-bar-item" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link w3-disabled w3-btn" aria-hidden="true">Last Page</span>
            </div>
        @endif
    </div>
@endif
