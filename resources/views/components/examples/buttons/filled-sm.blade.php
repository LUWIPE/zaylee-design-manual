<button
    class="button bg-{{ $color }} hover:bg-{{ $color }}-light border-2 border-{{ $color }} hover:border-{{ $color }}-light text-{{ $textColor ?? 'white' }} h-8 rounded-lg px-3 py-1 button-press-feedback"
    type="{{ $type ?? 'button' }}"
    {{ $attributes }}
>
    <p class="text-xs">{{ $text ?? $color }}</p>
</button>
