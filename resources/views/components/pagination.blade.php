<div x-data="{ page: 1, minPage: 1, totalPages: 10 }"
     class="pagination flex align-middle justify-center gap-5 h-12">
    <div class="pagination-pager-prev me-3 flex items-center">
        <button
            x-bind:disabled="page === minPage"
            x-on:click="page--"
            x-cloak
            class="pagination-icon"
            x-bind:class="page !== minPage ? 'hover:fill-primary-light hover:stroke-primary-light' : ''"
        >
            <x-examples.icons.chevron-left/>
        </button>
    </div>
    <p>
        Side
        <input
            type="text"
            x-model.number="page"
            class="w-6 text-center border rounded"
            x-on:change="page = Math.min(Math.max($event.target.value, minPage), totalPages)"
            :min="minPage"
            :max="totalPages"
        >
        af
        <span x-text="totalPages"></span>
    </p>
    <div class="pagination-pager-next ms-3 flex items-center">
        <button
            x-bind:disabled="page === totalPages"
            x-on:click="page++"
            x-cloak
            class="pagination-icon"
            x-bind:class="page !== totalPages ? 'hover:fill-primary-light hover:stroke-primary-light' : ''"
        >
            <x-examples.icons.chevron-right/>
        </button>
    </div>

</div>
