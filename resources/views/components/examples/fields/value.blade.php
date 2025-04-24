@php
    if (!isset($show)) {
        $show = true;
    }
@endphp
@if($show)
    <div class="mb-5">
        <h4 class="h4">{{ $label }}</h4>
        {{ $slot }}
    </div>
@endif
