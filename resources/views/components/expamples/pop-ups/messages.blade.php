@php
    $iconComponent = "expamples.icons.messages.$message";
@endphp
<div class="bg-{{ $message }} bg-opacity-10 text-{{ $message }} rounded-lg border-2 border-dashed border-{{ $message }} p-1">
    <p class="text-center flex items-center justify-center gap-1">
        <span class="message-icon"><x-dynamic-component :component="$iconComponent" /></span>
        {{ $message }}
    </p>
</div>
