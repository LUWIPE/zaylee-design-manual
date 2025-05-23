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
                                x-bind:class="activeTab === tab.name ? 'text-primary border-primary' : ''"
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
                            <template x-for="heading in tabs.find(tab => tab.name === activeTab).headings" x-bind:key="heading">
                                <th class="text-nowrap uppercase" x-text="heading"></th>
                            </template>
                        </tr>
                        </thead>
                        <tbody>
                        <template x-for="(row, rowIndex) in tabs.find(tab => tab.name === activeTab).data" x-bind:key="rowIndex">
                            <tr
                                class="table-row border-b border-gray-100 h-14"
                                x-data="{ hovering: false }"
                                x-on:mouseenter="hovering = true"
                                x-on:mouseleave="hovering = false"
                            >
                                <template x-for="(col, colIndex) in row" x-bind:key="colIndex">
                                    <td
                                        class="align-middle cursor-pointer"
                                        x-on:click="slideWithoutBackdrop = true"
                                        x-text="col"
                                    ></td>
                                </template>
                                <td class="w-24 align-middle">
                                    <div class="flex justify-end" x-show="hovering" x-transition.opacity.duration.150ms x-cloak>
                                        <a href="#" title="Rediger">
                                            <div class="hover:bg-gray-300 rounded-full p-2 table-icon">
                                                <x-examples.icons.edit/>
                                            </div>
                                        </a>
                                        <a href="#" title="Slet">
                                            <div class="hover:bg-gray-300 rounded-full p-2 table-icon">
                                                <x-examples.icons.trashcan/>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-examples.card>
