@php
    $iconComponent = "examples.icons.messages.$message";
@endphp
<div class="bg-white rounded-lg">
    <div class="bg-{{ $message }} bg-opacity-5 text-{{ $message }} rounded-lg border border-{{ $message }} p-2 w-{{ $width ?? 'full' }}">
        <div class="flex items-center gap-1">
            <div class="message-icon"><x-dynamic-component :component="$iconComponent" /></div>
            <p class="first-letter:uppercase">{{ $message }}!</p>
        </div>
    </div>
</div>
