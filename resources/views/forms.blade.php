<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Formularer</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Formularer består af felter som tekstbokse, radioknapper, checkboxe og dropdowns, der indsamler
                        brugerens input på en struktureret måde. Klare etiketter og hjælpetekster beskriver hvert felt,
                        og valideringsbeskeder sikrer, at data indtastes korrekt.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p>
                        Formularer indsamler data via forskellige inputtyper som tekstfelter, dropdowns og checkboxe,
                        alt efter behov. Alle form‑items refereres som x-fields.{komponentnavn} i Blade‑templates. De
                        reagerer hurtigt på fejl, så brugeren kan rette input uden at miste det skrevne, og giver
                        tydelig besked om, hvorvidt indsendelsen er lykkedes.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Struktur:</span>
                        Formularfelter arrangeres logisk med labels, inputfelter og hjælpebeskeder.
                    </p>
                    <p>
                        <span class="font-bold">Ensartethed:</span>
                        Alle komponenter fra fields-mappen følger den samme styling og spacing for et konsistent udtryk.
                    </p>
                    <p>
                        <span class="font-bold">Feedback:</span>
                        Fejlmeddelelser og validering vises tydeligt.
                    </p>
                </div>
            </x-examples.card>
        </div>
        <x-examples.card.border>
            <x-examples.card.body>
                <table class="table table-default table-border table-compact">
    <thead>
    <tr class="table-row">
        <th class="align-middle w-3/12">Type</th>
        <th class="align-middle w-9/12">Eksempel</th>
    </tr>
    </thead>
    <tbody>
        <tr class="table-row">
            <td><pre><code>&lt;x-input /&gt;</code></pre></td>
            <td>
                <x-examples.fields.input
                    name="test_input"
                    label="Test Input"
                    type="text"
                    placeholder="Indtast tekst"
                />
            </td>
        </tr>

        <tr class="table-row">
            <td><pre><code>&lt;x-checkbox /&gt;</code></pre></td>
            <td>
                <x-examples.fields.checkbox
                    name="test_checkbox"
                    label="Test Checkbox"
                    value="1"
                />
            </td>
        </tr>

        <tr class="table-row">
            <td><pre><code>&lt;x-select /&gt;</code></pre></td>
            <td>
                <x-examples.fields.select
                    name="test_select"
                    label="Test Select"
                    :options="['1' => 'Option 1', '2' => 'Option 2']"
                />
            </td>
        </tr>

        <tr class="table-row">
            <td><pre><code>&lt;x-radio /&gt;</code></pre></td>
            <td>
                <x-examples.fields.radio
                    name="test_radio"
                    :options="['1' => 'Valg 1', '2' => 'Valg 2']"
                />
            </td>
        </tr>

        <tr class="table-row">
            <td><pre><code>&lt;x-value /&gt;</code></pre></td>
            <td>
                <x-examples.fields.value
                    label="Test Value"
                    :show="true"
                >
                    Dette er et eksempel på value indhold
                </x-examples.fields.value>
            </td>
        </tr>

        <tr class="table-row">
            <td><pre><code>&lt;x-input-number /&gt;</code></pre></td>
            <td>
                <x-examples.fields.input-number
                    name="test_number"
                    label="Test Nummer"
                />
            </td>
        </tr>

        <tr class="table-row">
            <td><pre><code>&lt;x-input-img /&gt;</code></pre></td>
            <td>
                <x-examples.fields.input-img
                    name="test_image"
                    label="Test Billede Upload"
                    imgName="billede"
                />
            </td>
        </tr>

        <tr class="table-row">
            <td><pre><code>&lt;x-input-slider /&gt;</code></pre></td>
            <td>
                <x-examples.fields.input-slider
                    name="test_slider"
                    label="Test Slider"
                    values="0:Start,50:Midt,100:Slut"
                />
            </td>
        </tr>

        <tr class="table-row">
            <td><pre><code>&lt;x-multiselect /&gt;</code></pre></td>
            <td>
                <x-examples.fields.multiselect
                    name="test_multiselect"
                    label="Test Multiselect"
                    :options="['1' => 'Option 1', '2' => 'Option 2', '3' => 'Option 3']"
                />
            </td>
        </tr>

        <tr class="table-row">
            <td><pre><code>&lt;x-textarea /&gt;</code></pre></td>
            <td>
                <x-examples.fields.textarea
                    name="test_textarea"
                    label="Test Textarea"
                    placeholder="Skriv her..."
                />
            </td>
        </tr>
    </tbody>
</table>
            </x-examples.card.body>
        </x-examples.card.border>
    </div>
</x-layout>
