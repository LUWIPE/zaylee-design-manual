<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Beskeder</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Beskeder som succes-, advarsels- og fejlbeskeder bruges til at give brugeren tydelig feedback på
                        handlinger i applikationen. De formidler, om en opgave er fuldført korrekt, om der er forhold,
                        som kræver brugerens vurdering, eller om en proces er mislykket og skal rettes. Denne løbende
                        statusinformation gør det nemt for brugeren at forstå, hvad der sker i systemet, træffe
                        informerede valg og hurtigt rette eventuelle fejl.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p>
                        Applikationen benytter tre slags systembeskeder til at guide brugeren. Succesbeskeder bekræfter,
                        at en handling er fuldført korrekt, som når der står “Data er gemt”. Advarselsbeskeder gør
                        opmærksom på forhold, der kan kræve brugerens vurdering uden at være kritiske fejl, fx “Du er
                        ved at slette en post”. Fejlbeskeder fortæller, at en handling ikke kan gennemføres, eller at
                        der mangler input, som i “Udfyld alle påkrævede felter”.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Designprincipper</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Farvekodning:</span>
                        Bruges til at skelne mellem beskedtyper.
                        <span class="text-success bg-success">farve</span> for succes,
                        <span class="text-warning bg-warning">farve</span> for advarsler og
                        <span class="text-error bg-error">farve</span> for fejl.
                    </p>
                    <p>
                        <span class="font-bold">Tydelighed:</span>
                        Beskederne skal være korte, præcise og synlige.
                    </p>
                    <p>
                        <span class="font-bold">Placering:</span>
                        De vises som regel tæt på det element, de relaterer sig til – eller i toppen af siden ved
                        generelle beskeder.
                    </p>
                </div>
            </x-examples.card>
        </div>
        <x-examples.card>
            <div class="grid gap-2">
                <table class="table table-default table-border table-compact">
                    <thead>
                    <tr class="table-row">
                        <th>Type</th>
                        <th colspan="2">Eksempel</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $messages = ['success', 'warning', 'error'];
                    @endphp
                    @foreach($messages as $message)
                        <tr class="table-row">
                            <td class="align-middle w-2/12">
                                <pre><code>{{ $message }}</code></pre>
                            </td>
                            <td class="align-middle w-9/12">
                                <x-examples.pop-ups.messages :message="$message"/>
                            </td>
                            <td class="align-middle w-1/12">
                                <x-examples.buttons.filled
                                    text="Vis"
                                    :color="$message"
                                    :onclick="'let el = document.getElementById(\'message-' . $message . '\'); el.classList.remove(\'hidden\'); setTimeout(() => el.classList.add(\'hidden\'), 3000)'"
                                />
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </x-examples.card>
    </div>
</x-layout>
