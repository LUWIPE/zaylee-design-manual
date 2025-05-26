@props([
    'indexData',
])
@php
    $currentTabKey = request('tab', $indexData['defaultTab']);
    $currentTab = $indexData['tabs']->firstWhere('key', $currentTabKey);
@endphp
<div>
    <div class="flex justify-between items-center">
        <div class="tab-list-underline w-full" role="tablist">
            <div class="flex flex-row justify-between">
                <div class="col-span-1">
                    <div class="tab-list">
                        @foreach($indexData['tabs'] as $tab)
                            <a href="{{ request()->fullUrlWithQuery(['tab' => $tab['key']]) }}">
                                @php $isActiveTab = $tab['key'] === $currentTabKey; @endphp
                                <p @class([
                                                'tab-nav tab-nav-underline',
                                                'text-primary border-primary' => $isActiveTab,
                                                'hover:text-primary' => !$isActiveTab,
                                            ])>
                                    {{ $tab['name'] }}
                                </p>
                            </a>
                        @endforeach
                    </div>
                </div>
                @if($indexData['canCreate'])
                <a href="{{ $indexData['getCreateUrl']() }}">
                    <x-examples.buttons.filled-sm
                        color="primary"
                        text="Opret Tilbud"
                    />
                </a>
                @endif
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
                        @foreach($currentTab['columns'] as $column)
                            <th class="text-nowrap uppercase">{{ $column['heading'] }}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($indexData['objects'] as $object)
                        <tr
                            class="table-row border-b border-gray-100 h-14"
                            x-data="{ hovering: false }"
                            x-on:mouseenter="hovering = true"
                            x-on:mouseleave="hovering = false"
                        >
                            @foreach($currentTab['columns'] as $column)
                                <td
                                    class="align-middle cursor-pointer"
                                    x-on:click="slideWithoutBackdrop = true"
                                >{{ $column['parseValue']($object) }}</td>
                            @endforeach
                            <td class="w-24 align-middle">
                                <div
                                    class="flex justify-end"
                                    x-show="hovering"
                                    x-transition.opacity.duration.300ms
                                    x-cloak
                                >
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
                    @endforeach
                    </tbody>
                </table>
                <x-examples.pagination :page="$indexData['page']" :lastPage="$indexData['lastPage']" />
            </div>
        </div>
    </div>
</div>
