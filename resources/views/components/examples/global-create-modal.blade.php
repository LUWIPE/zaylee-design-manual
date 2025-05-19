<div
    class="relative z-50"
    x-show="globalCreateModalOpen"
    x-cloak
>
    <div class="fixed inset-0 bg-dark/75 transition-opacity"></div>
    <div class="fixed inset-0 z-50 w-screen overflow-y-auto">
        <div class="flex min-h-full justify-center items-center p-4 text-center">
            <div class="relative transform overflow-hidden rounded-lg
                        bg-white text-left shadow-xl transition-all my-8 w-full max-w-lg">
                <div class="bg-white px-4 py-4 w-full">
                    <div class="w-full">
                        <div class="flex justify-end">
                            <div
                                class="icon-sm cursor-pointer"
                                x-on:click="globalCreateModalOpen = false; createCustomer = false; createQuote = false;"
                            >
                                <x-examples.icons.close/>
                            </div>
                        </div>
                        <div class="my-auto w-full grid gap-4">
                            <div x-show="createCustomer" x-cloak>
                                <h3>Opret Kunde</h3>
                            </div>
                            <div x-show="createQuote" x-cloak>
                                <h3>Opret Tilbud</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
