<div class="side-nav dark max-h-screen flex fixed top-0 left-0 mt-2 pb-2">
    <div class="flex flex-col justify-between h-full">
        <div class="px-2 flex flex-col justify-between h-full">
            <div>
                <div>
                    <x-examples.navigation.company-dropdown/>
                </div>
                <div>
                    <ul>
                        <li id="home" class="menu-item menu-item-hoverable h-8 px-0 mb-2">
                            <a
                                class="flex h-full w-full px-2 gap-2 items-center side-nav-list"
                                x-bind:class=""

                                href="#"
                            >
                                <div class="icon-sm stroke-white fill-white" title="Hjem">
                                    <x-examples.icons.home/>
                                </div>
                                <p class="text-white" x-show="sideNavOpen" x-transition x-cloak>Hjem</p>
                            </a>
                        </li>
                        <li id="status-dash" class="menu-item menu-item-hoverable h-8 px-0 mb-2">
                            <a class="flex h-full w-full px-2 gap-2 items-center side-nav-list"
                               href="{{--{{ route('status-dashboard.index') }}--}}#">
                                <div class="icon-sm stroke-white fill-white" title="Status dashboard">
                                    <x-examples.icons.dashboard/>
                                </div>
                                <p class="text-white" x-show="sideNavOpen" x-transition x-cloak>Status dashboard</p>
                            </a>
                        </li>
                        <li id="employee-board" class="menu-item menu-item-hoverable h-8 px-0 mb-2">
                            <a class="flex h-full w-full px-2 gap-2 items-center side-nav-list"
                               href="{{--{{ route('employee-board.index') }}--}}#">
                                <div class="icon-sm stroke-white fill-white" title="Medarbejder board">
                                    <x-examples.icons.dashboard/>
                                </div>
                                <p class="text-white" x-show="sideNavOpen" x-transition x-cloak>Medarbejder board</p>
                            </a>
                        </li>
                        <li class="side-nav-divider mt-2"></li>
                        <li id="customer" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                            <a class="flex h-full w-full px-2 gap-2 items-center side-nav-list"
                               href="{{--/crm/1/customers--}}#">
                                <div class="icon-sm stroke-white fill-white" title="Kunder">
                                    <x-examples.icons.customer/>
                                </div>
                                <p class="text-white" x-show="sideNavOpen" x-transition x-cloak>Kunder</p>
                            </a>
                        </li>
                        <li id="quotes" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                            <a class="flex h-full w-full px-2 gap-2 items-center side-nav-list" href="{{--/quotes--}}#">
                                <div class="icon-sm stroke-white fill-white" title="Tilbud">
                                    <x-examples.icons.quote/>
                                </div>
                                <p class="text-white" x-show="sideNavOpen" x-transition x-cloak>Tilbud</p>
                            </a>
                        </li>
                        <li id="orders" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                            <a class="flex h-full w-full px-2 gap-2 items-center side-nav-list" href="{{--/orders--}}#">
                                <div class="icon-sm stroke-white fill-white" title="Sager">
                                    <x-examples.icons.case/>
                                </div>
                                <p class="text-white" x-show="sideNavOpen" x-transition x-cloak>Sager</p>
                            </a>
                        </li>
                        <li id="planning" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                            <a class="flex h-full w-full px-2 gap-2 items-center side-nav-list" href="{{--/planner--}}#">
                                <div class="icon-sm stroke-white fill-white" title="Planlægning">
                                    <x-examples.icons.planning/>
                                </div>
                                <p class="text-white" x-show="sideNavOpen" x-transition x-cloak>Planlægning</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            {{--
                        <li id="request" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                            <a class="flex h-full w-full px-2 gap-2 items-center side-nav-list" href="#">
                                <div class="icon-sm stroke-white fill-white" title="Anmodninger">
                                    <x-examples.icons.request/>
                                </div>
                                <p class="text-white" x-show="sideNavOpen" x-transition x-cloak>Anmodninger</p>
                            </a>
                        </li>
            --}}
            {{--
                        <li id="economy" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                            <a class="flex w-full px-2 gap-2 items-center side-nav-list" href="#">
                                <div class="icon-sm stroke-white fill-white" title="Økonomi">
                                    <x-examples.icons.economy/>
                                </div>
                                <p class="text-white" x-show="sideNavOpen" x-transition x-cloak>Økonomi</p>
                            </a>
                        </li>
            --}}
            {{--
                        <li id="timelog" class="menu-item menu-item-hoverable px-0 h-8 mb-2 side-nav-item">
                            <a class="flex w-full px-2 gap-2 items-center side-nav-list"
                               href="{{ route('records.index', "1") }}?status=draft">
                                <div class="icon-sm stroke-white fill-white" title="Tidsregistrering">
                                    <x-examples.icons.timelog/>
                                </div>
                                <p class="text-white" x-show="sideNavOpen" x-transition x-cloak>Tidsregistrering</p>
                            </a>
                        </li>
            --}}
        </div>
        <div class="px-2 mb-4 flex flex-col justify-start">
            <ul>
                <li id="service-templates" class="menu-item menu-item-hoverable px-0 h-5 mb-2 side-nav-item">
                    <a class="flex w-full px-2 gap-2 items-center side-nav-list" href="{{--/service-templates--}}#">
                        <div class="icon-xs stroke-white fill-white" title="Serviceskabeloner">
                            <x-examples.icons.service/>
                        </div>
                        <p class="text-xs text-white font-light" x-show="sideNavOpen" x-transition x-cloak>Serviceskabeloner</p>
                    </a>
                </li>
                <li id="employees" class="menu-item menu-item-hoverable px-0 h-6 mb-2 side-nav-item">
                    <a class="flex w-full px-2 gap-2 items-center side-nav-list" href="{{--/employees--}}#">
                        <div class="icon-xs stroke-white fill-white" title="Medarbejdere">
                            <x-examples.icons.employee/>
                        </div>
                        <p class="text-xs text-white font-light" x-show="sideNavOpen" x-transition x-cloak>Medarbejdere</p>
                    </a>
                </li>
                <li id="equipment" class="menu-item menu-item-hoverable px-0 h-6 mb-2 side-nav-item">
                    <a class="flex w-full px-2 gap-2 items-center side-nav-list" href="{{--/equipment/1/types--}}#">
                        <div class="icon-xs stroke-white fill-white" title="Materiel">
                            <x-examples.icons.equipment/>
                        </div>
                        <p class="text-xs text-white font-light" x-show="sideNavOpen" x-transition x-cloak>Materiel</p>
                    </a>
                </li>
                <li id="certificates" class="menu-item menu-item-hoverable px-0 h-6 mb-2 side-nav-item">
                    <a class="flex w-full px-2 gap-2 items-center side-nav-list"
                       href="{{--/certificates/1/types--}}#">
                        <div class="icon-xs stroke-white fill-white" title="Certifikater">
                            <x-examples.icons.certificate/>
                        </div>
                        <p class="text-xs text-white font-light" x-show="sideNavOpen" x-transition x-cloak>Certifikater</p>
                    </a>
                </li>
                <li class="side-nav-divider mt-2"></li>
            </ul>
            <div class="flex justify-start">
                <img class="h-5 px-2" src="{{ asset('images/logo-icons/white.svg') }}" alt="logo-icons/white.svg" x-show="!sideNavOpen" x-cloak>
                <img class="h-5 px-2" src="{{ asset('images/logos/white.svg') }}" alt="logos/white.svg" x-show="sideNavOpen" x-cloak>
            </div>
        </div>
    </div>
</div>


