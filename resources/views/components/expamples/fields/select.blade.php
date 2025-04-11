<div class="form-item vertical">
    <label class="form-label mb-2">{{ $label ?? '' }}</label>
    <div class="select select-md w-full">
        <div class="select-control min-h-12 bg-gray-100 select__control">
            <div class="select-value-container">
                <select
                    class="select-input"
                    name="{{ $name }}"
                >
                    @foreach($options as $optionKey => $option)
                        <option
                            class="select-option"
                            value="{{ $optionKey }}"
                            @if(!isset($selectedKey))
                                @selected(old($name) == $optionKey)
                            @else
                                @selected(old($name, $selectedKey) == $optionKey)
                            @endif
                        >
                            {{ $option }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    @error($name)
    <span class="text-error">{{ $message }}</span>
    @enderror
</div>
