@php
    $colors = ['primary', 'secondary', 'info', 'success', 'warning', 'error'];
@endphp
"x-buttons.filled"
Komponent:
&lt;button
class="button bg-&#123;&#123; $color &#125;&#125; hover:bg-&#123;&#123; $color &#125;&#125;-light border-2 border-&#123;&#123; $color &#125;&#125; hover:border-&#123;&#123; $color &#125;&#125;-light
text-&#123;&#123; $textColor ?? "white" &#125;&#125; h-12 rounded-lg px-5 py-2 button-press-feedback"
&#123;&#123; $attributes &#125;&#125;
&gt;
&lt;span class="text-lg"&gt;&#123;&#123; $text &#125;&#125;&lt;/span&gt;
&lt;/button&gt;

Brug af komponent:
@foreach($colors as $color)
    &lt;x-buttons.filled color="{{ $color }}" text="{{ $color }}"/&gt;
@endforeach

"x-buttons.outline"
Komponent:
&lt;button
class="button bg-transparent border-2 border-&#123;&#123; $color &#125;&#125; hover:border-&#123;&#123; $color &#125;&#125;-light text-&#123;&#123; $text &#125;&#125;
hover:text-&#123;&#123; $color &#125;&#125;-light h-12 rounded-lg px-5 py-2 button-press-feedback"
type="&#123;&#123; $type ?? "button" &#125;&#125;"
&#123;&#123; $attributes &#125;&#125;
&gt;
&lt;span class="text-lg"&gt;&#123;&#123; $text }}&lt;/span&gt;
&lt;/button&gt;

Brug af komponent:
@foreach($colors as $color)
    &lt;x-buttons.outline color="{{ $color }}" text="{{ $color }}"/&gt;
@endforeach
