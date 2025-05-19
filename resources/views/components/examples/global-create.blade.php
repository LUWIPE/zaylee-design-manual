<div class="relative" x-data="{ open: false, toggleRef: null }" x-on:click.away="open = false">
    <div
        class="inline-flex justify-center cursor-pointer"
        x-bind:aria-expanded="open ? 'true' : 'false'"
        x-on:click="open = !open"
        x-ref="toggleRef"
    >
        <div class="flex items-center">
            <div class="bg-white rounded-md" x-bind:class="open ? 'rounded-b-none' : ''">
                <div class="menu-item menu-item-hoverable py-2 px-5 flex justify-center items-center bg-dark"
                     x-bind:class="open ? 'rounded-b-none bg-opacity-80' : ''"
                >
                        <p class="font-bold text-center text-xs text-gray-100">
                            <i class="fa-solid fa-circle-plus fill-gray-100 stroke-gray-100"></i> Opret
                        </p>
                </div>
            </div>
        </div>
    </div>
    <div
        class="absolute right-0 z-10 origin-top-right bg-white rounded-b-md divide-y divide-gray-100 shadow-sm shadow-dark"
        x-show="open"
        x-transition
        x-cloak
        x-bind:style="'width: ' + ($refs.toggleRef?.offsetWidth) + 'px'"
    >
        <div class="bg-dark bg-opacity-80 rounded-b-md">
            <ul class="transition-opacity">
                <li class="menu-item menu-item-hoverable rounded-none py-2 px-4 flex justify-center"
                    x-on:click="globalCreateModalOpen = true; createCustomer = true">
                    <div class="flex h-full w-full gap-2 items-center justify-center">
                        <p class="text-center text-gray-100 text-xs">
                            Kunde
                        </p>
                    </div>
                </li>
                <li class="menu-item menu-item-hoverable rounded-t-none py-2 px-4 flex justify-center"
                    x-on:click="globalCreateModalOpen = true; createQuote = true">
                    <div class="flex h-full w-full gap-2 items-center justify-center">
                        <p class="text-center text-gray-100 text-xs">
                            Tilbud
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
