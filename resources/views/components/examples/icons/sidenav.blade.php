<div class="h-4 w-4 border border-gray-100 rounded-sm hover:bg-dark bg-gray-100"
     x-show="sideNavOpen" x-cloak>
    <div class="grid grid-cols-3">
        <div class="col-span-1 border-r border-gray-100 h-3.5">
            <br>
        </div>
        <div class="col-span-2 h-3.5 bg-dark">
            <br>
        </div>
    </div>
</div>
<div class="h-4 w-4 border border-gray-100 rounded-sm bg-dark hover:bg-gray-100"
     x-show="!sideNavOpen" x-cloak>
    <div class="grid grid-cols-3">
        <div class="col-span-1 border-r hover:border-none border-gray-100 h-3.5">
            <br>
        </div>
        <div class="col-span-2 h-3.5 bg-dark">
            <br>
        </div>
    </div>
</div>
