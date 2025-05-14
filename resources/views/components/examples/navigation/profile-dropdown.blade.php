<div class="relative" x-data="{ open: false, toggleRef: null }" x-on:click.away="open = false">
    <div
        class="inline-flex justify-center cursor-pointer"
        x-bind:aria-expanded="open ? 'true' : 'false'"
        x-on:click="open = !open"
        x-ref="toggleRef"
    >
        <div class="flex items-center">
            <div
                class="py-2 px-2 flex items-center gap-2 rounded-t-md hover:bg-gray-700"
                x-bind:class="{ 'shadow-dark': open }"
            >
                <div class="avatar-lg">
                    <img
                        class="avatar-img avatar-circle"
                        src="https://placehold.co/400"
                        alt="profile picture"
                    >
                </div>
                <div>
                    <p class="font-bold text-sm text-white">
                        {{--{{ $loggedInUser()->first_name }} {{ $loggedInUser()->last_name }}--}}
                        Navn Navnsen
                    </p>
                    <p class="font-bold text-xs text-white">
                        {{--{{ $loggedInUser()->email }}--}}
                        email@email.dk
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div
        class="absolute right-0 z-10 origin-top-right bg-dark px-2 rounded-b-md divide-y divide-gray-100 shadow-md shadow-dark"
        x-show="open"
        x-transition
        x-cloak
        x-bind:style="'width: ' + ($refs.toggleRef?.offsetWidth || 280) + 'px'"
    >
        <ul class="transition-opacity">
            <li class="menu-item rounded-md hover:bg-gray-700 px-2 h-8">
                <a class="flex h-full w-full px-2 gap-2 items-center text-white text-xs"
                   href="{{--/employees/{{ $loggedInUser()->id }}/edit--}}#">
                    <div class="header-nav-icon">
                        <x-examples.icons.profile/>
                    </div>
                    Profil
                </a>
            </li>
            <li class="menu-item rounded-md hover:bg-gray-700 px-2 py-2 h-8">
                <a class="flex h-full w-full px-2 gap-2 items-center text-white text-xs"
                   href="{{--/accounts/{{ $activeAccount()->id }}/edit--}}#">
                    <div class="header-nav-icon">
                        <x-examples.icons.settings/>
                    </div>
                    Indstillinger
                </a>
            </li>
            <li class="menu-item-divider"></li>
            <li class="menu-item rounded-md hover:bg-gray-700 px-2 py-2 h-8">
                <a class="flex h-full w-full px-2 gap-2 items-center text-white text-xs"
                   href="{{--{{ route('logout') }}--}}#">
                    <div class="header-nav-icon">
                        <x-examples.icons.log-out/>
                    </div>
                    Log ud
                </a>
            </li>
        </ul>
    </div>
</div>
