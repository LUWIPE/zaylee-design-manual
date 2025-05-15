<div class="side-nav dark max-h-screen flex fixed top-0 left-0 z-50 mt-1.5 pb-2">
    <div class="flex flex-col justify-between h-full">
        <div class="mx-2 flex flex-col justify-between h-full">
            <div>
                <div>
                    <x-examples.navigation.company-dropdown/>
                </div>
                <div>
                    <ul>
                        <li id="home" class="menu-item menu-item-hoverable h-8 px-0 mb-2">
                            <a
                                class="flex h-full w-full px-2 gap-2 items-center side-nav-list font-normal"
                                x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                                href="#"
                            >
                                <div class="icon-sm stroke-gray-100 fill-gray-100 " title="Hjem">
                                    <x-examples.icons.home/>
                                </div>
                                <p class="text-gray-100" x-show="sideNavOpen" x-transition x-cloak>Hjem</p>
                            </a>
                        </li>
                        <li id="status-dash" class="menu-item menu-item-hoverable h-8 px-0 mb-2">
                            <a class="flex h-full w-full px-2 gap-2 items-center side-nav-list font-normal"
                               x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                               href="#">
                                <div class="icon-sm stroke-gray-100 fill-gray-100 " title="Status dashboard">
                                    <x-examples.icons.dashboard/>
                                </div>
                                <p class="text-gray-100" x-show="sideNavOpen" x-transition x-cloak>Status dashboard</p>
                            </a>
                        </li>
                        <li id="employee-board" class="menu-item menu-item-hoverable h-8 px-0 mb-2">
                            <a class="flex h-full w-full px-2 gap-2 items-center side-nav-list font-normal"
                               x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                               href="#">
                                <div class="icon-sm stroke-gray-100 fill-gray-100 " title="Medarbejder board">
                                    <x-examples.icons.dashboard/>
                                </div>
                                <p class="text-gray-100" x-show="sideNavOpen" x-transition x-cloak>Medarbejder board</p>
                            </a>
                        </li>
                        <li class="side-nav-divider mt-2 border-gray-500"></li>
                        <li id="customer" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                            <a class="flex h-full w-full px-2 gap-2 items-center side-nav-list font-normal"
                               x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                               href="#">
                                <div class="icon-sm stroke-gray-100 fill-gray-100 " title="Kunder">
                                    <x-examples.icons.customer/>
                                </div>
                                <p class="text-gray-100" x-show="sideNavOpen" x-transition x-cloak>Kunder</p>
                            </a>
                        </li>
                        <li id="quotes" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                            <a class="flex h-full w-full px-2 gap-2 items-center side-nav-list font-normal"
                               x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                               href="#">
                                <div class="icon-sm stroke-gray-100 fill-gray-100 " title="Tilbud">
                                    <x-examples.icons.quote/>
                                </div>
                                <p class="text-gray-100" x-show="sideNavOpen" x-transition x-cloak>Tilbud</p>
                            </a>
                        </li>
                        <li id="orders" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                            <a class="flex h-full w-full px-2 gap-2 items-center side-nav-list font-normal"
                               x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                               href="#">
                                <div class="icon-sm stroke-gray-100 fill-gray-100 " title="Sager">
                                    <x-examples.icons.case/>
                                </div>
                                <p class="text-gray-100" x-show="sideNavOpen" x-transition x-cloak>Sager</p>
                            </a>
                        </li>
                        <li id="planning" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                            <a class="flex h-full w-full px-2 gap-2 items-center side-nav-list font-normal" href="#">
                                <div class="icon-sm stroke-gray-100 fill-gray-100 " title="Planlægning">
                                    <x-examples.icons.planning/>
                                </div>
                                <p class="text-gray-100" x-show="sideNavOpen" x-transition x-cloak>Planlægning</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mx-2 mb-4 flex flex-col justify-start">
            <ul>
                <li id="service-templates" class="menu-item px-0 h-8 mb-1 side-nav-item"
                    x-bind:class="sideNavOpen ? '' : 'menu-item-hoverable'">
                    <a class="flex w-full px-2 gap-2 items-center side-nav-list font-normal"
                       x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                       href="#">
                        <div class="icon-xs stroke-gray-100 fill-gray-100 " title="Serviceskabeloner">
                            <x-examples.icons.service/>
                        </div>
                        <p class="text-xs text-gray-100 font-light hover:underline" x-show="sideNavOpen" x-transition x-cloak>Serviceskabeloner</p>
                    </a>
                </li>
                <li id="employees" class="menu-item px-0 h-8 mb-1 side-nav-item"
                    x-bind:class="sideNavOpen ? '' : 'menu-item-hoverable'">
                    <a class="flex w-full px-2 gap-2 items-center side-nav-list font-normal"
                       x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                       href="#">
                        <div class="icon-xs stroke-gray-100 fill-gray-100 " title="Medarbejdere">
                            <x-examples.icons.employee/>
                        </div>
                        <p class="text-xs text-gray-100 font-light hover:underline" x-show="sideNavOpen" x-transition x-cloak>Medarbejdere</p>
                    </a>
                </li>
                <li id="equipment" class="menu-item px-0 h-8 mb-1 side-nav-item"
                    x-bind:class="sideNavOpen ? '' : 'menu-item-hoverable'">
                    <a class="flex w-full px-2 gap-2 items-center side-nav-list font-normal"
                       x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                       href="#">
                        <div class="icon-xs stroke-gray-100 fill-gray-100 " title="Materiel">
                            <x-examples.icons.equipment/>
                        </div>
                        <p class="text-xs text-gray-100 font-light hover:underline" x-show="sideNavOpen" x-transition x-cloak>Materiel</p>
                    </a>
                </li>
                <li id="certificates" class="menu-item px-0 h-8 mb-1 side-nav-item"
                    x-bind:class="sideNavOpen ? '' : 'menu-item-hoverable'">
                    <a class="flex w-full px-2 gap-2 items-center side-nav-list font-normal"
                       x-bind:class="sideNavOpen ? 'justify-start' : 'justify-center'"
                       href="#">
                        <div class="icon-xs stroke-gray-100 fill-gray-100 " title="Certifikater">
                            <x-examples.icons.certificate/>
                        </div>
                        <p class="text-xs text-gray-100 font-light hover:underline" x-show="sideNavOpen" x-transition x-cloak>Certifikater</p>
                    </a>
                </li>
                <li class="side-nav-divider mt-2 border-gray-500"></li>
            </ul>
            <div class="flex justify-center">
                <div x-bind:class="!sideNavOpen ? 'flex justify-start' : 'flex justify-center'">
                    <img class="h-6" src="{{ asset('images/logo-icons/white.svg') }}" alt="logo-icons/white.svg" x-show="!sideNavOpen" x-cloak>
                    <img class="h-6" src="{{ asset('images/logos/white.svg') }}" alt="logos/white.svg" x-show="sideNavOpen" x-cloak>
                </div>
            </div>
        </div>
    </div>
</div>


