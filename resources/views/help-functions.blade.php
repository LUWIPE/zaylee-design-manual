<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Hjælpefunktioner</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Hjælpefunktioner er elementer i brugergrænsefladen, der har til formål at guide og støtte
                        brugeren i brugen af applikationen. De skal sikre, at brugeren forstår, hvordan bestemte
                        funktioner eller handlinger fungerer.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p>
                        Formålet med hjælpefunktioner er at gøre applikationen mere tilgængelig, brugervenlig og
                        selvforklarende. De hjælper brugeren med at navigere og handle korrekt uden behov for ekstern
                        vejledning. Det kan f.eks. være ikoner med tooltips, korte forklarende tekster ved inputs eller
                        informationstekster i forbindelse med komplekse funktioner.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Designprincipper</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Diskret og relevant:</span>
                        Hjælpefunktioner bør kun vises, når de er relevante, og ikke forstyrre brugerens flow.
                    </p>
                    <p>
                        <span class="font-bold">Klarhed:</span>
                        Informationen skal være enkel og let at forstå.
                    </p>
                    <p>
                        <span class="font-bold">Tilgængelighed:</span>
                        De skal være nemme at finde og aktivere.
                    </p>
                    <p>
                        <span class="font-bold">Støtte frem for overtagelse:</span>
                        Hjælpefunktioner guider, men overtager ikke brugerens kontrol.
                    </p>
                </div>
            </x-examples.card>
        </div>
        <x-examples.card.border>
            <x-examples.card.body>
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
                            <p>x-info-box</p>
                        </td>
                        <td>
                            <x-examples.help-functions.info-box text="Dette er en hjælpende tekst, der forklarer funktionen."/>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="align-middle">
                            <p>x-tooltip (hover)</p>
                        </td>
                        <td>
                            <x-examples.help-functions.tooltip text="Dette er en hjælpende tekst, der forklarer funktionen. Den vises ved hover og forsvinder igen."/>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </x-examples.card.body>
            <x-examples.card.footer class="bg-dark">
                <pre><code class="language-html code-block">{{ html_entity_decode(view('code-blocks.help-functions')->render()) }}</code></pre>
            </x-examples.card.footer>
        </x-examples.card.border>
    </div>
</x-layout>
