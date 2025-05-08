"x-info-box"
komponent:
&lt;div class="bg-white">
    &lt;div class="bg-info bg-opacity-5 border border-info rounded-lg p-2 text-info">
        &lt;div class="flex items-center gap-1">
            &lt;div class="message-icon">
                &lt;x-examples.icons.info/>
            &lt;/div>
            &lt;p>
                &#123;&#123; $text }}
            &lt;/p>
        &lt;/div>
    &lt;/div>
&lt;/div>


Brug af komponent:
&lt;x-examples.help-functions.info-box text="Dette er en hjælpende tekst, der forklarer funktionen."/>

"x-tooltip"
komponent:
&lt;div x-data="{ show: false, t: null }" class="relative inline-block">
    &lt;button
        @mouseenter="clearTimeout(t); t = setTimeout(() => show = true, 100)"
        @mouseleave="clearTimeout(t); t = setTimeout(() => show = false, 100)"
        class="bg-info bg-opacity-15 border border-info p-1 rounded-full
                help-function-icon text-info flex justify-center items-center"
    >
        &lt;x-examples.icons.questionmark/>
    &lt;/button>

    &lt;div
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
        &lt;div class="bg-white rounded-lg shadow-lg">
            &lt;div class="bg-info bg-opacity-5 border border-info rounded-lg p-2 text-info">
                &lt;p>
                    &#123;&#123; $text }}
                &lt;/p>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div>

brug af komponent:
&lt;x-examples.help-functions.tooltip
    text="Dette er en hjælpende tekst, der forklarer funktionen.
        Den vises ved hover og forsvinder igen."
/>


