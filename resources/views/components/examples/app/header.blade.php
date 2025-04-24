<header class="header rounded-t-2xl">
    <div class="header-wrapper flex justify-between h-16">
            <a class="side-nav-header flex-col justify-center h-max">
                <div class="logo w-auto m-2">
                    <img
                        class="max-h-12"
                        src="https://placehold.co/400"
                        alt="Connecto logo"
                    >
                </div>
            </a>
        <div class="header-action">
            <div class="relative">
                <div
                    class="inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm
                                font-semibold text-gray-900 shadow-xs hover:bg-gray-50"
                    id="menu-dropdown-toggle"
                    aria-expanded="false"
                >
                    <div class="cursor-pointer flex items-center">
                        <div class="avatar-lg">
                            <img
                                class="avatar-img avatar-circle"
                                src="https://placehold.co/400"
                                alt="profile picture">
                        </div>
                    </div>
                </div>
                <div
                    class="absolute right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-gray-100 rounded-md
                        bg-white ring-1 shadow-lg ring-black/5 focus:outline-hidden hidden" id="menu-dropdown"
                    role="menu"
                    aria-orientation="vertical"
                    aria-labelledby="menu-dropdown-toggle"
                    tabindex="-1"
                >
                    <div>
                        <ul class="dropdown-menu min-w-[160px] transition-opacity">
                            <li class="menu-item-header p-0">
                                <div class="py-2 px-3 flex items-center gap-3 ">
                                    <div class="avatar-lg">
                                        <img
                                            class="avatar-img avatar-circle "
                                            src="https://placehold.co/400"
                                            alt="profile picture"
                                        >
                                    </div>
                                    <div>
                                        <div>
                                            <p class="font-bold text-gray-900">
                                                {{ $loggedInUser()->first_name }} {{ $loggedInUser()->last_name }}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-xs">
                                                {{ $loggedInUser()->email }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-divider"></li>
                            <li class="menu-item menu-item-hoverable px-0 h-10">
                                <a
                                    class="flex w-full px-2 gap-2 items-center"
                                    href="{{ route('logout') }}"
                                    data-tabindex=""
                                    tabindex="-1"
                                >
                                    <div class="header-nav-icon">
                                        <x-icons.log-out/>
                                    </div>
                                    Log ud
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
