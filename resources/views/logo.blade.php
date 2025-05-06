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
        <x-examples.card.border>
            <x-examples.card.body>
                <h3>Logo</h3>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <div class="border border-black p-4">
                            <img src="{{ asset('images/logos/primary-secondary.svg') }}" alt="logos/primary-secondary.svg">
                        </div>
                        <p class="text-center">logos/primary-secondary.svg</p>
                    </div>
                    <div>
                        <div class="bg-secondary p-4">
                            <img src="{{ asset('images/logos/primary-white.svg') }}" alt="logos/primary-white.svg">
                        </div>
                        <p class="text-center">logos/primary-white.svg</p>
                    </div>
                    <div>
                        <div class="bg-primary p-4">
                            <img src="{{ asset('images/logos/secondary-white.svg') }}" alt="logos/secondary-white.svg">
                        </div>
                        <p class="text-center">logos/secondary-white.svg</p>
                    </div>
                    <div>
                        <div class="bg-black p-4">
                            <img src="{{ asset('images/logos/white.svg') }}" alt="logos/white.svg">
                        </div>
                        <p class="text-center">logos/white.svg</p>
                    </div>
                    <div>
                        <div class="bg-secondary p-4">
                            <img src="{{ asset('images/logos/primary.svg') }}" alt="logos/primary.svg">
                        </div>
                        <p class="text-center">logos/primary.svg</p>
                    </div>
                    <div>
                        <div class="bg-primary p-4">
                            <img src="{{ asset('images/logos/secondary.svg') }}" alt="logos/secondary.svg">
                        </div>
                        <p class="text-center">logos/secondary.svg</p>
                    </div>
                </div>
            </x-examples.card.body>
            <x-examples.card.footer class="bg-dark">
                <pre><code
                        class="language-html code-block">{{ html_entity_decode(view('code-blocks.logo')->render()) }}</code></pre>
            </x-examples.card.footer>
        </x-examples.card.border>
        <x-examples.card.border>
            <x-examples.card.body>
                <div class="grid gap-2">
                    <h3>Logo-ikon</h3>
                    <div class="grid grid-cols-5 gap-4">
                        <div>
                            <div class="border border-black p-4 flex justify-center">
                                <img src="{{ asset('images/logo-icons/primary-secondary.svg') }}" alt="logo-icons/primary-secondary.svg">
                            </div>
                            <p class="text-center">logo-icons/primary-secondary.svg</p>
                        </div>
                        <div>
                            <div class="border border-black p-4 flex justify-center">
                                <img src="{{ asset('images/logo-icons/secondary-primary.svg') }}" alt="logo-icons/secondary-primary.svg">
                            </div>
                            <p class="text-center">logo-icons/secondary-primary.svg</p>
                        </div>
                        <div>
                            <div class="bg-secondary p-4 flex justify-center">
                                <img src="{{ asset('images/logo-icons/primary.svg') }}" alt="logo-icons/primary.svg">
                            </div>
                            <p class="text-center">logo-icons/primary.svg</p>
                        </div>
                        <div>
                            <div class="bg-primary p-4 flex justify-center">
                                <img src="{{ asset('images/logo-icons/secondary.svg') }}" alt="logo-icons/secondary.svg">
                            </div>
                            <p class="text-center">logo-icons/secondary.svg</p>
                        </div>
                        <div>
                            <div class="bg-black p-4 flex justify-center">
                                <img src="{{ asset('images/logo-icons/white.svg') }}" alt="logo-icons/white.svg">
                            </div>
                            <p class="text-center">logo-icons/white.svg</p>
                        </div>
                    </div>
                </div>
            </x-examples.card.body>
            <x-examples.card.footer class="bg-dark">
                <pre><code
                        class="language-html code-block">{{ html_entity_decode(view('code-blocks.logo-icon')->render()) }}</code></pre>
            </x-examples.card.footer>
        </x-examples.card.border>
    </div>
</x-layout>
