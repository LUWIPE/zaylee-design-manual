@php
        if (!isset($h)) {
            $h = '12';
        }
@endphp
<div class="form-item vertical">
    <label class="form-label mb-2 {{ $labelClass ?? '' }}">{{ $label ?? '' }}</label>
    <input
        class="h-{{ $h }} {{ $text ?? '' }} {{ $attributes['disabled'] ? 'text-gray-500' : '' }} {{ $inputClass ?? '' }}
                input input-md focus:ring-primary focus-within:ring-primary focus-within:border-primary focus:border-primary"
        type="{{ $type }}"
        name="{{ $name }}"
        autocomplete="off"
        placeholder="{{ $placeholder ?? $label ?? '' }}"
        value="{{ old($name, $value ?? null) }}"
        {{ $attributes['disabled'] ? 'disabled' : '' }}
        @if($attributes->has('id'))
            id="{{ $attributes->get('id') }}"
        @endif
    >
    @error($name)
    <span class="text-error">{{ $message }}</span>
    @enderror
</div>
