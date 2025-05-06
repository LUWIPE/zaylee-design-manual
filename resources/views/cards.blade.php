<x-layout>
    <div class="grid gap-4">
        <div>
            <h1>Cards</h1>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-examples.card>
                <h3>Definition</h3>
                <div class="grid gap-2">
                    <p>
                        Cards er visuelle containere, der bruges til at gruppere relateret indhold i en overskuelig og
                        letlæselig enhed. De fungerer som en struktur for at organisere information og gøre det nemmere
                        for brugeren at navigere i indholdet på en intuitiv måde.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Funktionalitet</h3>
                <div class="grid gap-2">
                    <p>
                        Cards er modulære blokke, der viser fx sager, opgavestatus eller kundeinfo på en klar og
                        struktureret måde. Et card indeholder normalt én h3‑titel, valgfri h5‑undertitler, information,
                        formularer, lister og handlingselementer som knapper eller links. Hover‑ eller klikeffekter
                        markerer, at kortet er interaktivt.
                    </p>
                </div>
            </x-examples.card>
            <x-examples.card>
                <h3>Designprincipper</h3>
                <div class="grid gap-2">
                    <p>
                        <span class="font-bold">Fleksibelt layout:</span>
                        Brug Tailwinds <code>grid</code>og <code>grid-cols-</code>klasser til at styre kortenes bredde
                        og responsivitet.
                    </p>
                    <p>
                        <span class="font-bold">Mellemrum:</span>
                        Når flere cards vises sammen, anvendes <code>gap-4</code> for ensartet afstand.
                    </p>
                    <p>
                        <span class="font-bold">Interaktiv feedback:</span>
                        Hover‑ og klikområder understreger, at kortet kan interageres med.
                    </p>
                </div>
            </x-examples.card>
        </div>
        <x-examples.card.border>
            <x-examples.card.body>
                <h3>Eksempler</h3>
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
                            <p>Simpel</p>
                        </td>
                        <td>
                            <x-examples.card.border>
                                <x-examples.card.body>
                                    <h3>Overskrift</h3>
                                    <p>Indhold</p>
                                </x-examples.card.body>
                            </x-examples.card.border>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="align-middle">
                            <p>Header</p>
                        </td>
                        <td>
                            <x-examples.card.border>
                                <x-examples.card.header>
                                    <h3>Overskrift</h3>
                                </x-examples.card.header>
                                <x-examples.card.body>
                                    <p>Indhold</p>
                                </x-examples.card.body>
                            </x-examples.card.border>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="align-middle">
                            <p>Footer</p>
                        </td>
                        <td>
                            <x-examples.card.border>
                                <x-examples.card.body>
                                    <h3>Overskrift</h3>
                                    <p>Indhold</p>
                                </x-examples.card.body>
                                <x-examples.card.footer>
                                    <p>Footer indhold</p>
                                </x-examples.card.footer>
                            </x-examples.card.border>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="align-middle">
                            <p>Header + Footer</p>
                        </td>
                        <td>
                            <x-examples.card.border>
                                <x-examples.card.header>
                                    <h3>Overskrift</h3>
                                </x-examples.card.header>
                                <x-examples.card.body>
                                    <p>Indhold</p>
                                </x-examples.card.body>
                                <x-examples.card.footer>
                                    <p>Footer indhold</p>
                                </x-examples.card.footer>
                            </x-examples.card.border>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </x-examples.card.body>
            <x-examples.card.footer class="bg-dark">
<pre><code class="language-html code-block">Komponenter:
"x-card.border"
&lt;div class="card card-border"&gt;
    &#123;&#123; $slot &#125;&#125;
&lt;/div&gt;

"x-card.body"
&lt;div class="card-body"&gt;
    &lt;div class="grid gap-&#123;&#123; $gap ?? '2' &#125;&#125;"&gt;
        &#123;&#123; $slot &#125;&#125;
    &lt;/div&gt;
&lt;/div&gt;

"x-card.header"
&lt;div class="card-header card-header-border"&gt;
    &#123;&#123; $slot &#125;&#125;
&lt;/div&gt;

"x-card.footer"
&lt;div  &#123;&#123; $attributes->class(['card-footer', 'card-footer-border']) &#125;&#125;&gt;
    &#123;&#123; $slot &#125;&#125;
&lt;/div&gt;
</code></pre>
<pre><code class="language-html code-block">Brug af komponenter:
"Simpel"
&lt;x-examples.card.border&gt;
    &lt;x-examples.card.body&gt;
        &lt;h3&gt;Overskrift&lt;/h3&gt;
        &lt;p&gt;Indhold&lt;/p&gt;
    &lt;/x-examples.card.body&gt;
&lt;/x-examples.card.border&gt;
</code></pre>
<pre><code class="language-html code-block">"Header"
&lt;x-examples.card.border&gt;
    &lt;x-examples.card.header&gt;
            &lt;h3&gt;Overskrift&lt;/h3&gt;
    &lt;/x-examples.card.header&gt;
        &lt;x-examples.card.body&gt;
            &lt;p&gt;Indhold&lt;/p&gt;
        &lt;/x-examples.card.body&gt;
&lt;/x-examples.card.border&gt;
</code></pre>
<pre><code class="language-html code-block">"Footer"
&lt;x-examples.card.border&gt;
    &lt;x-examples.card.body&gt;
        &lt;h3&gt;Overskrift&lt;/h3&gt;
        &lt;p&gt;Indhold&lt;/p&gt;
    &lt;/x-examples.card.body&gt;
    &lt;x-examples.card.footer&gt;
        &lt;p&gt;Footer indhold&lt;/p&gt;
    &lt;/x-examples.card.footer&gt;
&lt;/x-examples.card.border&gt;
</code></pre>
<pre><code class="language-html code-block">"Header + Footer"
&lt;x-examples.card.border&gt;
    &lt;x-examples.card.header&gt;
            &lt;h3&gt;Overskrift&lt;/h3&gt;
    &lt;/x-examples.card.header&gt;
    &lt;x-examples.card.body&gt;
        &lt;p&gt;Indhold&lt;/p&gt;
    &lt;/x-examples.card.body&gt;
    &lt;x-examples.card.footer&gt;
        &lt;p&gt;Footer indhold&lt;/p&gt;
    &lt;/x-examples.card.footer&gt;
&lt;/x-examples.card.border&gt;
</code></pre>
            </x-examples.card.footer>
        </x-examples.card.border>
    </div>
</x-layout>
