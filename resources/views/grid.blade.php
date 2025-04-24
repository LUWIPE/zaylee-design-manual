<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Grid</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-expamples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Grid-systemet gør det muligt at skabe komplekse layout på en enkel måde ved at anvende kolonner
                        og rækker, hvilket sikrer, at indholdet præsenteres på en struktureret og overskuelig måde. Det
                        er responsivt og tilpasser sig automatisk efter skærmstørrelsen, hvilket betyder, at kolonnerne
                        kan ændre sig fra flere kolonner på store skærme til en enkelt kolonne på mindre skærme. Dette
                        giver en brugervenlig og tilgængelig design på tværs af forskellige enheder.
                    </p>
                </div>
            </x-expamples.card>
            <x-expamples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p>
                        Tailwinds grid system tilbyder grid-cols- klasser fra 1 til 12, som gør det muligt at definere
                        antallet af kolonner i et grid. Man kan vælge mellem klasser som grid-cols-1 til grid-cols-12,
                        afhængigt af hvor mange kolonner der ønskes. Derudover findes der col-span- klasser fra 1 til
                        12, der gør det muligt for et element at spænde over et specifikt antal kolonner, f.eks.
                        col-span-3. Systemet inkluderer også en række gap- klasser, som giver mulighed for at justere
                        afstanden mellem både kolonner og rækker, f.eks. gap-4, for at skabe et passende layout og
                        afstand mellem elementerne.
                    </p>
                </div>
            </x-expamples.card>
            <x-expamples.card>
                <h3>Designprincipper</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Fleksibilitet:</span>
                        Grid-systemet gør det muligt at justere layoutet hurtigt ved at ændre antallet af kolonner eller
                        kolonnens bredde, hvilket giver stor designfrihed.
                    </p>
                    <p>
                        <span class="font-bold">Klar struktur:</span>
                        Grid-systemet skaber en organiseret og systematisk opdeling af indhold, der gør det nemt at
                        forstå og navigere.
                    </p>
                    <p>
                        <span class="font-bold">Effektiv pladsudnyttelse:</span>
                        Ved at bruge kolonner kan man maksimere brugen af skærmplads, samtidig med at der opretholdes en
                        god balance mellem indhold og hvidt rum.
                    </p>
                </div>
            </x-expamples.card>
        </div>
        <x-expamples.card>
            <div class="grid gap-2">
                <h3>grid-cols-</h3>
                <table class="table table-fixed table-default table-border table-compact w-full">
                    <thead>
                    <tr>
                        <th class="w-1/5">Kode</th>
                        <th>Eksempel</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for ($columns = 1; $columns <= 12; $columns++)
                        <tr>
                            <td>
                                <pre><code>grid-cols-{{ $columns }}</code></pre>
                            </td>
                            <td>
                                <div class="grid grid-cols-{{ $columns }} gap-4">
                                    @for ($i = 0; $i < $columns; $i++)
                                        <div class="bg-black">
                                            <br>
                                        </div>
                                    @endfor
                                </div>
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </x-expamples.card>
        <x-expamples.card>
            <div class="grid gap-2">
                <h3>col-span-</h3>
                <table class="table table-fixed table-default table-border table-compact w-full">
                    <thead>
                    <tr>
                        <th class="w-1/5">Kode</th>
                        <th>Eksempel</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for ($span = 1; $span <= 12; $span++)
                        <tr>
                            <td>
                                <pre><code>col-span-{{ $span }}</code></pre>
                            </td>
                            <td>
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="bg-black col-span-{{ $span }}">
                                        <br>
                                    </div>
                                    @for ($i = 1; $i <= 12 - $span; $i++)
                                        <div class="border border-black">
                                            <br>
                                        </div>
                                    @endfor
                                </div>
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </x-expamples.card>
    </div>
</x-layout>
