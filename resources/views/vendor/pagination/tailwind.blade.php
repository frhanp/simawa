@php
    $linkBase = 'inline-flex items-center px-3 py-2 border text-sm font-medium rounded-md';
    $linkIdle = 'bg-white border-gray-200 text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500';
    $linkDisabled = 'bg-gray-50 border-gray-200 text-gray-300 cursor-not-allowed';
    $linkActive = 'bg-white border-blue-500 text-blue-600 ring-1 ring-blue-100';
@endphp

@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-600">
                    Menampilkan
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    –
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    dari
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    data
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex rounded-md shadow-sm bg-white">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span class="{{ $linkBase }} {{ $linkDisabled }}" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span aria-hidden="true">‹</span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" class="{{ $linkBase }} {{ $linkIdle }}" rel="prev" aria-label="@lang('pagination.previous')">‹</a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span class="{{ $linkBase }} bg-white border-transparent text-gray-400 select-none">...</span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span class="{{ $linkBase }} {{ $linkActive }}" aria-current="page">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}" class="{{ $linkBase }} {{ $linkIdle }}">{{ $page }}</a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" class="{{ $linkBase }} {{ $linkIdle }}" rel="next" aria-label="@lang('pagination.next')">›</a>
                    @else
                        <span class="{{ $linkBase }} {{ $linkDisabled }}" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span aria-hidden="true">›</span>
                        </span>
                    @endif
                </span>
            </div>
        </div>

        {{-- Mobile (simple) --}}
        <div class="flex-1 flex items-center justify-between sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-300">Sebelumnya</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-2 rounded-md border border-gray-200 bg-white text-gray-700 hover:bg-gray-50">Sebelumnya</a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-2 rounded-md border border-gray-200 bg-white text-gray-700 hover:bg-gray-50">Berikutnya</a>
            @else
                <span class="px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-300">Berikutnya</span>
            @endif
        </div>
    </nav>
@endif
