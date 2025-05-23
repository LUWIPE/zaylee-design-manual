<template x-for="(slide, index) in slideStack" x-bind:key="index">
    <div>
        <template x-if="index === 0">
            <div
                class="fixed inset-0 bg-black bg-opacity-50 transition duration-300"
                :style="`z-index: ${40 + index * 10}`"
            ></div>
        </template>
        <template x-if="index > 0">
            <div
                class="absolute top-0 w-10 h-full bg-black bg-opacity-20 transition duration-300"
                x-bind:style="`right: calc(384px + ${(index - 1) * 40}px); z-index: ${1000 + index * 10}`"
            ></div>
        </template>
        <div
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
            <div class="p-6 flex justify-between items-center border-b shrink-0">
                <h2 class="text-lg font-semibold" x-text="slide.heading"></h2>
                <div x-on:click="closeSlide(index)">
                    <div class="icon-xl hover:text-gray-600">
                        <x-examples.icons.close />
                    </div>
                </div>
            </div>
            <div class="flex-1 overflow-y-auto p-6">
                <div x-html="slide.content"></div>
                <x-examples.buttons.filled-sm
                    color="primary"
                    text="Åbn næste slide"
                    x-on:click="openSlide({
                        heading: 'Næste Slide ' + (slideStack.length + 1),
                        content: 'Indhold for nyt slide ' + (slideStack.length + 1)
                    })"
                />
            </div>
        </div>
    </div>
</template>
