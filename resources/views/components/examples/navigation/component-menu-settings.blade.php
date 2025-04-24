<div id="settings-components-menu-container"
     class="side-nav dark pt-6 mt-24 w-50 side-nav-container h-full {{ $showComponentMenuSettings === 'false' ? 'hidden' : '' }}"
>
    <div class="m-2 flex self-start">
        <div>
            <ul class="mt-5">
                <li class="menu-title px-0 h-10 mb-2">
                    <div
                        class="flex h-full w-full px-2 gap-2 items-center justify-start side-nav-list"
                        data-tabindex=""
                        tabindex="-1">
                        <h4
                            id="component-menu-title"
                            class="h4 "
                        >
                            {{ $activeAccount()->name }}
                        </h4>
                    </div>
                </li>
                <li class="menu-item menu-item-hoverable px-0 h-10 mb-2">
                    <a
                        class="flex h-full w-full px-2 gap-2 items-center justify-start side-nav-list"
                        href="/accounts/{{ $activeAccount()->id }}/edit"
                        data-tabindex=""
                        tabindex="-1"
                    >
                        <p class="text-gray-200">
                            Ret oplysninger
                        </p>
                    </a>
                </li>
                <li class="menu-item menu-item-hoverable px-0 h-10 mb-2">
                    <a
                        class="flex h-full w-full px-2 gap-2 items-center justify-start side-nav-list"
                        href="/accounts/{{ $activeAccount()->id }}/branding/edit"
                        data-tabindex=""
                        tabindex="-1"
                    >
                        <p class="text-gray-200">
                            Ret branding
                        </p>
                    </a>
                </li>
                <li
                    class="menu-item menu-item-hoverable px-0 h-10 mb-2">
                    <a
                        class="flex h-full w-full px-2 gap-2 items-center justify-start side-nav-list"
                        href="#"
                        data-tabindex=""
                        tabindex="-1"
                    >
                        <p class="text-gray-200">
                            Økonomistyring
                        </p>
                    </a>
                </li>
                <li class="menu-item menu-item-hoverable px-0 h-10 mb-2">
                    <a
                        class="flex h-full w-full px-2 gap-2 items-center justify-start side-nav-list"
                        href="/teams/{{ $activeAccount()->id }}/expertises"
                        data-tabindex=""
                        tabindex="-1"
                    >
                        <p class="text-gray-200">
                            Medarbejdere
                        </p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


