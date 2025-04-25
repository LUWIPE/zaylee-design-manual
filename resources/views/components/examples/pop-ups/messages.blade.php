@php
    $iconComponent = "examples.icons.messages.$message";
@endphp
<div class="bg-{{ $message }} bg-opacity-10 text-{{ $message }} rounded-lg border-2 border-{{ $message }} p-1 w-{{ $width ?? 'full' }}">
    <div class="flex items-center gap-1">
        <div class="message-icon"><x-dynamic-component :component="$iconComponent" /></div>
        <p class="font-bold first-letter:uppercase">{{ $message }}!</p>
    </div>
</div>
