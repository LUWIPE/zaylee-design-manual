<x-layout>
    <div class="pagination mt-3 flex align-middle justify-center gap-5 h-12">
        <div class="pagination-pager-prev me-3">
                <button class="pagination-icon-disabled flex items-center">
                    <x-icons.chevron-left/>
                </button>
        </div>
        <div class="flex align-middle gap-3 ">
            <p class="pagination-text">Side <span id="pageOf">1</span> af 10</p>
        </div>
        <div class="pagination-pager-next ms-3 flex items-center">
                <button class="pagination-icon">
                    <x-icons.chevron-right />
                </button>
        </div>
    </div>
</x-layout>
