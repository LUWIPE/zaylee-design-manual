<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Formularer</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-expamples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Formularer består af felter som tekstbokse, radioknapper, checkboxe og dropdowns, der indsamler
                        brugerens input på en struktureret måde. Klare etiketter og hjælpetekster beskriver hvert felt,
                        og valideringsbeskeder sikrer, at data indtastes korrekt.
                    </p>
                </div>
            </x-expamples.card>
            <x-expamples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p>
                        Formularer indsamler data via forskellige inputtyper som tekstfelter, dropdowns og checkboxe,
                        alt efter behov. Alle form‑items refereres som x-fields.{komponentnavn} i Blade‑templates. De
                        reagerer hurtigt på fejl, så brugeren kan rette input uden at miste det skrevne, og giver
                        tydelig besked om, hvorvidt indsendelsen er lykkedes.
                    </p>
                </div>
            </x-expamples.card>
            <x-expamples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Struktur:</span>
                        Formularfelter arrangeres logisk med labels, inputfelter og hjælpebeskeder.
                    </p>
                    <p>
                        <span class="font-bold">Ensartethed:</span>
                        Alle komponenter fra fields-mappen følger den samme styling og spacing for et konsistent udtryk.
                    </p>
                    <p>
                        <span class="font-bold">Feedback:</span>
                        Fejlmeddelelser og validering vises tydeligt.
                    </p>
                </div>
            </x-expamples.card>
        </div>
    </div>
</x-layout>
