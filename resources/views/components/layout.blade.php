@php use Illuminate\Support\Facades\Route; @endphp
    <!doctype html>
<html lang="da" dir="ltr" class="light custom-scrollbar-black">
<x-head/>
<body
    x-data="layoutPage"
    data-current-page="{{ Route::currentRouteName() }}"
    class="overflow-y-auto"
>
<div class="app-layout-frameless-side flex flex-auto flex-col bg-dark h-full">
    <div class="flex flex-auto min-w-0 h-full">
        <x-sidenav/>
        <div class="min-h-screen min-w-0 relative w-full p-6">
            <div class="bg-white flex flex-col flex-1 h-full rounded-2xl">
                <div class="h-full flex flex-auto flex-col">
                    <div class="h-full flex flex-row rounded-2xl overflow-hidden">
                        <div class="flex flex-col flex-1 transition-all duration-300">
                            <x-header/>
                            <div class="page-container flex-1 overflow-y-auto">
                                <div class="px-4 sm:px-6 py-4 sm:py-6 md:px-8">
                                    <div class="container mx-auto">
                                        {{$slot}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <x-examples.slide-ins.no-backdrop
                            x-bind:open-ref="'slideWithoutBackdrop'"
                            heading="Slide-in uden backdrop"
                            text="Her er indholdet i slide-in."
                        />
                        <x-examples.slide-ins.backdrop
                            x-bind:open-ref="'slideWithBackdrop'"
                        />
                        <div class="absolute bottom-10 right-10 flex flex-col gap-2 items-end">
                            <template x-for="message in messages" x-bind:key="message.id">
                                <div
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 translate-y-2"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-300"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-2"
                                    class="w-96"
                                >
                                    <template x-if="message.type === 'success'">
                                        <x-examples.pop-ups.messages width="96" message="success" />
                                    </template>
                                    <template x-if="message.type === 'warning'">
                                        <x-examples.pop-ups.messages width="96" message="warning" />
                                    </template>
                                    <template x-if="message.type === 'error'">
                                        <x-examples.pop-ups.messages width="96" message="error" />
                                    </template>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
