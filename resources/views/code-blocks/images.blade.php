@php
    $sizes = ['normal', 'xl', 'lg', 'md', 'sm', 'xs']
@endphp
Runde:
@foreach($sizes as $size)
<div class="avatar avatar-{{ $size }} avatar-circle">
    <img class="avatar-img avatar-circle"
         src="" alt="">
</div>
@endforeach

Firkantede:
@foreach($sizes as $size)
<div class="avatar avatar-{{ $size }}">
    <img class="avatar-img"
         src="" alt="">
</div>
@endforeach
