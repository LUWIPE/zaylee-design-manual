"lists.simple"
Komponent
&#64;props(['ths' => [], 'tds' => []])
&lt;x-examples.card>
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
&lt;/x-examples.card>

"lists.heading"
Komponent
&#64;props(['ths' => [], 'tds' => []])
&lt;x-examples.card>
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
&lt;/x-examples.card>

"lists.tabs"
Komponent
&lt;x-examples.card>
    &lt;div
        class="tabs"
        x-data='{ tabs: &#64;json($tabs), activeTab: null }'
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
                                x-bind:class="activeTab === tab.name ? 'text-info border-info' : ''"
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
                            &lt;template x-for="heading in tabs.find(tab => tab.name === activeTab).headings"
                                      x-bind:key="heading">
                                &lt;th x-text="heading">&lt;/th>
                            &lt;/template>
                        &lt;/tr>
                        &lt;/thead>
                        &lt;tbody>
                        &lt;template x-for="rows in tabs.find(tab => tab.name === activeTab).data">
                            &lt;tr class="table-row odd:bg-gray-50">
                                &lt;template x-for="col in rows" x-bind:key="col">
                                    &lt;td x-text="col">&lt;/td>
                                &lt;/template>
                            &lt;/tr>
                        &lt;/template>
                        &lt;/tbody>
                    &lt;/table>
                &lt;/div>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/x-examples.card>


