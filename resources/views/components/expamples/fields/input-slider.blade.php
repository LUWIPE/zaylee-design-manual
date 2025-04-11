@php
    if (!isset($values)) {
        $vals = collect([0 => '0%', 25 => '25%', 50 => '50%', 75 => '75%', 100 => '100%']);
    } else {
        $vals = collect(explode(',', $values));
        $vals = $vals->mapWithKeys(function ($val) {
            $parts = explode(':', $val);
            return [$parts[0] => $parts[1]];
        });
    }
    $name = $name ?? '';
@endphp

<div class="relative mb-6">
    <div class="form-item vertical">
        <label for="{{ $name }}" class="form-label sr-only">Labels range</label>
        <input
            id="{{ $name }}"
            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer"
            type="range"
            value="100"
            step="{{ $step ?? 100 / ($vals->count() - 1) }}"
            min="0"
            max="100"
            name="{{ $name }}"
        >
        @foreach($vals as $key => $val)
            @php
                $endStart = $key > 50 ? 'end' : 'start';
                $percentage = $key > 50 ? 100-$key : $key;
                if ($key === 0 || $key === 100) {
                    $translate = '';
                } else {
                    $translate = $key > 50 ? 'translate-x-1/2' : '-translate-x-1/2';
                }
            @endphp
            <span
                style="inset-inline-{{ $endStart }}: {{ $percentage }}%"
                class="text-sm text-gray-500 dark:text-gray-400 absolute {{ $translate }} -bottom-6">{{ $val }}</span>
        @endforeach
    </div>
</div>
