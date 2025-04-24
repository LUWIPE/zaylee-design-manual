<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Hjælpefunktioner</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-expamples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Hjælpefunktioner er elementer i brugergrænsefladen, der har til formål at guide og støtte
                        brugeren i brugen af applikationen. De skal sikre, at brugeren forstår, hvordan bestemte
                        funktioner eller handlinger fungerer.
                    </p>
                </div>
            </x-expamples.card>
            <x-expamples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p>
                        Formålet med hjælpefunktioner er at gøre applikationen mere tilgængelig, brugervenlig og
                        selvforklarende. De hjælper brugeren med at navigere og handle korrekt uden behov for ekstern
                        vejledning. Det kan f.eks. være ikoner med tooltips, korte forklarende tekster ved inputs eller
                        informationstekster i forbindelse med komplekse funktioner.
                    </p>
                </div>
            </x-expamples.card>
            <x-expamples.card>
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
            </x-expamples.card>
        </div>
        <x-expamples.card>
            <div class="grid gap-4">
                <div class="bg-gray-100 border-2 border-dark p-2 rounded-full example-icon">
                    <x-expamples.icons.questionmark/>
                </div>
                <div class="card bg-gray-100 border-2 border-dark w-96">
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nisi quae tenetur velit.
                            Aliquam aut
                            minima non quis vero? Laudantium.</p>
                    </div>
                </div>
            </div>
        </x-expamples.card>
    </div>
</x-layout>
