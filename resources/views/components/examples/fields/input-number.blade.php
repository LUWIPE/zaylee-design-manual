<div class="form-item vertical">
    <label class="form-label mb-2">{{ $label }}</label>
    <input
        class="input input-md h-12 focus:ring-primary focus-within:ring-primary focus-within:border-primary focus:border-primary"
        type="number"
        autocomplete="off"
        {{ $attributes }}
    >
    @error($name)
    <span class="text-error">{{ $message }}</span>
    @enderror
</div>
