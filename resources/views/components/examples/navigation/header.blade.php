<header class="header dark bg-dark my-auto pr-4 fixed top-0 w-full z-30 flex">
    <div class="header-wrapper flex align-middle h-12 w-full">
        <div class="flex items-center gap-2" x-bind:class="sideNavOpen ? 'ml-48' : 'ml-10'" x-transition>
            <div>
                <ul>
                    <li class="menu-item px-0 h-8">
                        <div
                            x-on:click="
                                 if (sideNavOpen) {
                                    sideNavOpen = false;
                                    centeringDelay = true;
                                    setTimeout(() => { isCenteringDelayed = false }, 300);
                                 } else {
                                    sideNavOpen = true;
                                 }
                                 if (!sideNavOpen) companyDropdownOpen = false;
                            "
                            x-cloak
                            class="flex w-full px-2 gap-2 items-center justify-start"
                        >
                            <x-examples.icons.sidenav/>
                        </div>
                    </li>
                </ul>
            </div>
            <x-examples.breadcrumb/>
        </div>
        <div class="flex justify-end-end items-center gap-4">
            <div>
                <x-examples.global-create/>
            </div>
            <div>
                <x-examples.navigation.profile-dropdown/>
            </div>
        </div>
    </div>
</header>
