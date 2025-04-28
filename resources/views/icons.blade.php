@php
    use Illuminate\Support\Facades\File;
@endphp
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
                        Samme ikon skal altid bruges til samme funktion. Det bidrager til genkendelighed på tværs af
                        systemet.
                    </p>
                    <p>
                        <span class="font-bold">Placering og størrelse:</span>
                        Ikoner skal placeres konsekvent i forhold til tekst og andre elementer. De skal tilpasses
                        layoutets grid og spacing afhængigt af konteksten.
                    </p>
                    <p>
                        <span class="font-bold">Stil og æstetik:</span>
                        Font Awesome-ikonerne følger et minimalistisk og moderne udtryk.
                    </p>
                    <p>
                        <span class="font-bold">Farver og tilstande:</span>
                        I interaktive elementer (som knapper eller links) kan ikoner reagere på brugerens handlinger.
                    </p>
                </div>
            </x-examples.card>
        </div>
        <x-examples.card>
            <div class="grid gap-2">
                <h3>Eksempler</h3>
                <div class="grid grid-cols-8 gap-4 items-center justify-center">
                    @php
                        $icons = File::files(resource_path('views/components/examples/icons'));
                    @endphp

                    @foreach($icons as $icon)
                        @php
                            $iconName = str_replace('.blade.php', '', $icon->getFilename());
                        @endphp

                        <div class="flex flex-col items-center">
                            <div class="border border-black p-2 example-icon">
                                <x-dynamic-component :component="'examples.icons.' . $iconName"/>
                            </div>
                            <div>
                                <pre><p><<code class="text-center text-xs">x-icons.{{ $iconName }}</code>/></p></pre>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </x-examples.card>
        <x-examples.card>
            <div class="grid gap-2">
                <h3>Interaktioner</h3>
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
                            <p>Hover: Skift farve</p>
                        </td>
                        <td>
                            <div class="example-icon p-3 hover:fill-info hover:stroke-info">
                                <x-examples.icons.edit/>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="align-middle">
                            <p>Hover: Skift baggrund</p>
                        </td>
                        <td>
                        <div class="example-icon p-3 rounded-full hover:bg-gray-200">
                            <x-examples.icons.edit/>
                        </div>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="align-middle">
                            <p>Hover: Skift farve og baggrund</p>
                        </td>
                        <td>
                        <div class="example-icon p-3 rounded-full hover:bg-primary hover:fill-white hover:stroke-white">
                            <x-examples.icons.edit/>
                        </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </x-examples.card>
    </div>
</x-layout>
