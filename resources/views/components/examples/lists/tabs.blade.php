<x-examples.card>
    <div
            class="tabs"
            x-data='{ tabs: @json($tabs), activeTab: null }'
            x-init="activeTab = tabs[0].name"
    >
        <div class="tab-list-underline" role="tablist">
            <div class="flex flex-row justify-between">
                <div class="col-span-1">
                    <div
                            class="tab-list"
                    >
                        <template x-for="tab in tabs" x-bind:key="tab.name">
                            <p
                                    class="tab-nav tab-nav-underline"
                                    x-on:click="activeTab = tab.name"
                                    x-bind:class="activeTab === tab.name ? 'text-info border-info' : ''"
                                    x-text="tab.name"
                            >
                            </p>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4">
            <div
                    class="tab-content"
                    role="tabpanel"
                    tabindex="0"
            >
                <div class="overflow-x-auto custom-scrollbar-dark">
                    <table class="table-compact table-hover w-full">
                        <thead>
                        <tr class="table-row border-b">
                            <template x-for="heading in tabs.find(tab => tab.name === activeTab).headings"
                                      x-bind:key="heading">
                                <th x-text="heading"></th>
                            </template>
                        </tr>
                        </thead>
                        <tbody>
                        <template x-for="rows in tabs.find(tab => tab.name === activeTab).data">
                            <tr class="table-row odd:bg-gray-50">
                                <template x-for="col in rows" x-bind:key="col">
                                    <td x-text="col"></td>
                                </template>
                            </tr>
                        </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-examples.card>
