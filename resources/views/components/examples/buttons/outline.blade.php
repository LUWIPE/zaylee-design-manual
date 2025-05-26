<button
    class="button bg-transparent border-2 border-{{ $color }} hover:border-{{ $color }}-dark text-{{ $text ?? $color }}  hover:text-{{ $color }}-dark h-12 rounded-lg px-5 py-2 button-press-feedback"
    type="{{ $type ?? 'button' }}"
    {{ $attributes }}
>
    <p class="text-lg">{{ $text }}</p>
</button>
