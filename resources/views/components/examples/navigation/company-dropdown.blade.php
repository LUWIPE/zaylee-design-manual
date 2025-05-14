<div class="relative" x-data="{ open: false, toggleRef: null }" x-on:click.away="open = false">
    <ul>
        <li id="company" class="menu-item menu-item-hoverable h-8 px-0 mt-2 mb-2">
            <div class="flex h-full w-full px-2 gap-2 items-center side-nav-list">
                <div class="bg-blue-400 border-blue-400 rounded-md icon-md p-1 flex justify-center items-center"
                     title="Virksomhedsmenu">
                    <p class="text-xs text-black">Ag</p>
                </div>
                <p class="text-white" x-show="sideNavOpen" x-transition x-cloak>
                    Virksomhedsnavn{{--{{ $company->name }}--}}
                </p>
            </div>
        </li>
    </ul>
</div>
