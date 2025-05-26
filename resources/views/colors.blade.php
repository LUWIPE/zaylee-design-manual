<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Farver</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <p>
                    Systemet bygger på et sæt nøje udvalgte farver, der skaber en visuel identitet og støtter
                    brugeroplevelsen med klare signaler og hierarkier. Farverne er defineret med HEX
                    og er opdelt i funktionelle grupper. Hver farve har en light og dark variant, hvilket giver
                    fleksibilitet til forskellige situationer som hover-effekter, inaktive tilstande og kontrast i lyse
                    eller mørke layouts.
                </p>
            </x-examples.card>
            <x-examples.card>
                <h3>Funktionalitet</h3>
                <p>
                    Farverne i designet er ikke blot visuelle elementer, men spiller en vigtig rolle i at formidle
                    funktion, betydning og brugerens interaktion med systemet. Hver farvekategori har en specifik rolle,
                    som bidrager til at skabe tydelighed, genkendelighed og en intuitiv brugeroplevelse.
                </p>
            </x-examples.card>
            <x-examples.card>
                <h3>Designprincipper</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Konsistens: </span>
                        Kombinationen af mørke og lyse nuancer skaber
                        balance og tydelighed, mens accent- og feedbackfarver styrker brugeroplevelsen ved at signalere
                        handlinger og tilstande.
                    </p>
                    <p>
                        <span class="font-bold">Kontrast:</span>
                        Sørg for tilstrækkelig kontrast mellem tekst og baggrund.
                    </p>
                    <p>
                        <span class="font-bold">Klarhed:</span>
                        Undgå at bruge farver alene som det eneste middel til at formidle information (brug også ikoner,
                        tekst eller form).
                    </p>
                </div>
            </x-examples.card>
        </div>
        <x-examples.card>
            <div class="grid gap-2">
                <h3>Baggrundsfarver</h3>
                <p>
                    Baggrundsfarver skaber fundamentet for det visuelle udtryk og understøtter både stemning og
                    læsbarhed. De påvirker, hvordan brugeren oplever indholdet, og hjælper med at skabe hierarki, fokus
                    og balance i designet.
                </p>
                <p>Systemet har 3 gennemgående baggrundsfarver:</p>
                <div class="grid grid-cols-3 gap-3">
                    <div class="bg-white border border-black">
                        <p class="text-black text-center p-2">white (#ffffff)</p>
                    </div>
                    <div class="bg-light">
                        <p class="text-black text-center p-2">light (#fff4e5)</p>
                    </div>
                    <div class="bg-dark">
                        <p class="text-white text-center p-2">dark (#333333)</p>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <p>
                        Systemets primære baggrundsfarve og bruges til hovedindholdet for at sikre et lyst og rent
                        udtryk.
                    </p>
                    <p>
                        Anvendes som en støttende farve, fx i sektioner eller felter, hvor der ønskes en let visuel
                        adskillelse.
                    </p>
                    <p>
                        Bruges primært i navigationsområdet og giver en tydelig kontrast, der hjælper med at skabe
                        struktur og overblik
                    </p>
                </div>
            </div>
        </x-examples.card>
        <x-examples.card>
            <div class="grid gap-2">
                <h3>Temafarver</h3>
                <div class="grid gap-2">
                    <p>
                        Hver farve har en tydelig funktion i grænsefladen – fra at markere primære handlinger til at
                        vise information, status eller advarsler. Sammen danner de en klar og konsistent visuel ramme,
                        der styrker både brugervenlighed og genkendelighed i systemet. Lysere og mørkere versioner af de
                        eksisterende farver giver designet dybde og kontrast. Begge versioner bevarer den visuelle
                        sammenhæng og giver fleksibilitet, samtidig med at brandets identitet styrkes.
                    </p>
                    <p>Farvetemaet består af seks centrale farver med hver deres light- og darkversion:</p>
                    <div class="grid grid-cols-6 gap-3">
                        <div class="bg-primary border border-primary">
                            <p class="text-white text-center p-2">primary (#1b3b6f)</p>
                        </div>
                        <div class="bg-secondary border border-secondary">
                            <p class="text-white text-center p-2">secondary (#f5a623)</p>
                        </div>
                        <div class="bg-info border border-info">
                            <p class="text-white text-center p-2">info (#5bc0de)</p>
                        </div>
                        <div class="bg-success border border-success">
                            <p class="text-white text-center p-2">success (#10b568)</p>
                        </div>
                        <div class="bg-warning border border-warning">
                            <p class="text-white text-center p-2">warning (#e8cf0e)</p>
                        </div>
                        <div class="bg-error border border-error">
                            <p class="text-white text-center p-2">error (#fa1805)</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-3">
                    <div class="bg-primary-light border border-primary-light">
                        <p class="text-black text-center p-2">primary-light (#6c85a7)</p>
                    </div>
                    <div class="bg-secondary-light border border-secondary-light">
                        <p class="text-black text-center p-2">secondary-light (#fbdca2)</p>
                    </div>
                    <div class="bg-info-light border border-info-light">
                        <p class="text-black text-center p-2">info-light (#b1dfe9)</p>
                    </div>
                    <div class="bg-success-light border border-success-light">
                        <p class="text-black text-center p-2">success-light (#90d6b0)</p>
                    </div>
                    <div class="bg-warning-light border border-warning-light">
                        <p class="text-black text-center p-2">warning-light (#f3ec9e)</p>
                    </div>
                    <div class="bg-error-light border border-error-light">
                        <p class="text-black text-center p-2">error-light (#f7a8a0)</p>
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-3">
                    <div class="bg-primary-dark border border-primary-dark">
                        <p class="text-white text-center p-2">primary-dark (#122448)</p>
                    </div>
                    <div class="bg-secondary-dark border border-secondary-dark">
                        <p class="text-white text-center p-2">secondary-dark (#b97c14)</p>
                    </div>
                    <div class="bg-info-dark border border-info-dark">
                        <p class="text-white text-center p-2">info-dark (#3196b1)</p>
                    </div>
                    <div class="bg-success-dark border border-success-dark">
                        <p class="text-white text-center p-2">success-dark (#0a804a)</p>
                    </div>
                    <div class="bg-warning-dark border border-warning-dark">
                        <p class="text-white text-center p-2">warning-dark (#a5950a)</p>
                    </div>
                    <div class="bg-error-dark border border-error-dark">
                        <p class="text-white text-center p-2">error-dark (#a31008)</p>
                    </div>
                </div>
            </div>
        </x-examples.card>
        <x-examples.card>
            <div class="grid gap-2">
                <h3>Gråtoner</h3>
                <p>
                    Gråtonerne bruges til at skabe balance, hierarki og struktur uden at dominere det visuelle udtryk.
                    De anvendes blandt andet til baggrunde, kantlinjer, tekst og UI-elementer i neutrale tilstande.
                </p>
                <p>
                    De definerede gråtoner i systemet er:
                </p>
                <div class="grid grid-cols-3 gap-3">
                    <div class="bg-gray-50">
                        <p class="text-black text-center p-2">gray-50 (#fafafa)</p>
                    </div>
                    <div class="bg-gray-100">
                        <p class="text-black text-center p-2">gray-100 (#f5f5f5)</p>
                    </div>
                    <div class="bg-gray-200">
                        <p class="text-black text-center p-2">gray-200 (#e5e5e5)</p>
                    </div>
                    <div class="bg-gray-300">
                        <p class="text-black text-center p-2">gray-300 (#d4d4d4)</p>
                    </div>
                    <div class="bg-gray-400">
                        <p class="text-black text-center p-2">gray-400 (#a3a3a3)</p>
                    </div>
                    <div class="bg-gray-500">
                        <p class="text-white text-center p-2">gray-500 (#737373)</p>
                    </div>
                    <div class="bg-gray-600">
                        <p class="text-white text-center p-2">gray-600 (#525252)</p>
                    </div>
                    <div class="bg-gray-700">
                        <p class="text-white text-center p-2">gray-700 (#404040)</p>
                    </div>
                    <div class="bg-gray-800">
                        <p class="text-white text-center p-2">gray-800 (#262626)</p>
                    </div>
                    <div class="bg-gray-900">
                        <p class="text-white text-center p-2">gray-900 (#171717)</p>
                    </div>
                    <div class="bg-gray-950">
                        <p class="text-white text-center p-2">gray-950 (#0a0a0a)</p>
                    </div>
                    <div class="bg-black">
                        <p class="text-white text-center p-2">black (#000000)</p>
                    </div>
                </div>
            </div>
        </x-examples.card>
        <x-examples.card>
            <div class="grid gap-2">
                <h3>Tailwind farver</h3>
                <p>
                    Ud over de definerede systemfarver kan der også anvendes farver fra Tailwinds standardpalette, når
                    det er relevant. Tailwinds palette indeholder et bredt udvalg af farver i forskellige nuancer.
                </p>
                <p>
                    <a href="https://tailwindcss.com/docs/customizing-colors" target="_blank"
                       class="underline hover:text-primary">
                        Klik her for at se en liste over alle farver i Tailwinds palette.
                    </a>
                </p>
            </div>
        </x-examples.card>
    </div>
</x-layout>
