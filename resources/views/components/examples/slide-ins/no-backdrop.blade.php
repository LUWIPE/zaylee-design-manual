<div
    x-show="slideWithoutBackdrop"
    x-transition:enter="transition duration-300"
    x-transition:enter-start="translate-x-full opacity-0"
    x-transition:enter-end="translate-x-0 opacity-100"
    x-transition:leave="transition duration-300"
    x-transition:leave-start="translate-x-0 opacity-100"
    x-transition:leave-end="translate-x-full opacity-0"
    class="w-96 bg-gray-50 border-l flex flex-col overflow-hidden "
    x-cloak
>
    <div class="p-6 flex justify-between items-center border-b shrink-0">
        <h2 class="text-lg font-semibold">{{ $heading }}</h2>
        <button x-on:click="slideWithoutBackdrop = false" class="text-xl text-gray-500 hover:text-gray-700">
            <div class="table-icon"><x-examples.icons.close/></div>
        </button>
    </div>
    <div class="flex-1 overflow-y-auto p-6">
        <p>Her er indholdet i slide-in.</p>
    </div>
</div>
