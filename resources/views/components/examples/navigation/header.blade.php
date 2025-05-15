<header class="header dark bg-dark my-auto pr-4 fixed top-0 w-full z-40 flex">
    <div class="header-wrapper flex justify-between align-middle h-14 w-full">
        <div
            class="flex items-center gap-2 ml-20"
            x-bind:class="sideNavOpen ? 'ml-52' : 'ml-14'"
        >
            <div>
                <ul>
                    <li class="menu-item px-0 h-8">
                        <div
                            @click="sideNavOpen = !sideNavOpen"
                             class="flex w-full px-2 gap-2 items-center justify-start"
                        >
                            <x-examples.icons.sidenav/>
                        </div>
                    </li>
                </ul>
            </div>
            <x-examples.breadcrumb/>
        </div>
        <div>
            <x-examples.navigation.profile-dropdown/>
        </div>
    </div>
</header>
