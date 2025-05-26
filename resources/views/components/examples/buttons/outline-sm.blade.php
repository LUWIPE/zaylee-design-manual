<button
    class="button bg-transparent border-2 border-{{ $color }} hover:border-{{ $color }}-dark text-{{ $text ?? $color }}  hover:text-{{ $color }}-dark h-8 rounded-lg px-3 py-1 button-press-feedback"
    type="{{ $type ?? 'button' }}"
    {{ $attributes }}
>
    <p class="text-xs">{{ $text}}</p>
</button>
