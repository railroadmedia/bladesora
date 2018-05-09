<div class="flex flex-row bg-white shadow corners-3">
    <div id="settingsSidebar" class="flex flex-column br-light-1 corners-left-3 hide-xs-only">
        @include('bladesora::members.account.partials._sidebar-links', [
            "brand" => $brand,
            "sections" => $sections
        ])
    </div>
    <div class="flex flex-column">
        @yield('edit-forms')
    </div>
</div>