komponent:
&#64;php
    $iconComponent = "examples.icons.messages.$message";
&#64;endphp
&lt;div class="bg-white rounded-lg">
    &lt;div class="bg-&#123;&#123; $message }} bg-opacity-5 text-&#123;&#123; $message }} rounded-lg border border-&#123;&#123; $message }} p-2 w-&#123;&#123; $width ?? 'full' }}">
        &lt;div class="flex items-center gap-1">
            &lt;div class="message-icon">&lt;x-dynamic-component :component="$iconComponent" />&lt;/div>
            &lt;p class="first-letter:uppercase">&#123;&#123; $message }}! &#123;&#123; $text ?? '' }}&lt;/p>
        &lt;/div>
    &lt;/div>
&lt;/div>

brug af komponent:
@php
    $messages = ['success', 'warning', 'error'];
@endphp
@foreach($messages as $message)
&lt;x-examples.pop-ups.messages :message="{{ $message }}" text="{{ $message }}-besked"/>
@endforeach
