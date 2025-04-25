<button
    class="button bg-{{ $color }} hover:bg-{{ $color }}-dark border-2 border-{{ $color }} hover:border-{{ $color }}-dark text-{{ $textColor ?? 'white' }} h-12 rounded-lg px-5 py-2 button-press-feedback"
    type="{{ $type ?? 'button' }}"
    onclick="{{ $onclick ?? '' }}"
>
    {{ $text ?? $color }}
</button>
