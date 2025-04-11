<div class="form-item vertical">
    <label class="form-label mb-2 {{ $labelClass ?? '' }}">{{ $label ?? '' }}</label>
    <textarea
        class="input input-textarea h-12 focus:ring-primary focus-within:ring-primary focus-within:border-primary focus:border-primary"
        name="{{ $name}}"
        placeholder="{{ $placeholder ?? $label ?? '' }}"
        {{ $attributes['required'] ? 'required' : '' }}
    >{{ old($name, $value ?? null) }}</textarea>
    @error($name)
    <span class="text-error">{{ $message }}</span>
    @enderror
</div>
