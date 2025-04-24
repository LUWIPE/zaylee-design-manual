@php use Illuminate\Support\Facades\Route; @endphp
    <!doctype html>
<html lang="da" dir="ltr" class="light">
<x-head/>
<body data-current-page="{{ Route::currentRouteName() }}" class="overflow-y-scroll">
<div class="app-layout-frameless-side flex flex-auto flex-col bg-gray-950">
    <div class="flex flex-auto min-w-0">
        <div class="min-h-screen min-w-0 relative w-full p-6">
            <div class="bg-white flex flex-col flex-1 h-full rounded-2xl">
                <x-app.header/>
                <div class="h-full flex flex-auto flex-col">
                    <div class="h-full flex flex-auto flex-col justify-between rounded-2xl">
                        <div
                            class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 py-4 sm:py-6 md:px-8 pb-0 sm:pb-0 md:pb-0"
                        >

                            {{$slot}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


