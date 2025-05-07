<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Ny side</h1>
        </div>
        <x-examples.card.border>
            <x-examples.card.body>
                <p>
                    Når en ny side skal oprettes i applikationen, tages der altid udgangspunkt i komponenten x-layout.
                    Denne layout-komponent sørger for, at siden automatisk bliver indrammet af applikationens
                    overordnede struktur, herunder sidenavigation, header og indholdsområde. Dette sikrer ensartethed og
                    genkendelighed på tværs af systemets sider.
                </p>
                <p>
                    Efter at x-layout er defineret, opbygges selve sideindholdet inden for to vigtige
                    div-containere, som følger en fast struktur.
                </p>
                <p>
                    Den yderste container (page-container) håndterer spacing, layoutjustering og fleksibel højde på
                    siden, så indholdet tilpasser sig skærmens størrelse. Den inderste container sørger for, at det
                    faktiske indhold centreres og får korrekt bredde og højde. Her placeres det ønskede indhold såsom
                    komponenter, tekst, tabeller, formularer eller billeder.
                </p>
                <p>
                    Ved at følge denne struktur sikres både visuel konsistens og korrekt responsivt design. Samtidig gør
                    det koden lettere at læse og vedligeholde, da alle sider opbygges efter samme skabelon.
                </p>
            </x-examples.card.body>
            <x-examples.card.footer class="bg-dark">
                <pre><code class="language-html code-block">{{ html_entity_decode(view('code-blocks.new-page')->render()) }}</code></pre>
            </x-examples.card.footer>
        </x-examples.card.border>
    </div>
</x-layout>
