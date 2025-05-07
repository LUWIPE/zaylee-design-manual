<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>App</h1>
        </div>
        <x-examples.card.border>
            <x-examples.card.body>
                <p>
                    Medarbejder-appen er en specialiseret og forenklet applikation, der giver medarbejdere mulighed for
                    at registrere og holde styr på den tid, de bruger på forskellige jobs og opgaver. Formålet med appen
                    er at gøre tidsregistrering så nem, hurtig og overskuelig som muligt, uden at brugeren skal navigere
                    rundt i andre funktioner. Derfor er det den eneste handling, der kan udføres i appen.
                </p>
                <p>
                    Appen er udviklet med samme visuelle identitet som resten af systemet og benytter de samme
                    designprincipper, farver og typografi. Brugergrænsefladen er dog tilpasset til mobilenheder og
                    mindre skærme, hvilket betyder, at elementer er skaleret ned, og layoutet er simplificeret for at
                    sikre optimal brugervenlighed i en mobil kontekst.
                </p>
                <p>
                    Navigationen er fjernet helt for at reducere kompleksitet. I stedet indeholder appen kun en header
                    øverst, hvor man finder Zayles logo, kort information om den aktuelle bruger (f.eks. navn og/eller
                    profilbillede), samt en logud-knap, der giver mulighed for at skifte bruger.
                </p>
                <p>
                    Når brugeren åbner appen, mødes vedkommende af en velkomstside med en stor og tydelig “Start”-knap.
                    Når knappen aktiveres, præsenteres brugeren for en oversigt over opgaver og jobs, hvor man hurtigt
                    kan vælge, hvad man vil tracke tid på. Hver opgave kan aktiveres individuelt, og systemet holder
                    derefter automatisk styr på varigheden. Dette skaber en intuitiv oplevelse, hvor medarbejderen nemt
                    kan skifte mellem opgaver eller afslutte en registrering.
                </p>
                <p>
                    Appen er ideel til brug i felten eller på farten, hvor der er behov for hurtig og ubesværet
                    registrering af arbejdstid, uden at brugeren forstyrres af unødvendige funktioner eller lange
                    arbejdsgange.
                </p>
            </x-examples.card.body>
        </x-examples.card.border>
        <x-examples.card.border>
            <x-examples.card.body>
                <h3>Komponenter</h3>
                <p>
                    Komponenterne i medarbejder-appen er de samme som i det overordnede system. Det skaber en ensartet
                    og genkendelig brugeroplevelse, hvor medarbejdere let kan navigere og forstå appens funktioner uden
                    at skulle lære et nyt design eller nye interaktioner. Komponenterne er bygget op med et responsivt
                    design, hvilket betyder, at de automatisk tilpasser sig skærmstørrelsen og fungerer problemfrit på
                    både mindre og større enheder.
                </p>
                <p>
                    I praksis betyder det, at alle grundlæggende elementer – såsom knapper, lister, inputfelter,
                    beskeder og overskrifter – opfører sig intuitivt og tilpasser sig mobilens layout. Margener,
                    padding, tekststørrelser og klikbare områder er skaleret til touch-interaktion, uden at det går ud
                    over læsbarhed eller funktionalitet.
                </p>
                <p>
                    Samtidig understøtter komponenterne appens minimalistiske tilgang. Fordi funktionaliteten er
                    fokuseret på tidstracking, er layoutet enkelt, og komponenterne er renset for unødvendige visuelle
                    elementer, der kunne distrahere brugeren. Den konsistente brug af komponenter sikrer også, at
                    eventuelle opdateringer eller designændringer i hovedsystemet let kan implementeres i appen uden
                    ekstra tilpasning.
                </p>
                <p>
                    Derudover er det muligt at genbruge hele komponentbiblioteket uden omskrivning, hvilket både sparer
                    tid i udvikling og sikrer teknisk vedligeholdelse på tværs af platforme. Komponenten justeres med
                    Tailwinds responsive klasser og fungerer uanset device- eller skærmstørrelse.
                </p>
            </x-examples.card.body>
        </x-examples.card.border>
    </div>
</x-layout>
