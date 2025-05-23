<form action="">
    <div x-data="{ checked: false }">
        <div
            class="w-full h-8 border px-1 menu-item hover:bg-gray-100 flex items-center justify-between"
            x-on:click="checked = !checked"
            x-bind:class="checked ? 'bg-gray-100' : ''"
        >
            <p>Aktive tilbud</p>
            <input class="h-4 w-4" type="checkbox" x-bind:checked="checked">
        </div>
    </div>
</form>
