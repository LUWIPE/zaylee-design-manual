<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Paginering</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Pagination opdeler store lister med data i mindre, overskuelige sektioner eller sider, hvilket
                        gør det lettere for brugeren at navigere gennem store mængder information. Ved at vise et
                        begrænset antal elementer ad gangen undgår man at overbelaste skærmen og sikrer en mere
                        fokuseret og effektiv navigation. Pagination giver brugeren mulighed for at navigere mellem
                        siderne, hvilket forbedrer både ydeevnen og brugeroplevelsen, især i applikationer med store
                        databaser eller lange lister.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p>
                        Paginering er opbygget med to chevrons, der peger i hver sin retning, som giver brugeren
                        mulighed for at navigere til henholdsvis den forrige og næste side. Mellem chevronerne vises en
                        tekst som “side x af x”, der informerer brugeren om den aktuelle position i forhold til det
                        samlede antal sider. Denne struktur gør navigationen både intuitiv og let at forstå.
                        Paginering er designet som en komponent, der kan genbruges på tværs af applikationen, hvilket
                        sikrer en ensartet og effektiv navigationsoplevelse i alle relevante sektioner.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Designprincipper</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Brugercentreret:</span>
                        Paginering gør navigation gennem lange lister enkel og intuitiv, med en tydelig indikation af,
                        hvilken side brugeren er på.
                    </p>
                    <p>
                        <span class="font-bold">Visuel klarhed:</span>
                        De aktive chevrons og side-numre er lette at identificere, og den highlightede aktive side giver
                        hurtigt visuel feedback på den aktuelle position.
                    </p>
                    <p>
                        <span class="font-bold">Interaktivitet:</span>
                        Hover-effekten på chevrons gør det klart for brugeren, hvornår de kan interagere med
                        paginering, hvilket forbedrer brugerens engagement og interaktion.
                    </p>
                </div>
            </x-examples.card>
        </div>
        <x-examples.card>
            <div x-data="{ page: 1, minPage: 1, totalPages: 10 }"
                 class="pagination mt-3 flex align-middle justify-center gap-5 h-12">
                <div class="pagination-pager-prev me-3">
                    <button
                        x-bind:disabled="page === minPage"
                        x-on:click="page--"
                        x-cloak
                        class="pagination-icon"
                        x-bind:class="page !== minPage ? 'hover:fill-primary hover:stroke-primary' : ''"
                    >
                        <x-examples.icons.chevron-left/>
                    </button>
                </div>
                <div class="flex align-middle justify-center gap-1 h-6 border-2 border-transparent w-24">
                    <p>Side <span x-text="page"></span> af <span x-text="totalPages"></span></p>
                </div>
                <div class="pagination-pager-next ms-3 flex items-center">
                    <button
                        x-bind:disabled="page === totalPages"
                        x-on:click="page++"
                        x-cloak
                        class="pagination-icon"
                        x-bind:class="page !== totalPages ? 'hover:fill-primary hover:stroke-primary' : ''"
                    >
                        <x-examples.icons.chevron-right/>
                    </button>
                </div>
            </div>
        </x-examples.card>
    </div>
</x-layout>
