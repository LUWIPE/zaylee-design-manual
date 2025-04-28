<x-examples.card>
    <div class="tabs">
        <div class="tab-list-underline" role="tablist">
            <div class="flex flex-row justify-between">
                <div class="col-span-1">
                    <div class="tab-list">
                            <p class="tab-list-item active">
                               <span class="tab-nav tab-nav-underline text-info border-info">
                                   Overskrift
                               </span>
                            </p>
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
                        @php
                            $ths = ['th 1', 'th 2', 'th 3', 'th 4'];
                            $tds = ['td 1', 'td 2', 'td 3', 'td 4'];
                        @endphp
                        <thead>
                        <tr class="table-row border-b">
                            @foreach($ths as $th)
                                <th>
                                    {{ $th }}
                                </th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody class="">
                        <tr class="table-row odd:bg-gray-50">
                            @foreach($tds as $td)
                                <td class="align-middle">
                                    {{ $td }}
                                </td>
                            @endforeach
                        </tr>
                        <tr class="table-row odd:bg-gray-50">
                            @foreach($tds as $td)
                                <td class="align-middle">
                                    {{ $td }}
                                </td>
                            @endforeach
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-examples.card>
