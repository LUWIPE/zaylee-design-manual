<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Lister</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card></x-examples.card>
        </div>
        <x-examples.card>
            <div class="grid gap-2">
                <h3>Eksempler</h3>
                <table class="table table-default table-border table-compact">
                    <thead>
                    <tr class="table-row">
                        <th class="align-middle w-3/12">Type</th>
                        <th class="align-middle w-9/12">Eksempel</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="table-row">
                        <td class="align-middle">
                            <pre><code><<span>x-lists.simple</span>/></code></pre>
                        </td>
                        <td>
                            <x-examples.lists.simple/>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="align-middle">
                            <pre><code><<span>x-lists.heading</span>/></code></pre>
                        </td>
                        <td>
                            <x-examples.lists.heading/>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="align-middle">
                            <pre><code><<span>x-lists.tabs</span>/></code></pre>
                        </td>
                        <td>
                            <x-examples.lists.tabs/>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </x-examples.card>
    </div>
</x-layout>
