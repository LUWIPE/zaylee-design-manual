@php
    $tabs = [
        [
            'name' => 'tab 1',
            'headings' => ['th 1.1', 'th 1.2'],
            'data' => [
                ['td1.1 - 1', 'td 1.2 - 1'],
                ['td2.1 - 1', 'td 2.2 - 1'],
            ],
        ],
        [
            'name' => 'tab 2',
            'headings' => ['th 2.1', 'th 2.2'],
            'data' => [
                ['td 1.1 - 2', 'td 1.2 - 2'],
                ['td 2.1 - 2', 'td 2.2 - 2'],
            ],
        ],
    ];

    $ths = ['th 1', 'th 2', 'th 3', 'th 4'];
    $tds = [
        ['td 1', 'td 2', 'td 3', 'td 4'],
        ['td 1', 'td 2', 'td 3', 'td 4'],
    ];
@endphp
<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Lister</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card.border>
                <x-examples.card.body>
                    <h3>Definition</h3>
                    <p>
                        Lister er strukturerede visninger af data organiseret i rækker og kolonner. De giver
                        mulighed for at præsentere information på en systematisk og let sammenlignelig måde, hvilket gør
                        dem velegnede til at vise større mængder data på en kompakt og overskuelig måde. Tabellister
                        bruges ofte i administrative og datatunge grænseflader.
                    </p>
                </x-examples.card.body>
            </x-examples.card.border>
            <x-examples.card.border>
                <x-examples.card.body>
                    <h3>Funktionalitet</h3>
                    <p>
                        Lister bruges til at vise information som f.eks. brugere, opgaver, dokumenter eller sagsdata. De
                        gør det muligt for brugeren at få overblik, identificere mønstre og sammenligne information på
                        tværs af rækker. Funktioner som søgning, sortering, filtrering og pagination gør det lettere at
                        navigere i store mængder data. Tabeller kan også indeholde klikbare rækker eller knapper, der
                        fører til yderligere detaljer eller handlinger.
                    </p>
                </x-examples.card.body>
            </x-examples.card.border>
            <x-examples.card.border>
                <x-examples.card.body>
                    <h3>Designprincipper</h3>
                    <p>
                        <span class="font-bold">Overskuelighed:</span>
                        Kolonner og rækker skal være lette at aflæse, med passende afstand og justering.
                    </p>
                    <p>
                        <span class="font-bold">Interaktivitet:</span>
                        Brug af hover-effekter, klikbare rækker eller ikoner skal tydeligt signaleres.
                    </p>
                    <p>
                        <span class="font-bold">Konsistens:</span>
                        Lister er opbygget som komponent og følger derfor samme opbygning og stil gennem hele systemet
                    </p>
                </x-examples.card.body>
            </x-examples.card.border>
        </div>
        <x-examples.card.border>
            <x-examples.card.body>
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
                                <<span>x-lists.simple</span>/>
                            </td>
                            <td>
                                <x-examples.lists.simple :$ths :$tds/>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="align-middle">
                                <<span>x-lists.heading</span>/>
                            </td>
                            <td>
                                <x-examples.lists.heading :$ths :$tds/>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="align-middle">
                                <<span>x-lists.tabs</span>/>
                            </td>
                            <td>
                                <x-examples.lists.tabs :$tabs/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </x-examples.card.body>
            <x-examples.card.footer class="bg-dark">
                <pre><code class="language-html code-block">{{ html_entity_decode(view('code-blocks.lists')->render()) }}</code></pre>
            </x-examples.card.footer>
        </x-examples.card.border>
    </div>
</x-layout>
