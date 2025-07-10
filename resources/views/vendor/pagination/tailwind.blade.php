<div class="w-full overflow-x-auto">
    <span class="relative z-0 inline-flex rtl:flex-row-reverse shadow-md rounded-lg bg-blue-50 dark:bg-blue-900 border border-blue-200 dark:border-blue-700 whitespace-nowrap">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-blue-300 bg-blue-50 border border-blue-200 cursor-not-allowed rounded-l-lg leading-5 dark:bg-blue-900 dark:border-blue-700" aria-hidden="true">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </span>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-blue-600 bg-blue-50 border border-blue-200 rounded-l-lg leading-5 hover:bg-blue-100 hover:text-blue-800 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:bg-blue-900 dark:border-blue-700 dark:hover:bg-blue-800 dark:text-blue-300 transition" aria-label="{{ __('pagination.previous') }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span aria-disabled="true">
                    <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-blue-300 bg-blue-50 border border-blue-200 cursor-not-allowed leading-5 dark:bg-blue-900 dark:border-blue-700">{{ $element }}</span>
                </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span aria-current="page">
                            <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-semibold text-white bg-blue-600 border border-blue-600 cursor-default leading-5 rounded transition shadow">{{ $page }}</span>
                        </span>
                    @else
                        <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-blue-700 bg-blue-50 border border-blue-200 leading-5 hover:bg-blue-100 hover:text-blue-800 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:bg-blue-900 dark:border-blue-700 dark:text-blue-300 dark:hover:bg-blue-800 transition" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-blue-600 bg-blue-50 border border-blue-200 rounded-r-lg leading-5 hover:bg-blue-100 hover:text-blue-800 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:bg-blue-900 dark:border-blue-700 dark:hover:bg-blue-800 dark:text-blue-300 transition" aria-label="{{ __('pagination.next') }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        @else
            <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                <span class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-blue-300 bg-blue-50 border border-blue-200 cursor-not-allowed rounded-r-lg leading-5 dark:bg-blue-900 dark:border-blue-700" aria-hidden="true">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
            </span>
        @endif
    </span>
</div>