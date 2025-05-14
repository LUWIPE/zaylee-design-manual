@use('Illuminate\Support\Facades\Route')
    <!doctype html>
<html lang="da" dir="ltr" class="light custom-scrollbar-black">
<x-head/>
<body
    x-data="{ sideNavOpen: false }"
    data-current-page="{{ Route::currentRouteName() }}"
    class="overflow-y-scroll"
>
<div class="app-layout-frameless-side flex flex-col bg-dark">
    @if(Route::currentRouteName() !== 'offers.show')
        <x-examples.navigation.header/>
    @endif
    <div class="flex">
        @if(!str_starts_with(Route::currentRouteName(), 'offers.'))
            <div class="w-14"
                x-bind:class="sideNavOpen ? 'w-48' : 'w-14'"
            >
                <x-examples.navigation.sidenav/>
            </div>
        @endif
        <div class="flex flex-auto min-w-0 mt-16">
            <div class="min-h-screen min-w-0 relative w-full pe-3 pb-3">
                <div class="bg-white flex flex-col flex-1 h-full rounded-lg">
                    <div class="h-full flex flex-auto flex-col">
                        <div class="h-full flex flex-auto flex-col justify-between rounded-lg">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
