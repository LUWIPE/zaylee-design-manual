<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Ikoner</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Ikoner er grafiske symboler, der repræsenterer funktioner, navigation og status i brugerfladen.
                        De gør interfacet mere intuitivt ved at give hurtig visuel afkodning og understøtte brugerens
                        navigation. Samtidig skaber de visuel konsistens og reducerer behovet for forklarende tekst.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p>
                        koner anvendes aktivt til at forstærke forståelsen af brugerfladens elementer. De fungerer som
                        klikbare navigationspunkter, statusindikatorer og vejledende symboler i forskellige sammenhænge.
                        I navigationsmenuen repræsenterer de forskellige sider, mens de i funktionelle områder som
                        beskeder, lister og knapper giver hurtig kontekst. Deres placering og betydning er konsekvent
                        for at sikre genkendelighed og effektiv interaktion.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Designprincipper</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Konsistens:</span>
                        Samme ikon skal altid bruges til samme funktion. Det bidrager til brugerens mentale model og
                        genkendelighed på tværs af systemet.
                    </p>
                    <p>
                        <span class="font-bold">Placering og størrelse:</span>
                        koner skal placeres konsekvent i forhold til tekst og andre elementer. De skal tilpasses
                        layoutets grid og spacing afhængigt af konteksten. For store eller små ikoner kan skabe ubalance
                        i designet.
                    </p>
                    <p>
                        <span class="font-bold">Stil og æstetik:</span>
                        Font Awesome-ikonerne følger et minimalistisk og moderne udtryk. Der må ikke tilføjes skygger,
                        outlines eller gradienter, og ikonerne må ikke spejlvendes, strækkes eller roteres, medmindre
                        det er nødvendigt for forståelsen (fx en pil der peger i en bestemt retning).
                    </p>
                    <p>
                        <span class="font-bold">Farver og tilstande:</span>
                        I interaktive elementer (som knapper eller links) kan ikoner reagere på brugerens handlinger.
                    </p>
                </div>
            </x-examples.card>
        </div>
        <x-examples.card>
            <div class="grid grid-cols-12 gap-4 items-center justify-center">
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon">
                        <x-examples.icons.account/>
                    </div>
                    <div>
                        <p class="text-center">Selskab</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon">
                        <x-examples.icons.profile/>
                    </div>
                    <div>
                        <p class="text-center">Profil</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon">
                        <x-examples.icons.employee/>
                    </div>
                    <div>
                        <p class="text-center">Medarbejdere</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon">
                        <x-examples.icons.home/>
                    </div>
                    <div>
                        <p class="text-center">Hjem</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon">
                        <x-examples.icons.customer/>
                    </div>
                    <div>
                        <p class="text-center">Kunder</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <a target="new" href="https://fontawesome.com/icons/arrow-progress?f=classic&s=solid"
                           class="hover:underline">PRO</a>
                    </div>
                    <div>
                        <p class="text-center">Pipeline</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.cadastre/>
                    </div>
                    <div>
                        <p class="text-center">Matrikel</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.placement/>
                    </div>
                    <div>
                        <p class="text-center">Placering</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.quote/>
                    </div>
                    <div>
                        <p class="text-center">Tilbud</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <a target="new" href="https://fontawesome.com/icons/table-rows?f=classic&s=solid"
                           class="hover:underline">PRO</a>
                    </div>
                    <div>
                        <p class="text-center">Sektioner</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.lines/>
                    </div>
                    <div>
                        <p class="text-center">Linjer</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.case/>
                    </div>
                    <div>
                        <p class="text-center">Sager</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.service/>
                    </div>
                    <div>
                        <p class="text-center">Service</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <a target="new" href="https://fontawesome.com/icons/list-tree?f=classic&s=solid"
                           class="hover:underline">PRO</a>
                    </div>
                    <div>
                        <p class="text-center">Servicegruppe</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.planning/>
                    </div>
                    <div>
                        <p class="text-center">Planlægning</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.job/>
                    </div>
                    <div>
                        <p class="text-center">Job</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.timetracking/>
                    </div>
                    <div>
                        <p class="text-center">Tidsregistrering</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.equipment/>
                    </div>
                    <div>
                        <p class="text-center">Udstyr</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <a target="new" href="https://fontawesome.com/icons/ballot-check?f=classic&s=solid"
                           class="hover:underline">PRO</a>
                    </div>
                    <div>
                        <p class="text-center">Opgave</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.subtask/>
                    </div>
                    <div>
                        <p class="text-center">Delopgave</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.subscription/>
                    </div>
                    <div>
                        <p class="text-center">Abonnement</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.economy/>
                    </div>
                    <div>
                        <p class="text-center">Økonomi</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.invoice/>
                    </div>
                    <div>
                        <p class="text-center">Faktura</p>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="border border-black p-2 example-icon flex justify-center items-center">
                        <x-examples.icons.notification/>
                    </div>
                    <div>
                        <p class="text-center">Notifikation</p>
                    </div>
                </div>
            </div>
        </x-examples.card>
    </div>
</x-layout>
