<div x-data="{ show: false, t: null }" class="relative inline-block">
    <button
        @mouseenter="clearTimeout(t); t = setTimeout(() => show = true, 100)"
        @mouseleave="clearTimeout(t); t = setTimeout(() => show = false, 100)"
        class="bg-info bg-opacity-15 border border-info p-1 rounded-full help-function-icon text-info flex justify-center items-center"
    >
        <x-examples.icons.questionmark/>
    </button>

    <div
        x-show="show"
        x-transition:enter="transition-opacity duration-100"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity duration-100"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-cloak
        class="absolute left-full bottom-0 ml-1 z-50 w-64"
    >
        <div class="bg-white rounded-lg shadow-lg">
            <div class="bg-info bg-opacity-5 border border-info rounded-lg p-2 text-info">
                <p>
                    Dette er en hjælpende tekst, der forklarer funktionen. Den vises ved hover og forsvinder igen.
                </p>
            </div>
        </div>
    </div>
</div>
