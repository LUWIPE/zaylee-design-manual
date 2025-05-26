<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Filtre</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Filtre i systemet bruges til at indsnævre og sortere store mængder data, så brugeren hurtigt og
                        effektivt kan finde præcis det, de leder efter. Uanset om der søges på navn, e-mail, adresse,
                        udstyrstype, medarbejderkategori eller salgsansvarlig, gør filtrene det muligt at tilpasse
                        visningen til brugerens aktuelle behov og kontekst.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p>
                        Filtrene giver brugeren mulighed for hurtigt og effektivt at sortere og afgrænse data i
                        systemet. De findes i flere former: checkbokse til fx “Aktive sager” og “Aktive tilbud”,
                        fritekstsøgninger til felter som navn, adresse, mail og telefonnummer, samt dropdowns med
                        mulighed for at vælge flere værdier ad gangen – eksempelvis medarbejdere, udstyrstyper og
                        statusser.
                        Hvert filter er bygget som sit eget komponent med lokal tilstand styret af Alpine.js. Det gør
                        komponenterne uafhængige, fleksible og nemme at genbruge. Brugeren kan aktivere og kombinere
                        flere filtre på én gang uden at forlade siden, hvilket gør det let at finde præcis den
                        information, der er relevant.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Designprincipper</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Genkendelighed:</span>
                        Alle interaktive elementer har den samme hover-effekt (hover:bg-gray-100), hvilket giver en
                        intuitiv oplevelse, hvor brugeren tydeligt forstår, at der kan interageres med elementet.
                    </p>
                    <p>
                        <span class="font-bold">Responsivitet:</span>
                        Filtrene tilpasser sig automatisk skærmstørrelse og kontekst og fungerer på både desktop og
                        mobile enheder. Designet skalerer sammen med resten af systemets layoutstruktur.
                    </p>
                    <p>
                        <span class="font-bold">Tilstandsanvisning:</span>
                        Når et dropdown-filter er aktivt (åbent), ændrer det udseende med fx bg-gray-100 og afrundede
                        hjørner fjernes i bunden (rounded-b-none) for at signalere åbent tilstand.
                    </p>
                </div>
            </x-examples.card>
        </div>
        <x-examples.card.border>
            <x-examples.card.body>
                <div class="grid gap-2">
                    <h3>Eksempler</h3>
                    <table class="table table-fixed table-default table-border table-compact w-full">
                        <thead>
                        <tr>
                            <th class="w-1/5">Kode</th>
                            <th>Eksempel</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $filters = File::files(resource_path('views/components/examples/filters'));
                        @endphp
                        @foreach($filters as $filter)
                            @php
                                $filterName = str_replace('.blade.php', '', $filter->getFilename());
                            @endphp
                            <tr>
                                <td>
                                    <<span>x-icons.{{ $filterName }}</span>/>
                                </td>
                                <td>
                                    <div class="w-52">
                                        <x-dynamic-component :component="'examples.filters.' . $filterName"/>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </x-examples.card.body>
        </x-examples.card.border>
    </div>
</x-layout>
