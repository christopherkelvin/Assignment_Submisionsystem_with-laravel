{{-- @props('page') --}}
<link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
@if ($paginator->hasPages())
    <div class="pagination-container">
        <div class="mobile-pagination">
            <a href="#">Next</a>
        </div>
        <div class="desktop-pagination">
            <div class="results">
                Showing <span class="font-medium">1</span> to <span class="font-medium">2</span> of <span
                    class="font-medium">3</span> results
            </div>
            <div>
                <nav aria-label="Pagination">
                    @if ($paginator->onFirstPage())
                        <a href="#" class="disabled">
                            <span class="sr-only">Previous</span>
                            <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" class="disabled">
                            <span class="sr-only">Previous</span>
                            <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif
                    @foreach ($elements as $element)
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <a href="#" class="current" aria-current="page">{{ $page }}</a>
                                @else
                                    <a href="{{ $url }}">{{ $page }}</a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}">
                            <span class="sr-only">Next</span>
                            <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    @else
                        <a href="" class="disabled">
                            <span class="sr-only">Next</span>
                            <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif
                </nav>
            </div>
        </div>
    </div>
@endif
