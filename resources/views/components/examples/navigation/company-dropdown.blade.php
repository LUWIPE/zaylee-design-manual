<div class="my-2">
    <div class="bg-white rounded-md">
        <div class="bg-dark rounded-sm" x-bind:class="companyDropdownOpen ? 'bg-opacity-20' : ''">
            <div>
                <ul x-on:click="companyDropdownOpen = !companyDropdownOpen; sideNavOpen = true" x-cloak>
                    <li id="company" class="menu-item h-8 px-0"
                        x-bind:class="companyDropdownOpen && sideNavOpen ? 'rounded-b-none hover:bg-gray-100' : 'menu-item-hoverable'">
                        <div class="flex h-full w-full px-2 gap-2 items-center side-nav-list"
                             x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'" x-cloak>
                            <div class="bg-blue-400 rounded-md icon-md p-1 flex justify-center items-center"
                                 x-bind:class="(companyDropdownOpen || centeringDelay) ? 'justify-start' : 'justify-center'"
                                 x-transition
                                 x-cloak
                                 title="Virksomhedsmenu">
                                <p class="text-xs text-dark">Ag</p>
                            </div>
                            <p x-bind:class="!companyDropdownOpen ? 'text-gray-100 text-lg' : 'text-dark text-lg'"
                               x-show="sideNavOpen" x-transition x-cloak>
                                Virksomhedsnavn{{--{{ $company->name }}--}}
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div x-show="companyDropdownOpen && sideNavOpen">
                <ul>
                    <li id="settings" class="menu-item hover:bg-gray-100 rounded-none px-1 py-2 h-8 side-nav-item">
                        <a
                            class="flex h-full w-full px-2 gap-2 items-center side-nav-list font-normal"
                            x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                            href="{{--/accounts/{{ $activeAccount()->id }}/edit--}}#"
                        >
                            <div class="icon-xs stroke-dark fill-dark ">
                                <x-examples.icons.settings/>
                            </div>
                            <p class="text-dark text-13px" x-show="sideNavOpen" x-transition x-cloak>Indstillinger</p>
                        </a>
                    </li>
                    <li id="subscription" class="menu-item hover:bg-gray-100 rounded-none px-1 py-2 h-8 side-nav-item">
                        <a
                            class="flex h-full w-full px-2 gap-2 items-center side-nav-list font-normal"
                            x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                            href="#"
                        >
                            <div class="icon-xs stroke-dark fill-dark " title="Abonnement">
                                <x-examples.icons.request/>
                            </div>
                            <p class="text-dark text-13px" x-show="sideNavOpen" x-transition x-cloak>Abonnement</p>
                        </a>
                    </li>
                    <li id="adminUsers" class="menu-item hover:bg-gray-100 rounded-none px-1 h-8 side-nav-item">
                        <a
                            class="flex w-full px-2 gap-2 items-center side-nav-list font-normal"
                            x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                            href="#"
                        >
                            <div class="icon-xs stroke-dark fill-dark " title="Administrer Brugere">
                                <x-examples.icons.employee-admin/>
                            </div>
                            <p class="text-dark text-13px" x-show="sideNavOpen" x-transition x-cloak>Administrer Brugere</p>
                        </a>
                    </li>
                    <li class="side-nav-divider my-0 border-gray-400"></li>
                    <x-examples.navigation.listMenu/>
                    <li id="swapCompany" class="menu-item rounded-t-none px-1 h-8 side-nav-item"
                        x-bind:class="sideNavOpen ? 'hover:underline' : 'hover:bg-gray-100'">
                        <a
                            class="flex w-full px-2 gap-2 items-center side-nav-list font-normal"
                            x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                            href="#">
                            <div class="icon-xs stroke-dark fill-dark " title="Skift Virksomhed">
                                <x-examples.icons.workspace/>
                            </div>
                            <p class="text-dark text-13px" x-show="sideNavOpen" x-transition x-cloak>Skift Virksomhed </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
