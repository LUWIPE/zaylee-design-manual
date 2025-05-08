@php
    $colors = ['primary', 'secondary', 'info', 'success', 'warning', 'error'];
@endphp
<x-layout>
    <div class="grid gap-4">
        <div>
            <h1 class="mt-4">Knapper</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <p>
                    Knapper er en vigtig interaktiv komponent, der bruges til at udføre handlinger i applikationen. De
                    er designet som en komponent, hvilket gør dem lette at genbruge på tværs af applikationen. Knapperne
                    kan tilpasses med forskellige farver, der hjælper med at kommunikere knappens funktion og prioritet
                    i brugergrænsefladen.
                </p>
            </x-examples.card>
            <x-examples.card>
                <h3>Funktionalitet</h3>
                <p>
                    Knapperne udløser handlinger, når brugeren interagerer med dem. De er opbygget som en genanvendelig
                    komponent, hvilket betyder, at de kan placeres på tværs af forskellige sektioner i applikationen
                    uden at skulle opbygges hver gang.
                </p>
                <p>
                    Når man indsætter en knap-komponent, kan man vælge mellem-buttons.filled eller x-buttons.outline.
                    Der er 3 variabler der gør man kan rette i knappens farver og funktion:
                </p>
                <p class="ms-2">
                    <span class="font-black">-</span> <span class="font-extrabold">$color</span>
                    hvor man kan vælge farven på knappen
                </p>
                <p class="ms-2">
                    <span class="font-black">-</span> <span class="font-extrabold">$text</span>
                    hvor man kan vælge farven på teksten
                </p>
                <p class="ms-2">
                    <span class="font-black">-</span> <span class="font-extrabold">$type</span>
                    hvor man kan vælge hvilken funktion knappen har
                </p>
            </x-examples.card>
            <x-examples.card>
                <h3>Designprincipper</h3>
                <p>
                    <span class="font-extrabold">Klart visuelt hierarki:</span> Farverne på knapperne hjælper med at
                    kommunikere handlingens betydning, hvilket gør det nemt for brugeren at forstå, hvad der sker ved at
                    klikke på en knap.
                </p>
                <p>
                    <span class="font-extrabold">Konsistens:</span> Knapperne er designet som komponenter, hvilket
                    sikrer, at de er ensartede i udseende og funktion på tværs af applikationen.
                </p>
                <p>
                    <span class="font-extrabold">Interaktivitet:</span> Knapperne er designet til at give visuel
                    feedback, f.eks. en ændring i farve eller en animation ved hover, så brugeren tydeligt kan se, når
                    knappen er klikbar.
                </p>
            </x-examples.card>
        </div>
        <x-examples.card.border>
            <x-examples.card.body>
                <h3 class="mb-2">Normale Knapper</h3>
                <div class="grid gap-4">
                    <div>
                        <h5>x-buttons.filled</h5>
                        <p></p>
                        <div class="grid grid-cols-6 gap-4">
                            @foreach($colors as $color)
                                <x-examples.buttons.filled color="{{ $color }}" text="{{ $color }}"/>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <h5>x-buttons.outline</h5>
                        <div class="grid grid-cols-6 gap-4">
                            @foreach($colors as $color)
                                <x-examples.buttons.outline color="{{ $color }}" text="{{ $color }}"/>
                            @endforeach
                        </div>
                    </div>
                </div>
            </x-examples.card.body>
            <x-examples.card.footer class="bg-dark">
                <pre><code class="language-html code-block">{{ html_entity_decode(view('code-blocks.buttons')->render()) }}</code></pre>
            </x-examples.card.footer>
        </x-examples.card.border>
        <x-examples.card.border>
            <x-examples.card.body>
                <h3 class="mb-2">Små Knapper</h3>
                <div class="grid gap-4">
                    <div>
                        <h5>x-buttons.filled-sm</h5>
                        <div class="grid grid-cols-6 gap-4">
                            @foreach($colors as $color)
                                <x-examples.buttons.filled-sm color="{{ $color }}" text="{{ $color }}" text="{{ $color }}"/>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <h5>x-buttons.outline-sm</h5>
                        <div class="grid grid-cols-6 gap-4">
                            @foreach($colors as $color)
                                <x-examples.buttons.outline-sm color="{{ $color }}" text="{{ $color }}"/>
                            @endforeach
                        </div>
                    </div>
                </div>
            </x-examples.card.body>
            <x-examples.card.footer class="bg-dark">
                <pre><code class="language-html code-block">{{ html_entity_decode(view('code-blocks.buttons-sm')->render()) }}</code></pre>
            </x-examples.card.footer>
        </x-examples.card.border>
    </div>
</x-layout>
