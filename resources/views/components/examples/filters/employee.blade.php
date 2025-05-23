<div class="relative" x-data="{ open: false }" x-on:click.away="open = false">
    <div class="w-full h-8 menu-item hover:bg-gray-100 py-1 px-2 border" x-on:click="open = !open" x-bind:class="{ 'rounded-b-none bg-gray-100': open }">
        <p class="w-full flex justify-between">
            <span>Medarbejder</span>
            <span><i class="fa-solid fa-chevron-down "></i></span>
        </p>
    </div>
    <div class="w-full rounded-md rounded-t-none border border-t-0 absolute z-10 bg-gray-100" x-show="open">
        <select class="w-full p-1 bg-gray-100 custom-scrollbar-dark focus:outline-none" multiple>
            {{--@foreach($employees as $employees)
                <option value="{{ $employees->id }}">{{ $employees->first_name }} {{ $employees->last_name }}</option>
            @endforeach--}}
            <option class="select-option text-sm h-4 my-0.5" value="1">Medarbejder 1</option>
            <option class="select-option text-sm h-4 my-0.5" value="2">Medarbejder 2</option>
        </select>
    </div>
</div>
