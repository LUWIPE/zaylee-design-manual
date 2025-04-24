<div id="side-nav-container" class="side-nav dark pt-6 w-16 h-full flex">
    <div>
        <a class="side-nav-header flex-col justify-center h-16">
            <div class="logo w-auto m-2">
                <img
                    class="max-h-10"
                    src="https://placehold.co/400"
                    alt="Connecto logo"
                >
            </div>
        </a>
    </div>
    <div class="m-2 mt-10 flex justify-start">
        <ul>
            <li
                id="home"
                class="menu-item menu-item-hoverable h-10 px-0 mb-2">
                <a
                    class="flex h-full w-full px-2 gap-2 items-center justify-center side-nav-list"
                    href="/"
                >
                    <div
                        class="side-nav-icon"
                         title="Hjem"
                    >
                        <x-icons.home/>
                    </div>
                    <p class="side-nav-text hidden">
                        Hjem
                    </p>
                </a>
            </li>
            <li class="side-nav-divider mt-2"></li>
            <li
                id="customer"
                class="menu-item menu-item-hoverable px-0 h-10 mb-2 side-nav-item"
            >
                <a
                    class="flex h-full w-full px-2 gap-2 items-center justify-center side-nav-list"
                    href="/crm/1/customers"
                >
                    <div
                        class="side-nav-icon"
                        title="Kunder"
                    >
                        <x-icons.customer/>
                    </div>
                    <p class="side-nav-text hidden">
                        Kunder
                    </p>
                </a>
            </li>
            <li
                id="request"
                class="menu-item menu-item-hoverable px-0 h-10 mb-2 side-nav-item"
            >
                <a
                    class="flex h-full w-full px-2 gap-2 items-center justify-center side-nav-list"
                    href="#"
                >
                    <div
                        class="side-nav-icon"
                         title="Anmodninger"
                    >
                        <x-icons.request/>
                    </div>
                    <p class="side-nav-text hidden">
                        Anmodninger
                    </p>
                </a>
            </li>
            <li
                id="quotes"
                class="menu-item menu-item-hoverable px-0 h-10 mb-2 side-nav-item"
            >
                <a
                    class="flex h-full w-full px-2 gap-2 items-center justify-center side-nav-list"
                    href="/quotes"
                >
                    <div
                        class="side-nav-icon"
                         title="Tilbud"
                    >
                        <x-icons.quote/>
                    </div>
                    <p class="side-nav-text hidden">
                        Tilbud
                    </p>
                </a>
            </li>
            <li
                id="orders"
                class="menu-item menu-item-hoverable px-0 h-10 mb-2 side-nav-item"
            >
                <a
                    class="flex h-full w-full px-2 gap-2 items-center justify-center side-nav-list"
                    href="/orders"
                >
                    <div
                        class="side-nav-icon"
                        title="Sager"
                    >
                        <x-icons.case/>
                    </div>
                    <p class="side-nav-text hidden">
                        Sager
                    </p>
                </a>
            </li>
            <li class="side-nav-divider"></li>
            <li id="planning"
                class="menu-item menu-item-hoverable px-0 h-10 mb-2 side-nav-item"
            >
                <a
                    class="flex h-full w-full px-2 gap-2 items-center justify-center side-nav-list"
                    href="/planner"
                >
                    <div
                        class="side-nav-icon"
                        title="Planlægning"
                    >
                        <x-icons.planning/>
                    </div>
                    <p class="side-nav-text hidden">
                        Planlægning
                    </p>
                </a>
            </li>
            <li
                id="economy"
                class="menu-item menu-item-hoverable px-0 h-10 mb-2 side-nav-item"
            >
                <a
                    class="flex w-full px-2 gap-2 items-center justify-center side-nav-list"
                    href="#"
                >
                    <div
                        class="side-nav-icon"
                        title="Økonomi"
                    >
                        <x-icons.economy/>
                    </div>
                    <p class="side-nav-text hidden">
                        Økonomi
                    </p>
                </a>
            </li>
            <li
                id="timelog"
                class="menu-item menu-item-hoverable px-0 h-10 mb-2 side-nav-item"
            >
                <a
                    class="flex w-full px-2 gap-2 items-center justify-center side-nav-list"
                   href="#"
                >
                    <div
                        class="side-nav-icon"
                        title="Tidsregistrering"
                    >
                        <x-icons.timelog/>
                    </div>
                    <p class="side-nav-text hidden">
                        Tidsregistrering
                    </p>
                </a>
            </li>
            <li class="side-nav-divider"></li>
            <li
                id="employees"
                class="menu-item menu-item-hoverable px-0 h-10 mb-2 side-nav-item"
            >
                <a
                    class="flex w-full px-2 gap-2 items-center justify-center side-nav-list"
                    href="/employees"
                >
                    <div
                        class="side-nav-icon"
                        title="Medarbejdere"
                    >
                        <x-icons.employee/>
                    </div>
                    <p class="side-nav-text hidden">
                        Medarbejdere
                    </p>
                </a>
            </li>
            <li
                id="equipment"
                class="menu-item menu-item-hoverable px-0 h-10 mb-2 side-nav-item"
            >
                <a
                    class="flex w-full px-2 gap-2 items-center justify-center side-nav-list"
                    href="/equipment/1/types"
                >
                    <div
                        class="side-nav-icon"
                        title="Udstyr"
                    >
                        <x-icons.equipment/>
                    </div>
                    <p class="side-nav-text hidden">
                        Udstyr
                    </p>
                </a>
            </li>
            <li
                id="certificates"
                class="menu-item menu-item-hoverable px-0 h-10 mb-2 side-nav-item"
            >
                <a
                    class="flex w-full px-2 gap-2 items-center justify-center side-nav-list"
                    href="/certificates/1/types"
                >
                    <div
                        class="side-nav-icon"
                        title="Certifikater"
                    >
                        <x-icons.certificate/>
                    </div>
                    <p class="side-nav-text hidden">
                        Certifikater
                    </p>
                </a>
            </li>
            <li
                id="service-templates"
                class="menu-item menu-item-hoverable px-0 h-10 mb-2 side-nav-item"
            >
                <a
                    class="flex w-full px-2 gap-2 items-center justify-center side-nav-list"
                    href="/service-templates"
                >
                    <div
                        class="side-nav-icon"
                        title="Ydelser"
                    >
                        <x-icons.service/>
                    </div>
                    <p class="side-nav-text hidden">
                        Ydelser
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <div class="m-2 mt-10 flex justify-start">
        <ul>
            <li class="menu-item menu-item-hoverable px-0 h-10 mb-2 side-nav-item">
                <button
                    id="side-nav-toggle"
                    class="flex w-full px-2 gap-2 items-center justify-start"
                >
                    <span
                        id="side-nav-open"
                        class="side-nav-icon flex items-center"
                    >
                        <x-icons.arrow-right/>
                    </span>
                    <span
                        id="side-nav-close"
                        class="side-nav-icon flex items-center"
                    >
                        <x-icons.arrow-left/>
                    </span>
                </button>

            </li>
        </ul>
    </div>
</div>


