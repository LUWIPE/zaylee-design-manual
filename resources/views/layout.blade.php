<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Layout</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Layoutet er den overordnede struktur af applikationen og fungerer som rammen for
                        brugergrænsefladen. Det er opbygget som en komponent, der organiserer sidenav, header og
                        content, og sikrer, at disse elementer er korrekt placeret og afgrænset. Denne organisering
                        skaber en klar og intuitiv navigation, der gør det nemt for brugeren at finde de ønskede
                        funktioner og informationer. Layoutet hjælper med at opretholde en konsekvent og funktionel
                        design.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card class="col-span-2">
                <h3>Struktur</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Header:</span>
                        Headeren er placeret øverst på skærmen og fungerer som en global navigationsbar med fokus på
                        profilspecifik funktionalitet. Den indeholder brugerrelaterede elementer som profilinfo,
                        indstillinger og logout, og adskiller sig dermed fra den generelle navigation i sidenav.
                    </p>
                    <p>
                        <span class="font-bold">Sidenav:</span>
                        Sidenaven er placeret i venstre side og giver brugeren adgang til de vigtigste sektioner og
                        funktioner. Den indeholder navigationslinks og ikoner, hvilket gør det nemt at organisere og
                        tilgå indhold hurtigt uden at forlade den aktuelle side.
                    </p>
                    <p>
                        <span class="font-bold">Content</span>
                        Den centrale sektion, hvor applikationens hovedindhold vises. Her præsenteres tekst,
                        billeder, formularer eller andet relevant materiale, og området er designet til at være
                        klart og struktureret for en god brugeroplevelse.
                    </p>
                </div>
            </x-examples.card>
        </div>
        <x-examples.card.border>
            <x-examples.card.body>
                <h3>Eksempel</h3>
                <a class="hover:underline" href="/layout-example">Eksempel på layout</a>
            </x-examples.card.body>
        </x-examples.card.border>
    </div>
</x-layout>
