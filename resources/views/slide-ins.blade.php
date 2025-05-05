<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Slide-ins</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card.border>
                <x-examples.card.body>
                    <h3>Definition</h3>
                    <p>
                        Slide-ins er UI-elementer designet som paneler, der skjult ligger uden for skærmbilledet og
                        glider synligt ind, når de aktiveres. De er en del af layoutets komponentstruktur og har en fast
                        placering, som skaber en ensartet oplevelse for brugeren.
                    </p>
                </x-examples.card.body>
            </x-examples.card.border>
            <x-examples.card.border>
                <x-examples.card.body>
                    <h3>Funktionalitet</h3>
                    <p>
                        Slide-ins gør det muligt at interagere med ekstra indhold som formularer, detaljer, beskeder
                        eller redigeringsmuligheder uden at navigere væk fra den side, brugeren allerede er på.
                        Slide-ins kan åbnes og lukkes efter behov, og de er typisk koblet til specifikke handlinger som
                        klik på en knap eller række i en tabel.
                    </p>
                </x-examples.card.body>
            </x-examples.card.border>
            <x-examples.card.border>
                <x-examples.card.body>
                    <h3>Designprincipper</h3>
                    <p>
                        <span class="font-bold">Kontrast</span>
                        Skal have tydelig adskillelse fra baggrunden, f.eks. med skygge eller farvekontrast.
                    </p>
                    <p>
                        <span class="font-bold">Animation:</span>
                        Bør glide ind med en jævn og diskret animation for at undgå at forstyrre brugeren.
                    </p>
                    <p>
                        <span class="font-bold"></span>
                    </p>
                </x-examples.card.body>
            </x-examples.card.border>
        </div>
        <x-examples.card.border>
            <x-examples.card.body>
                <h3>Eksempel på Slide-in uden Backdrop</h3>
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
                            <pre><code><<span>x-slide-ins.no-backdrop</span>/></code></pre>
                        </td>
                        <td>
                            <x-examples.buttons.filled
                                text="Åbn Slide-in uden Backdrop"
                                color="primary"
                                @click="slideWithoutBackdrop = true;"
                            />
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="align-middle">
                            <pre><code><<span>x-slide-ins.backdrop</span>/></code></pre>
                        </td>
                        <td>
                            <x-examples.buttons.filled
                                text="Åbn Slide-in med Backdrop"
                                color="secondary"
                                @click="slideWithBackdrop = true;"
                            />
                        </td>
                    </tr>
                    </tbody>
                </table>
            </x-examples.card.body>
        </x-examples.card.border>
    </div>
</x-layout>
