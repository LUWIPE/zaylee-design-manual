&lt;x-examples.fields.checkbox
    name="test_checkbox"
    label="Test Checkbox"
    value="1"
/>

&lt;x-fields.input
    name="test_input"
    label="Test Input"
    type="text"
    placeholder="Indtast tekst"
/>

&lt;x-examples.fields.input-img
    name="test_image"
    label="Test Billede Upload"
    imgName="billede"
/>

&lt;x-fields.input-number
    name="test_number"
    label="Test Nummer"
/>

&lt;x-examples.fields.input-slider
    name="test_slider"
    label="Test Slider"
/>

&lt;x-examples.fields.multiselect
    name="test_multiselect"
    label="Test Multiselect"
    :options="['1' => 'Option 1', '2' => 'Option 2', '3' => 'Option 3']"
/>

&lt;x-examples.fields.radio
    name="test_radio"
    :options="['1' => 'Valg 1', '2' => 'Valg 2']"
/>

&lt;x-examples.fields.select
    name="test_select"
    label="Test Select"
    :options="['1' => 'Option 1', '2' => 'Option 2']"
/>

&lt;x-examples.fields.textarea
    name="test_textarea"
    label="Test Textarea"
    placeholder="Skriv her..."
/>

&lt;x-examples.fields.value
    label="Test Value"
    :show="true"
>
    Dette er et eksempel på value indhold
&lt;/x-examples.fields.value>
