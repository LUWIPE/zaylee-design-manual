<div class="relative" x-data="{ open: true }">
    <div>
        <ul x-on:click="open = !open">
            <li id="company" class="menu-item menu-item-hoverable h-8 px-0 mt-2 mb-2">
                <div class="flex h-full w-full px-2 gap-2 items-center side-nav-list">
                    <div class="bg-blue-400 border-blue-400 rounded-md icon-md p-1 flex justify-center items-center"
                         title="Virksomhedsmenu">
                        <p class="text-xs text-black">Ag</p>
                    </div>
                    <p class="text-white text-lg" x-show="sideNavOpen" x-transition x-cloak>
                        Virksomhedsnavn{{--{{ $company->name }}--}}
                    </p>
                </div>
            </li>
        </ul>
    </div>
    <div>
        <ul x-show="open" x-transition x-cloak>
            <li id="settings" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                <a
                    class="flex h-full w-full px-2 gap-2 items-center side-nav-list font-normal"
                    x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                    href="{{--/accounts/{{ $activeAccount()->id }}/edit--}}#"
                >
                    <div class="icon-sm stroke-gray-100 fill-gray-100 ">
                        <x-examples.icons.settings/>
                    </div>
                    <p class="text-gray-100" x-show="sideNavOpen" x-transition x-cloak>Indstillinger</p>
                </a>
            </li>
            <li id="subscription" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                <a
                    class="flex h-full w-full px-2 gap-2 items-center side-nav-list font-normal"
                    x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                    href="#"
                >
                    <div class="icon-sm stroke-gray-100 fill-gray-100 " title="Abonnement">
                        <x-examples.icons.request/>
                    </div>
                    <p class="text-gray-100" x-show="sideNavOpen" x-transition x-cloak>Abonnement</p>
                </a>
            </li>
            <li id="adminUsers" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                <a
                    class="flex w-full px-2 gap-2 items-center side-nav-list font-normal"
                    x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                    href="#"
                >
                    <div class="icon-sm stroke-gray-100 fill-gray-100 " title="Administrer Brugere">
                        <x-examples.icons.employee/>
                    </div>
                    <p class="text-gray-100" x-show="sideNavOpen" x-transition x-cloak>Administrer Brugere</p>
                </a>
            </li>
            <li class="side-nav-divider mt-2 border-gray-500"></li>
            <li id="swapCompany" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                <a
                    class="flex w-full px-2 gap-2 items-center side-nav-list font-normal"
                    x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                    href="{{--{{ route('records.index', "1") }}?status=draft--}}#">
                    <div class="icon-sm stroke-gray-100 fill-gray-100 " title="Skift Virksomhed">
                        <x-examples.icons.workspace/>
                    </div>
                    <p class="text-gray-100" x-show="sideNavOpen" x-transition x-cloak>Skift Virksomhed </p>
                </a>
            </li>
            <li class="side-nav-divider mt-2 border-gray-500"></li>
        </ul>
    </div>
</div>
