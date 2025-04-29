<button
    class="button bg-{{ $color }} hover:bg-{{ $color }}-light border-2 border-{{ $color }} hover:border-{{ $color }}-light text-{{ $textColor ?? 'white' }} h-12 rounded-lg px-5 py-2 button-press-feedback"
    type="{{ $type ?? 'button' }}"
    {{ $attributes }}
>
    <p class="text-lg">{{ $text ?? $color }}</p>
</button>
