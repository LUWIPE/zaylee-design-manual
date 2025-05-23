<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Grid</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p class="text-error">
                        Mangler text
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p class="text-error">
                        Mangler text
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Designprincipper</h3>
                <div class="grid gap-2">
                    <p class="text-error">
                        Mangler text
                    </p>
                </div>
            </x-examples.card>
        </div>
        <x-examples.card.border>
            <x-examples.card.body>
                <div class="grid gap-2">
                    <h3>grid-cols-</h3>
                    <table class="table table-fixed table-default table-border table-compact w-full">
                        <thead>
                        <tr>
                            <th class="w-1/5">Kode</th>
                            <th>Eksempel</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $filters = File::files(resource_path('views/components/examples/filters'));
                        @endphp
                        @foreach($filters as $filter)
                            @php
                                $filterName = str_replace('.blade.php', '', $filter->getFilename());
                            @endphp
                            <tr>
                                <td>
                                    <<span>x-icons.{{ $filterName }}</span>/>
                                </td>
                                <td>
                                    <div class="w-52">
                                    <x-dynamic-component :component="'examples.filters.' . $filterName"/>
                                    </div>
                                </td>
                            </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
            </x-examples.card.body>
        </x-examples.card.border>
    </div>
</x-layout>
