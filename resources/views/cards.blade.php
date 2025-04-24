<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Cards</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Cards er visuelle containere, der bruges til at gruppere relateret indhold i en overskuelig og
                        letlæselig enhed. De fungerer som en struktur for at organisere information og gøre det nemmere
                        for brugeren at navigere i indholdet på en intuitiv måde.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p>
                        Cards er modulære blokke, der viser fx sager, opgavestatus eller kundeinfo på en klar og
                        struktureret måde. Et card indeholder normalt én h3‑titel, valgfri h5‑undertitler, information,
                        formularer, lister og handlingselementer som knapper eller links. Hover‑ eller klikeffekter
                        markerer, at kortet er interaktivt.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Designprincipper</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Fleksibelt layout:</span>
                        Brug Tailwinds <code>grid</code>og <code>grid-cols-</code>klasser til at styre kortenes bredde
                        og responsivitet.
                    </p>
                    <p>
                        <span class="font-bold">Mellemrum:</span>
                        Når flere cards vises sammen, anvendes <code>gap-4</code> for ensartet afstand.
                    </p>
                    <p>
                        <span class="font-bold">Interaktiv feedback:</span>
                        Hover‑ og klikområder understreger, at kortet kan interageres med.
                    </p>
                </div>
            </x-examples.card>
        </div>
    </div>
</x-layout>
