<div class="relative" x-data="{ open: false, toggleRef: null }" x-on:click.away="open = false">
    <div
            class="inline-flex justify-center cursor-pointer"
            x-bind:aria-expanded="open ? 'true' : 'false'"
            x-on:click="open = !open"
            x-ref="toggleRef"
    >
        <div class="flex items-center">
            <div class="bg-white rounded-md" x-bind:class="open ? 'rounded-b-none' : ''">
                <div class="menu-item menu-item-hoverable py-2 px-2 flex items-center gap-2 bg-dark"
                     x-bind:class="open ? 'rounded-b-none bg-opacity-90' : ''"
                >
                    <div class="avatar-xs">
                        <img
                                class="avatar-img avatar-circle"
                                src="https://placehold.co/400"
                                alt="profile picture"
                        >
                    </div>
                    <div>
                        <p class="font-bold text-xs text-gray-100">
                            Admin Adminson
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
            class="absolute right-0 z-10 origin-top-right bg-white rounded-b-md divide-y divide-gray-100 shadow-lg shadow-dark"
            x-show="open"
            x-transition
            x-cloak
            x-bind:style="'width: ' + ($refs.toggleRef?.offsetWidth || 280) + 'px'"
    >
        <div class="bg-dark bg-opacity-90 p-1 rounded-b-md">
            <ul class="transition-opacity">
                <li class="menu-item menu-item-hoverable rounded-md px-2 py-1 h-8">
                    <a class="flex h-full w-full px-2 gap-2 items-center text-gray-100 text-xs"
                       href="#">
                        <div class="header-nav-icon">
                            <x-examples.icons.profile/>
                        </div>
                        Profil
                    </a>
                </li>
                <li class="menu-item menu-item-hoverable rounded-md px-2 py-1 h-8">
                    <a class="flex h-full w-full px-2 gap-2 items-center text-gray-100 text-xs"
                       href="#">
                        <div class="header-nav-icon">
                            <x-examples.icons.settings/>
                        </div>
                        Indstillinger
                    </a>
                </li>
                <li class="menu-item-divider"></li>
                <li class="menu-item menu-item-hoverable rounded-md px-2 py-1 h-8">
                    <a class="flex h-full w-full px-2 gap-2 items-center text-gray-100 text-xs"
                       href="#">
                        <div class="header-nav-icon">
                            <x-examples.icons.log-out/>
                        </div>
                        Log ud
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
