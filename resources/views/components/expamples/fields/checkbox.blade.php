<div class="checkbox vertical">
    <label class="checkbox-label text-nowrap">
        <input
            class="checkbox text-primary"
            type="checkbox"
            name="{{ $name }}"
            value="{{ $value }}"
            @checked(true)
        >
        {{ $label ?? '' }}
    </label>
</div>
