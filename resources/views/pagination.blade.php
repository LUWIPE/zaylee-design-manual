<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Paginering</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-expamples.card>
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
            </x-expamples.card>
            <x-expamples.card>
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
            </x-expamples.card>
            <x-expamples.card>
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
            </x-expamples.card>
        </div>
    <x-expamples.card>
    <div class="pagination mt-3 flex align-middle justify-center gap-5 h-12">
        <div class="pagination-pager-prev me-3">
            <button class="pagination-icon-disabled flex items-center">
                <x-icons.chevron-left/>
            </button>
        </div>
        <div class="flex align-middle gap-3 ">
            <p class="pagination-text">Side <span id="pageOf">1</span> af 10</p>
        </div>
        <div class="pagination-pager-next ms-3 flex items-center">
            <button class="pagination-icon">
                <x-icons.chevron-right/>
            </button>
        </div>
    </div>
    </x-expamples.card>
    </div>
</x-layout>
