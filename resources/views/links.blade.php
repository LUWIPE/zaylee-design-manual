<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Links</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Links er klikbare tekst- eller iconelementer, der forbinder brugeren til en anden side, et
                        dokument eller en ekstern ressource. De udgør den primære metode til at hoppe mellem indhold og
                        funktioner i systemet.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p>
                        Links bruges til at navigere internt i applikationen, downloade filer eller åbne eksterne sider.
                        De kan placeres i brødtekst, lister, kort eller knapper og aktiveres med ét klik eller tryk. Når
                        brugeren holder musen over et link skifter det udseende for at vise, at elementet er
                        interaktivt.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Designprincipper</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Tydelighed:</span>
                        Links skal skille sig ud fra almindelig tekst via farve eller understregning; effekten
                        forstærkes ved hover.
                    </p>
                    <p>
                        <span class="font-bold">Tydelighed:</span>
                        Links skal skille sig ud fra almindelig tekst via farve eller understregning; effekten
                        forstærkes ved hover.
                    </p>
                    <p>
                        <span class="font-bold">Beskrivende tekst:</span>
                        Link‑tekster skal klart angive destinationen (fx “Download rapport” i stedet for “Klik her”).
                    </p>
                </div>
            </x-examples.card>
        </div>
        <x-examples.card>
            <div class="grid gap-2">
                <h3>Eksempler</h3>
                <table class="table table-default table-border table-compact">
                    <thead>
                    <tr class="table-row">
                        <th class="align-middle w-3/12">Type</th>
                        <th class="align-middle w-9/12">Eksempel</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="table-row">
                        <td>
                            <pre><code>hover:underline</code></pre>
                        </td>
                        <td>
                            <a href="#" class="hover:underline">Link</a>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td>
                            <pre><code>hover:text-primary</code></pre>
                        </td>
                        <td>
                            <a href="#" class="hover:text-primary">Link</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </x-examples.card>
    </div>
</x-layout>
