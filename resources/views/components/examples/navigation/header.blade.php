<header
    class="header dark bg-dark ml-14 py-2 pr-20 fixed top-0 w-full z-40 flex"
    x-bind:class="sideNavOpen ? 'ml-48 pr-56' : 'ml-14 pr-24'"
>
    <div class="header-wrapper flex justify-between align-middle h-12 w-full">
        <div class="flex items-center gap-4">
            <div>
                <ul>
                    <li class="menu-item menu-item-hoverable px-0 h-8 side-nav-item">
                        <div @click="sideNavOpen = !sideNavOpen"
                             class="flex w-full px-2 gap-2 items-center justify-start">
                    <span class="icon-xs stroke-white fill-white flex items-center" x-show="!sideNavOpen">
                        <x-examples.icons.arrow-right/>
                    </span>
                            <span class="icon-xs stroke-white fill-white flex items-center" x-show="sideNavOpen" x-cloak>
                        <x-examples.icons.arrow-left/>
                    </span>
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
