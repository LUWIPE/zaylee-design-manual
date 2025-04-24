<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Billeder</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Billeder spiller en central rolle i det visuelle design og bruges til at understøtte
                        information, skabe genkendelighed og give brugeren en mere intuitiv og visuel oplevelse. I
                        systemet arbejdes der med tre overordnede billedtyper: profilbilleder, dokumentationsbilleder
                        og notebilleder. Hver type har sin egen funktion og visuelle anvendelse, og billederne er
                        integreret i grænsefladen på en måde, der både understøtter det praktiske formål og bidrager til
                        et visuelt sammenhængende udtryk.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p>
                        Billeder anvendes som en visuel støtte til at skabe genkendelighed, dokumentation og kontekst i
                        systemet. Profilbilleder hjælper med at identificere brugere og tilknytning til specifikke
                        elementer. Dokumentationsbilleder, som f.eks. certifikater, giver visuel bekræftelse på vigtige
                        oplysninger, mens notebilleder bruges til at supplere og understøtte skriftligt indhold.
                        Billedfunktionaliteten er tilpasset konteksten, så billeder vises i relevante størrelser og
                        formater uden at forstyrre brugerens navigation eller læseoplevelse.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Designprincipper</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Skalérbarhed:</span>
                        Profilbilleder skal kunne tilpasses forskellige formater og visningsstørrelser.
                    </p>
                    <p>
                        <span class="font-bold">Kvalitet og optimering:</span>
                        Billederne bør være i høj kvalitet, men samtidig optimeret til hurtig indlæsning.
                    </p>
                    <p>
                        <span class="font-bold">Konsistens:</span>
                        Profilbilleder vises enten som runde eller firkantede afhængigt af konteksten.
                    </p>

                </div>
            </x-examples.card>
        </div>
        <x-examples.card>
            <div class="grid gap-2">
                <h3>Profilbilleder</h3>
                <table class="table table-default table-border table-compact">
                    <thead>
                    <tr class="table-row">
                        <th>Type</th>
                        <th>
                            <pre><code>avatar-normal</code></pre>
                        </th>
                        <th>
                            <pre><code>avatar-xl</code></pre>
                        </th>
                        <th>
                            <pre><code>avatar-lg</code></pre>
                        </th>
                        <th>
                            <pre><code>avatar-md</code></pre>
                        </th>
                        <th>
                            <pre><code>avatar-sm</code></pre>
                        </th>
                        <th>
                            <pre><code>avatar-xs</code></pre>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="table-row">
                        <td class="align-middle">Runde</td>
                        <td class="align-top">
                            <div class="avatar avatar-normal avatar-circle">
                                <img class="avatar-img avatar-circle"
                                     src="https://placehold.co/600?text=Profile\nNormal" alt="">
                            </div>
                        </td>
                        <td class="align-top">
                            <div class="avatar avatar-xl avatar-circle">
                                <img class="avatar-img avatar-circle"
                                     src="https://placehold.co/600?text=Profile\nExtra Large" alt="">
                            </div>
                        </td>
                        <td class="align-top">
                            <div class="avatar avatar-lg avatar-circle">
                                <img class="avatar-img avatar-circle"
                                     src="https://placehold.co/600?text=Profile\nLarge" alt="">
                            </div>
                        </td>
                        <td class="align-top">
                            <div class="avatar avatar-md avatar-circle">
                                <img class="avatar-img avatar-circle"
                                     src="https://placehold.co/600?text=Profile\nMedium" alt="">
                            </div>
                        </td>
                        <td class="align-top">
                            <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img avatar-circle"
                                     src="https://placehold.co/600?text=Profile\nSmall" alt="">
                            </div>
                        </td>
                        <td class="align-top">
                            <div class="avatar avatar-xs avatar-circle">
                                <img class="avatar-img avatar-circle"
                                     src="https://placehold.co/600?text=Profile\nExtra Small" alt="">
                            </div>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="align-middle">Firkantede</td>
                        <td class="align-top">
                            <div class="avatar avatar-normal">
                                <img class="avatar-img"
                                     src="https://placehold.co/600?text=Profile\nNormal" alt="">
                            </div>
                        </td>
                        <td class="align-top">
                            <div class="avatar avatar-xl">
                                <img class="avatar-img"
                                     src="https://placehold.co/600?text=Profile\nExtra Large" alt="">
                            </div>
                        </td>
                        <td class="align-top">
                            <div class="avatar avatar-lg">
                                <img class="avatar-img"
                                     src="https://placehold.co/600?text=Profile\nLarge" alt="">
                            </div>
                        </td>
                        <td class="align-top">
                            <div class="avatar avatar-md">
                                <img class="avatar-img"
                                     src="https://placehold.co/600?text=Profile\nMedium" alt="">
                            </div>
                        </td>
                        <td class="align-top">
                            <div class="avatar avatar-sm">
                                <img class="avatar-img"
                                     src="https://placehold.co/600?text=Profile\nSmall" alt="">
                            </div>
                        </td>
                        <td class="align-top">
                            <div class="avatar avatar-xs">
                                <img class="avatar-img"
                                     src="https://placehold.co/600?text=Profile\nExtra Small" alt="">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </x-examples.card>
    </div>
</x-layout>
