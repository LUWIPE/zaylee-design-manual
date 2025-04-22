<x-layout>
    <div class="grid gap-4">
        <div>
            <h1 class="mt-4">Typografi</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-expamples.card>
                <h3>Definition</h3>
                <p>Den primære skrifttype i systemet er Roboto Flex fra Google Fonts. Det er en moderne, variabel
                    skrifttype, der giver stor fleksibilitet i udtryk gennem justerbar vægt, bredde og hældning. Roboto
                    Flex sikrer høj læsbarhed og gør det muligt at skabe et ensartet og professionelt udtryk på tværs af
                    platforme og skærmstørrelser.</p>
            </x-expamples.card>
            <x-expamples.card>
                <h3>Funktionalitet</h3>
                <p>
                    Som variabel skrifttype er der mulighed for præcis justering af blandt andet vægt og hældning,
                    hvilket gør det let at tilpasse typografien til forskellige formål og visuelle udtryk. Dette sikrer
                    en ensartet og professionel typografi, samtidig med at læsbarheden bevares på tværs af formater og
                    anvendelser.
                </p>
            </x-expamples.card>
            <x-expamples.card>
                <h3>Designprincipper</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Konsistens:</span>
                        Bruges på tværs af hele designet for at sikre ensartethed i typografi.
                    </p>
                    <p>
                        <span class="font-bold">Variabel justering:</span>
                        Typografiens vægt og hældning tilpasses efter behov, alt efter kontekst og visuelt hierarki.
                    </p>
                </div>
            </x-expamples.card>
        </div>
        <x-expamples.card>
            <div class="grid gap-2">
                <h3>Størrelser</h3>
                <table class="table table-default table-border table-compact">
                    <thead>
                    <tr>
                        <th>Tag</th>
                        <th>Eksempel</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <pre><code>h1</code></pre>
                        </td>
                        <td><h1>h1 - Overskrift</h1></td>
                    </tr>
                    <tr>
                        <td>
                            <pre><code>h2</code></pre>
                        </td>
                        <td><h2>h2 - Overskrift</h2></td>
                    </tr>
                    <tr>
                        <td>
                            <pre><code>h3</code></pre>
                        </td>
                        <td><h3>h3 - Overskrift</h3></td>
                    </tr>
                    <tr>
                        <td>
                            <pre><code>h4</code></pre>
                        </td>
                        <td><h4>h4 - Overskrift</h4></td>
                    </tr>
                    <tr>
                        <td>
                            <pre><code>h5</code></pre>
                        </td>
                        <td><h5>h5 - Overskrift</h5></td>
                    </tr>
                    <tr>
                        <td>
                            <pre><code>h6</code></pre>
                        </td>
                        <td><h6>h6 - Overskrift</h6></td>
                    </tr>
                    <tr>
                        <td>
                            <pre><code>p</code></pre>
                        </td>
                        <td><p>p - Paragraf</p></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </x-expamples.card>
        <x-expamples.card>
            <div class="grid gap-2">
                <h3>Fontvægt</h3>
                <table class="table table-default table-border table-compact">
                    <thead>
                    <tr>
                        <th>Vægt</th>
                        <th>Eksempel</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <pre><code>font-thin</code></pre>
                        </td>
                        <td><p class="font-thin">font-thin (font-weight: 100)</p></td>
                    </tr>
                    <tr>
                        <td>
                            <pre><code>font-extralight</code></pre>
                        </td>
                        <td><p class="font-extralight">font-extralight (font-weight: 200)</p></td>
                    </tr>
                    <tr>
                        <td>
                            <pre><code>font-light</code></pre>
                        </td>
                        <td><p class="font-light">font-light (font-weight: 300)</p></td>
                    </tr>
                    <tr>
                        <td>
                            <pre><code>font-light</code></pre>
                        </td>
                        <td><p class="font-light">font-light (font-weight: 400)</p></td>
                    </tr>
                    <tr>
                        <td>
                            <pre><code>font-normal</code></pre>
                        </td>
                        <td><p class="font-normal">font-normal (font-weight: 500)</p></td>
                    </tr>
                    <tr>
                        <td>
                            <pre><code>font-medium</code></pre>
                        </td>
                        <td><p class="font-medium">font-medium (font-weight: 600)</p></td>
                    </tr>
                    <tr>
                        <td>
                            <pre><code>font-semibold</code></pre>
                        </td>
                        <td><p class="font-semibold">font-semibold (font-weight: 700)</p></td>
                    </tr>
                    <tr>
                        <td>
                            <pre><code>font-bold</code></pre>
                        </td>
                        <td><p class="font-bold">font-bold (font-weight: 800)</p></td>
                    </tr>
                    <tr>
                        <td>
                            <pre><code>font-black</code></pre>
                        </td>
                        <td><p class="font-black">font-black (font-weight: 900)</p></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </x-expamples.card>
        <x-expamples.card>
            <div class="grid gap-2">
                <h3>Tekstfarver</h3>
                <div class="grid grid-cols-6 gap-4">
                    <p class="text-white">White</p>
                    <p class="text-light">Light</p>
                    <p class="text-dark">Dark</p>
                </div>
                <div class="grid grid-cols-6 gap-4">
                    <p class="text-primary">Primary</p>
                    <p class="text-secondary">Secondary</p>
                    <p class="text-info">Info</p>
                    <p class="text-success">Success</p>
                    <p class="text-warning">Warning</p>
                    <p class="text-error">Error</p>
                </div>
                <div class="grid grid-cols-6 gap-4">
                    <p class="text-primary-light">Primary-light</p>
                    <p class="text-secondary-light">Secondary-light</p>
                    <p class="text-info-light">Info-light</p>
                    <p class="text-success-light">Success-light</p>
                    <p class="text-warning-light">Warning-light</p>
                    <p class="text-error-light">Error-light</p>
                </div>
                <div class="grid grid-cols-6 gap-4">
                    <p class="text-primary-dark">Primary-dark</p>
                    <p class="text-secondary-dark">Secondary-dark</p>
                    <p class="text-info-dark">Info-dark</p>
                    <p class="text-success-dark">Success-dark</p>
                    <p class="text-warning-dark">Warning-dark</p>
                    <p class="text-error-dark">Error-dark</p>
                </div>
                <div class="grid grid-cols-6 gap-4">
                    <p class="text-gray-50">Gray-50</p>
                    <p class="text-gray-100">Gray-100</p>
                    <p class="text-gray-200">Gray-200</p>
                    <p class="text-gray-300">Gray-300</p>
                    <p class="text-gray-400">Gray-400</p>
                    <p class="text-gray-500">Gray-500</p>
                    <p class="text-gray-600">Gray-600</p>
                    <p class="text-gray-700">Gray-700</p>
                    <p class="text-gray-800">Gray-800</p>
                    <p class="text-gray-900">Gray-900</p>
                    <p class="text-gray-950">Gray-950</p>
                    <p class="text-black">Black</p>
                </div>
            </div>
        </x-expamples.card>
    </div>
</x-layout>
