<button
    class="button bg-transparent border-2 border-{{ $color }} hover:border-{{ $color }}-light text-{{ $text ?? $color }}  hover:text-{{ $color }}-light h-8 rounded-lg px-3 py-1 button-press-feedback"
    type="{{ $type ?? 'button' }}"
    {{ $attributes }}
>
    <p class="text-xs">{{ $text ?? $color }}</p>
</button>
