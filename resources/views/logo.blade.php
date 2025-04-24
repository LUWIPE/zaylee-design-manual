<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Logo</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Logoet fungerer som en visuel identitetsmarkør og udgør et centralt element i Zayles branding.
                        Det sikrer genkendelighed og styrker den visuelle sammenhæng i applikationen. For at bevare et
                        professionelt og konsistent udtryk skal logoet altid bruges i overensstemmelse med Zayles brand
                        guidelines. Disse retningslinjer beskriver, hvordan logoet må placeres, skaleres og
                        farveanvendes, samt hvilke ændringer der ikke er tilladt.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p>
                        Logoets primære funktion er at indikere afsender og skabe en klar visuel forankring i
                        brugerfladen. Det er placeret strategisk, typisk i sidenav eller header, for hurtigt at
                        orientere brugeren om, hvilken applikation de benytter. Udover at styrke brandidentitet,
                        fungerer logoet også som et fast element i layoutet, der bidrager til struktur og genkendelig
                        navigation – uden at fungere som et interaktivt element.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Designprincipper</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Cropping og klipning:</span>
                        Hele logoet skal altid vises uden beskæring.
                    </p>
                    <p>
                        <span class="font-bold">Transparens, skygger og visuelle effekter:</span>
                        Logoet skal stå klart og uændret.
                    </p>
                    <p>
                        <span class="font-bold">Proportioner:</span>
                        Skalering skal ske proportionelt for at bevare form og udtryk.
                    </p>
                    <p>
                        <span class="font-bold">Farver:</span>
                        Kun de officielle brandfarver må bruges.
                    </p>
                </div>
            </x-examples.card>
        </div>
        <x-examples.card>
            <div class="grid gap-2">
                <h3>Logo</h3>
                <div class="grid grid-cols-3 gap-4">
                    <div class="border border-black p-4">
                        <img src="{{ asset('images/logos/primary-secondary.svg') }}" alt="Primær Logo">
                    </div>
                    <div class="bg-secondary p-4">
                        <img src="{{ asset('images/logos/primary-white.svg') }}" alt="Primær Logo">
                    </div>
                    <div class="bg-primary p-4">
                        <img src="{{ asset('images/logos/secondary-white.svg') }}" alt="Primær Logo">
                    </div>
                    <div class="bg-black p-4">
                        <img src="{{ asset('images/logos/white.svg') }}" alt="Primær Logo">
                    </div>
                    <div class="bg-secondary p-4">
                        <img src="{{ asset('images/logos/primary.svg') }}" alt="Primær Logo">
                    </div>
                    <div class="bg-primary p-4">
                        <img src="{{ asset('images/logos/secondary.svg') }}" alt="Primær Logo">
                    </div>
                </div>
            </div>
        </x-examples.card>
        <x-examples.card>
            <div class="grid gap-2">
                <h3>Logo-ikon</h3>
                <div class="grid grid-cols-5 gap-4">
                    <div class="border border-black p-4 flex justify-center">
                        <img src="{{ asset('images/icons/primary-secondary.svg') }}" alt="Primær Logo">
                    </div>
                    <div class="border border-black p-4 flex justify-center">
                        <img src="{{ asset('images/icons/secondary-primary.svg') }}" alt="Primær Logo">
                    </div>
                    <div class="bg-secondary p-4 flex justify-center">
                        <img src="{{ asset('images/icons/primary.svg') }}" alt="Primær Logo">
                    </div>
                    <div class="bg-primary p-4 flex justify-center">
                        <img src="{{ asset('images/icons/secondary.svg') }}" alt="Primær Logo">
                    </div>
                    <div class="bg-black p-4 flex justify-center">
                        <img src="{{ asset('images/icons/white.svg') }}" alt="Primær Logo">
                    </div>
                </div>
            </div>
        </x-examples.card>
    </div>
</x-layout>
