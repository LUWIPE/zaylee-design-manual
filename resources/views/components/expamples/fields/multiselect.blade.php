<div class="form-item vertical">
    <label class="form-label mb-2">{{ $label ?? ''}}</label>
    <div class="select select-md w-full">
        <div
            class="select-control min-h-12 h-36 bg-gray-100 select__control"
        >
            <div class="select-value-container custom-scrollbar-dark">
                <select
                    class="select-input "
                    name="{{ $name }}[]"
                    multiple
                >
                    @foreach($options as $optionKey => $option)
                        <option
                            class="select-option"
                            value="{{ $optionKey }}"
                        @isset($selectedOptions)
                            @selected(collect(old($name, $selectedOptions))->contains($optionKey))
                        @else
                            @selected(collect(old($name))->contains($optionKey))
                        @endisset
                        >
                            {{ $option }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
