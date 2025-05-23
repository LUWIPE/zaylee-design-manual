@use('Illuminate\Support\Facades\Route')
    <!doctype html>
<html lang="da" dir="ltr" class="light page-scrollbar">
<x-examples.head/>
<body
    x-data="layoutPage"
    data-current-page="{{ Route::currentRouteName() }}"
    class="overflow-y-scroll bg-dark"
>
<div class="app-layout-frameless-side flex flex-col bg-dark">
    @if(Route::currentRouteName() !== 'offers.show')
        <x-examples.navigation.header/>
    @endif
    <div class="flex">
        @if(!str_starts_with(Route::currentRouteName(), 'offers.'))
            <div class="w-14" x-bind:class="sideNavOpen ? 'w-52' : 'w-14'" x-transition>
                <x-examples.navigation.sidenav/>
            </div>
        @endif
        <div class="flex flex-auto min-w-0 mt-12 ms-0.5 pe-2 pb-2">
            <div class="min-h-screen min-w-0 relative w-full">
                <div class="bg-white flex flex-col flex-1 h-full rounded-sm"
                     x-bind:class="slideWithoutBackdrop ? 'rounded-r-none' : 'rounded-sm'">
                    <div class="h-full flex flex-auto flex-col">
                        <div class="h-full flex flex-auto flex-col justify-between rounded-lg">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden rounded-r-sm h-full">
                <x-examples.slide-ins.no-backdrop
                    x-bind:open-ref="'slideWithoutBackdrop'"
                    heading="Slide-in uden backdrop"
                    text="Her er indholdet i slide-in."
                />
            </div>
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
                            <x-examples.pop-ups.messages width="96" message="success"/>
                        </template>
                        <template x-if="message.type === 'warning'">
                            <x-examples.pop-ups.messages width="96" message="warning"/>
                        </template>
                        <template x-if="message.type === 'error'">
                            <x-examples.pop-ups.messages width="96" message="error"/>
                        </template>
                    </div>
                </template>
            </div>
        </div>
    </div>
</div>
<x-examples.global-create-modal/>
</body>
</html>
