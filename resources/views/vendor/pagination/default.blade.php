@if ($paginator->hasPages())
<br/>
<div class="btn-toolbar" role="toolbar" aria-label="...">
    <div class="btn-group" role="group" aria-label="...">
        @if ($paginator->onFirstPage())
            <button type="button" class="btn btn-info disabled">
                <span>&laquo;</span>
            </button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-info" rel="prev">&laquo;</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <button type="button" class="btn btn-info disabled"><span>{{ $element }}</span></button>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button type="button" class="btn btn-info active">
                            <span>{{ $page }}</span>
                        </button>
                    @else
                        <a href="{{ $url }}" class="btn btn-info">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-info" rel="next">&raquo;</a>
        @else
            <button type="button" class="btn btn-info disabled">
                <span>&laquo;</span>
            </button>
        @endif

    </div>
</div>
@endif