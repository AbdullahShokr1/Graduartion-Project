@if ($paginator->hasPages())
    <div class="row  mb-5 ">
        <div class="col text-center">
            <div id="myDIV">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <button class="btn ">&lt;</button>
                @else
                    <a class="btn" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lt;</a>
                @endif
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <a class="disabled" aria-disabled="true"><span>{{ $element }}</span></a>
                    @endif
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <a class="btn active" aria-current="page">{{ $page }}</a>
                            @else
                                <a class="btn" href="{{ $url }}">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a class="btn" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&gt;</a>
                @else
                    <a class="btn" class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">&gt;</a>
                @endif
            </div>
        </div>
    </div>
@endif
