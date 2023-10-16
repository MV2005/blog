@if ($paginator->hasPages())
    <div class="join grid grid-cols-2">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="join-item btn btn-outline" aria-disabled="true">@lang('pagination.previous')</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="join-item btn btn-outline" rel="prev">@lang('pagination.previous')</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="join-item btn btn-outline" rel="next">@lang('pagination.next')</a>
        @else
            <a  class="join-item btn btn-outline" aria-disabled="true">@lang('pagination.next')</a>
        @endif
    </div>
@endif
