"lists.simple"
Komponent
&#64;props(['ths' => [], 'tds' => []])
&lt;div class="tabs">
    &lt;div class="tab-content" role="tabpanel" tabindex="0">
        &lt;div class="overflow-x-auto custom-scrollbar-dark">
            &lt;table class="table-compact table-hover w-full">
                &lt;thead>
                &lt;tr class="table-row border-b">
                    &#64;foreach($ths as $th)
                        &lt;th>&#123;&#123; $th }}&lt;/th>
                    &#64;endforeach
                &lt;/tr>
                &lt;/thead>
                &lt;tbody>
                &#64;foreach($tds as $row)
                    &lt;tr class="table-row odd:bg-gray-50">
                        &#64;foreach($row as $td)
                            &lt;td class="align-middle">&#123;&#123; $td }}&lt;/td>
                        &#64;endforeach
                    &lt;/tr>
                &#64;endforeach
                &lt;/tbody>
            &lt;/table>
        &lt;/div>
    &lt;/div>
&lt;/div>

"lists.heading"
Komponent
&#64;props(['ths' => [], 'tds' => []])
&lt;div class="tabs">
    &lt;div class="tab-list-underline" role="tablist">
        &lt;div class="flex flex-row justify-between">
            &lt;div class="col-span-1">
                &lt;div class="tab-list">
                    &lt;p class="tab-list-item active">
                           &lt;span class="tab-nav tab-nav-underline text-info border-info">
                               Overskrift
                           &lt;/span>
                    &lt;/p>
                &lt;/div>
            &lt;/div>
        &lt;/div>
    &lt;/div>
    &lt;div class="p-4">
        &lt;div class="tab-content" role="tabpanel" tabindex="0">
            &lt;div class="overflow-x-auto custom-scrollbar-dark">
                &lt;table class="table-compact table-hover w-full">
                    &lt;thead>
                    &lt;tr class="table-row border-b">
                        &#64;foreach($ths as $th)
                            &lt;th>&#123;&#123; $th }}&lt;/th>
                        &#64;endforeach
                    &lt;/tr>
                    &lt;/thead>
                    &lt;tbody>
                    &#64;foreach($tds as $row)
                        &lt;tr class="table-row odd:bg-gray-50">
                            &#64;foreach($row as $td)
                                &lt;td class="align-middle">&#123;&#123; $td }}&lt;/td>
                            &#64;endforeach
                        &lt;/tr>
                    &#64;endforeach
                    &lt;/tbody>
                &lt;/table>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div>

"lists.tabs"
Komponent
&lt;div
    class="tabs"
    x-data='&#123; tabs: &#64;json($tabs), activeTab: null }'
    x-init="activeTab = tabs[0].name"
>
    &lt;div class="tab-list-underline" role="tablist">
        &lt;div class="flex flex-row justify-between">
            &lt;div class="col-span-1">
                &lt;div
                    class="tab-list"
                >
                    &lt;template x-for="tab in tabs" x-bind:key="tab.name">
                        &lt;p
                            class="tab-nav tab-nav-underline"
                            x-on:click="activeTab = tab.name"
                            x-bind:class="activeTab === tab.name ? 'text-primary border-primary' : ''"
                            x-text="tab.name"
                        >
                        &lt;/p>
                    &lt;/template>
                &lt;/div>
            &lt;/div>
        &lt;/div>
    &lt;/div>
    &lt;div class="p-4">
        &lt;div
            class="tab-content"
            role="tabpanel"
            tabindex="0"
        >
            &lt;div class="overflow-x-auto custom-scrollbar-dark">
                &lt;table class="table-compact table-hover w-full">
                    &lt;thead>
                    &lt;tr class="table-row border-b">
                        &lt;template x-for="heading in tabs.find(tab => tab.name === activeTab).headings" x-bind:key="heading">
                            &lt;th class="text-nowrap uppercase" x-text="heading">&lt;/th>
                        &lt;/template>
                    &lt;/tr>
                    &lt;/thead>
                    &lt;tbody>
                    &lt;template x-for="(row, rowIndex) in tabs.find(tab => tab.name === activeTab).data" x-bind:key="rowIndex">
                        &lt;tr
                            class="table-row border-b border-gray-100 h-14"
                            x-data="&#123; hovering: false }"
                            x-on:mouseenter="hovering = true"
                            x-on:mouseleave="hovering = false"
                        >
                            &lt;template x-for="(col, colIndex) in row" x-bind:key="colIndex">
                                &lt;td
                                    class="align-middle cursor-pointer"
                                    x-on:click="slideWithoutBackdrop = true"
                                    x-text="col"
                                >&lt;/td>
                            &lt;/template>
                            &lt;td class="w-24 align-middle">
                                &lt;div class="flex justify-end" x-show="hovering" x-transition.opacity.duration.150ms x-cloak>
                                    &lt;a href="#" title="Rediger">
                                        &lt;div class="hover:bg-gray-300 rounded-full p-2 table-icon">
                                            &lt;x-icons.edit/>
                                        &lt;/div>
                                    &lt;/a>
                                    &lt;a href="#" title="Slet">
                                        &lt;div class="hover:bg-gray-300 rounded-full p-2 table-icon">
                                            &lt;x-icons.trashcan/>
                                        &lt;/div>
                                    &lt;/a>
                                &lt;/div>
                            &lt;/td>
                        &lt;/tr>
                    &lt;/template>
                    &lt;/tbody>
                &lt;/table>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div>

