<div class="radio-group vertical mb-7">
    @foreach($options as $optionKey => $option)
    <label class="radio-label">
        <span class="radio-wrapper relative">
            <input
                class="radio peer text-primary"
                type="radio"
                name="{{ $name }}"
                value="{{ $optionKey }}"
                @isset($checked)
                    @checked(old($name, $checked) === $optionKey)
                @else
                    @checked(old($name) === $optionKey)
                @endisset
                >
            {{ $option ?? '' }}
        </span>
    </label>
    @endforeach
</div>
