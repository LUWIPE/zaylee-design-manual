{{--
Skal ikke vises på hjem siden
Skal fange navnet fra den side der er aktiv til overskrift
Tilføje class 'side-nav-active' på den aktive side i sidenav.blade.php
--}}

<div id="component-menu-container" class="side-nav dark pt-6 mt-24 w-50 side-nav-container h-full hidden">
    <div class="m-2 flex self-start ">
        <div>
            <ul class="mt-5">
                <li class="menu-title px-0 h-10 mb-2">
                    <div class="flex h-full w-full px-2 gap-2 items-center justify-start side-nav-list"
                       data-tabindex="" tabindex="-1">
                        <h3 id="component-menu-title">Overskrift</h3>
                    </div>
                </li>
                <li class="menu-item menu-item-hoverable px-0 h-10 mb-2">
                    <a class="flex h-full w-full px-2 gap-2 items-center justify-start side-nav-list" href="#"
                       data-tabindex="" tabindex="-1">
                        <p>Undermenupunkt 1</p>
                    </a>
                </li>
                <li class="menu-item menu-item-hoverable px-0 h-10 mb-2">
                    <a class="flex h-full w-full px-2 gap-2 items-center justify-start side-nav-list" href="#"
                       data-tabindex="" tabindex="-1">
                        <p>Undermenupunkt 2</p>
                    </a>
                </li>
                <li class="menu-item menu-item-hoverable px-0 h-10 mb-2">
                    <a class="flex h-full w-full px-2 gap-2 items-center justify-start side-nav-list" href="#"
                       data-tabindex="" tabindex="-1">
                        <p>Undermenupunkt 3</p>
                    </a>
                </li>
                <li class="menu-item menu-item-hoverable px-0 h-10 mb-2">
                    <a class="flex h-full w-full px-2 gap-2 items-center justify-start side-nav-list" href="#"
                       data-tabindex="" tabindex="-1">
                        <p>Undermenupunkt 4</p>
                    </a>
                </li>
                <li class="menu-item menu-item-hoverable px-0 h-10 mb-2">
                    <a class="flex h-full w-full px-2 gap-2 items-center justify-start side-nav-list" href="#"
                       data-tabindex="" tabindex="-1">
                        <p>Undermenupunkt 5</p>
                    </a>
                </li>
                <li class="menu-item menu-item-hoverable px-0 h-10 mb-2">
                    <a class="flex h-full w-full px-2 gap-2 items-center justify-start side-nav-list" href="#"
                       data-tabindex="" tabindex="-1">
                        <p>Undermenupunkt 6</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


