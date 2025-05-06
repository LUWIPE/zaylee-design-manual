Komponenter:
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
&lt;div &#123;&#123; $attributes->class(['card-footer', 'card-footer-border']) &#125;&#125;&gt;
    &#123;&#123; $slot &#125;&#125;
&lt;/div&gt;

Brug af komponenter:
"Simpel"
&lt;x-examples.card.border&gt;
    &lt;x-examples.card.body&gt;
        &lt;h3&gt;Overskrift&lt;/h3&gt;
        &lt;p&gt;Indhold&lt;/p&gt;
    &lt;/x-examples.card.body&gt;
&lt;/x-examples.card.border&gt;

"Header"
&lt;x-examples.card.border&gt;
    &lt;x-examples.card.header&gt;
        &lt;h3&gt;Overskrift&lt;/h3&gt;
    &lt;/x-examples.card.header&gt;
    &lt;x-examples.card.body&gt;
        &lt;p&gt;Indhold&lt;/p&gt;
    &lt;/x-examples.card.body&gt;
&lt;/x-examples.card.border&gt;

"Footer"
&lt;x-examples.card.border&gt;
    &lt;x-examples.card.body&gt;
        &lt;h3&gt;Overskrift&lt;/h3&gt;
        &lt;p&gt;Indhold&lt;/p&gt;
    &lt;/x-examples.card.body&gt;
    &lt;x-examples.card.footer&gt;
        &lt;p&gt;Footer indhold&lt;/p&gt;
    &lt;/x-examples.card.footer&gt;
&lt;/x-examples.card.border&gt;

"Header + Footer"
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
