<div class="pagination mt-3 flex align-middle justify-center gap-5 h-12">
    <div class="pagination-pager-prev me-3">
        <a href="{{ request()->fullUrlWithQuery(['page' => $page - 1]) }}">
            <button class="pagination-icon" {{ $page > 1 ? '' : ' disabled' }}>
                <x-icons.chevron-left/>
            </button>
        </a>
    </div>
    <div class="flex align-middle gap-3">
        <p class="pagination-text">
            Side {{ $page }} af {{ max($lastPage, 1) }}
        </p>
    </div>
    <div class="pagination-pager-next ms-3">
        <a href="{{ request()->fullUrlWithQuery(['page' => $page + 1]) }}">
            <button class="pagination-icon" {{ $page < $lastPage ? '' : ' disabled'}}>
                <x-icons.chevron-right />
            </button>
        </a>
    </div>
</div>
