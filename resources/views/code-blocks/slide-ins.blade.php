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
            x-on:click="slideWithoutBackdrop = false"
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
&lt;template x-for="(slide, index) in slideStack" x-bind:key="index">
    &lt;div>
        &lt;template x-if="index === 0">
            &lt;div
                class="fixed inset-0 bg-black bg-opacity-50 transition duration-300"
                :style="`z-index: ${40 + index * 10}`"
            >&lt;/div>
        &lt;/template>
        &lt;template x-if="index > 0">
            &lt;div
                class="absolute top-0 w-10 h-full bg-black bg-opacity-20 transition duration-300"
                x-bind:style="`right: calc(384px + ${(index - 1) * 40}px); z-index: ${1000 + index * 10}`"
            >&lt;/div>
        &lt;/template>
        &lt;div
            class="fixed top-0 h-full right-0 w-96 flex flex-col bg-gray-50 border-l shadow-xl overflow-hidden"
            :style="`z-index: ${50 + index * 10}; transform: translateX(-${(slideStack.length - index - 1) * 40}px)`"
            x-show="true"
            x-transition:enter="transition duration-300"
            x-transition:enter-start="translate-x-full opacity-0"
            x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transition duration-300"
            x-transition:leave-start="translate-x-0 opacity-100"
            x-transition:leave-end="translate-x-full opacity-0"
        >
            &lt;div class="p-6 flex justify-between items-center border-b shrink-0">
                &lt;h2 class="text-lg font-semibold" x-text="slide.heading">&lt;/h2>
                &lt;div x-on:click="closeSlide(index)">
                    &lt;div class="icon-xl hover:text-gray-600">
                        &lt;x-examples.icons.close />
                    &lt;/div>
                &lt;/div>
            &lt;/div>
            &lt;div class="flex-1 overflow-y-auto p-6">
                &lt;div x-html="slide.content">&lt;/div>
                &lt;x-examples.buttons.filled-sm
                    color="primary"
                    text="Åbn næste slide"
                    x-on:click="openSlide({
                        heading: 'Næste Slide ' + (slideStack.length + 1),
                        content: 'Indhold for nyt slide ' + (slideStack.length + 1)
                    })"
                />
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/template>