"lists.tabbed-index"
Komponent
&#64;props([
    'indexData',
])
&#64;php
    $currentTabKey = request('tab', $indexData['defaultTab']);
    $currentTab = $indexData['tabs']->firstWhere('key', $currentTabKey);
&#64;endphp
&lt;div>
    &lt;div class="flex justify-between items-center">
        &lt;div class="tab-list-underline w-full" role="tablist">
            &lt;div class="flex flex-row justify-between">
                &lt;div class="col-span-1">
                    &lt;div class="tab-list">
                        &#64;foreach($indexData['tabs'] as $tab)
                            &lt;a href="&#123;&#123; request()->fullUrlWithQuery(['tab' => $tab['key']]) }}">
                                &#64;php $isActiveTab = $tab['key'] === $currentTabKey; &#64;endphp
                                &lt;p &#64;class([
                                                'tab-nav tab-nav-underline',
                                                'text-primary border-primary' => $isActiveTab,
                                                'hover:text-primary' => !$isActiveTab,
                                            ])>
                                    &#123;&#123; $tab['name'] }}
                                &lt;/p>
                            &lt;/a>
                        &#64;endforeach
                    &lt;/div>
                &lt;/div>
                &#64;if($indexData['canCreate'])
                    &lt;a href="&#123;&#123; $indexData['getCreateUrl']() }}">
                        &lt;x-buttons.filled-sm
                            color="primary"
                            text="Opret Tilbud"
                        />
                    &lt;/a>
                &#64;endif
            &lt;/div>
        &lt;/div>
    &lt;/div>
    &lt;div class="p-4">
        &lt;div
            class="tab-content"
            role="tabpanel"
            tabindex="0"
        >
            &lt;div class="overflow-x-auto custom-scrollbar-dark">
                &lt;table class="table-compact table-hover w-full">
                    &lt;thead>
                    &lt;tr class="table-row border-b">
                        &#64;foreach($currentTab['columns'] as $column)
                            &lt;th class="text-nowrap uppercase">&#123;&#123; $column['heading'] }}&lt;/th>
                        &#64;endforeach
                    &lt;/tr>
                    &lt;/thead>
                    &lt;tbody>
                    &#64;foreach($indexData['objects'] as $object)
                        &lt;tr
                            class="table-row border-b border-gray-100 h-14"
                            x-data="&#123; hovering: false }"
                            x-on:mouseenter="hovering = true"
                            x-on:mouseleave="hovering = false"
                        >
                            &#64;foreach($currentTab['columns'] as $column)
                                &lt;td
                                    class="align-middle cursor-pointer"
                                    x-on:click="slideWithoutBackdrop = true"
                                >&#123;&#123; $column['parseValue']($object) }}&lt;/td>
                            &#64;endforeach
                            &lt;td class="w-24 align-middle">
                                &lt;div
                                    class="flex justify-end"
                                    x-show="hovering"
                                    x-transition.opacity.duration.300ms
                                    x-cloak
                                >
                                    &lt;a href="#" title="Rediger">
                                        &lt;div class="hover:bg-gray-300 rounded-full p-2 table-icon">
                                            &lt;x-icons.edit/>
                                        &lt;/div>
                                    &lt;/a>
                                    &lt;a href="#" title="Slet">
                                        &lt;div class="hover:bg-gray-300 rounded-full p-2 table-icon">
                                            &lt;x-icons.trashcan/>
                                        &lt;/div>
                                    &lt;/a>
                                &lt;/div>
                            &lt;/td>
                        &lt;/tr>
                    &#64;endforeach
                    &lt;/tbody>
                &lt;/table>
                &lt;x-pagination :page="$indexData['page']" :lastPage="$indexData['lastPage']" />
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div>

