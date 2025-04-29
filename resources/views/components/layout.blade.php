@php use Illuminate\Support\Facades\Route; @endphp
    <!doctype html>
<html lang="da" dir="ltr" class="light custom-scrollbar-black">
<x-head/>
<body x-data="{ slideWithoutBackdrop: false, slideWithBackdrop: false }" data-current-page="{{ Route::currentRouteName() }}" class="h-screen">
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
                        <x-examples.slide-ins.no-backdrop :open-ref="'slideWithoutBackdrop'" />

                        <x-examples.slide-ins.backdrop :open-ref="'slideWithBackdrop'" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
