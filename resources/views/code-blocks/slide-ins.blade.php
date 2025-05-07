"slide-in.no-backdrop"
Komponent:
&lt;div
    x-show="slideWithoutBackdrop"
    x-transition:enter="transition duration-300"
    x-transition:enter-start="translate-x-full opacity-0"
    x-transition:enter-end="translate-x-0 opacity-100"
    x-transition:leave="transition duration-300"
    x-transition:leave-start="translate-x-0 opacity-100"
    x-transition:leave-end="translate-x-full opacity-0"
    class="w-96 bg-gray-50 border-l flex flex-col overflow-hidden"
    x-cloak
>
    &lt;div class="p-6 flex justify-between items-center border-b shrink-0">
        &lt;h2 class="text-lg font-semibold">&#123;&#123; $heading }}&lt;/h2>
        &lt;button
            @click="slideWithoutBackdrop = false"
            class="text-xl text-gray-500 hover:text-gray-700"
            >
                &times;
            &lt;/button>
    &lt;/div>
    &lt;div class="flex-1 overflow-y-auto p-6">
        &#123;&#123; $text ?? $slot }}
    &lt;/div>
&lt;/div>

Brug af komponent:
&lt;x-examples.slide-ins.no-backdrop
    :open-ref="'slideWithoutBackdrop'"
    heading="Slide-in uden backdrop"
    text="Her er indholdet i slide-in."
/>

"slide-in.backdrop"
Komponent:
&lt;div
    x-show="slideWithBackdrop"
    x-transition:enter="transition duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-50"
    x-transition:leave="transition duration-300"
    x-transition:leave-start="opacity-50"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 bg-black bg-opacity-50 z-40"
    x-cloak
    @click="slideWithBackdrop = false"
>&lt;/div>
&lt;div
    x-show="slideWithBackdrop"
    x-transition:enter="transition duration-300"
    x-transition:enter-start="translate-x-full opacity-0"
    x-transition:enter-end="translate-x-0 opacity-100"
    x-transition:leave="transition duration-300"
    x-transition:leave-start="translate-x-0 opacity-100"
    x-transition:leave-end="translate-x-full opacity-0"
    class="w-96 bg-gray-50 border-l flex flex-col
        overflow-hidden fixed top-0 right-0 h-full z-50"
    x-cloak
>
    &lt;div class="p-6 flex justify-between items-center border-b shrink-0">
        &lt;h2 class="text-lg font-semibold">&#123;&#123; $heading }}&lt;/h2>
        &lt;button
            @click="slideWithBackdrop = false"
            class="text-xl text-gray-500 hover:text-gray-700"
        >
            &times;
        &lt;/button>
    &lt;/div>
    &lt;div class="flex-1 overflow-y-auto p-6">
        &#123;&#123; $text ?? $slot }}
    &lt;/div>
&lt;/div>


Brug af komponent:
&lt;x-examples.slide-ins.backdrop
    :open-ref="'slideWithBackdrop'"
    heading="Slide-in med backdrop"
    text="Her er indholdet i slide-in."
/>
