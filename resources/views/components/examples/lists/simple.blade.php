@props(['ths' => [], 'tds' => []])
<x-examples.card>
    <div class="tabs">
        <div class="tab-content" role="tabpanel" tabindex="0">
            <div class="overflow-x-auto custom-scrollbar-dark">
                <table class="table-compact table-hover w-full">
                    <thead>
                    <tr class="table-row border-b">
                        @foreach($ths as $th)
                            <th>{{ $th }}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tds as $row)
                        <tr class="table-row border-b border-gray-100 h-14">
                            @foreach($row as $td)
                                <td class="align-middle">{{ $td }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-examples.card>
