<div class="flex flex-row bg-white shadow corners-3">
    <div class="flex flex-column">
        <div class="flex flex-row hide-sm-up">
            @foreach($sections as $index => $section)
                <a href="{{ $section['url'] }}"
                   class="flex flex-column subheading align-center pa-2 bb-light-1 no-decoration
                {{ $index > 0 ? 'bl-light-1' : '' }}
                   {{ $section['active'] ? 'bg-recordeo text-white' : 'text-dark' }}">
                    <i class="{{ $section['icon'] }}"></i>
                </a>
            @endforeach
        </div>
        <div class="flex flex-row">
            <div id="settingsSidebar" class="flex flex-column br-light-1 corners-left-3 hide-xs-only">
                @include('bladesora::members.account.partials._sidebar-links', [
                    "brand" => $brand,
                    "sections" => $sections
                ])
            </div>
            <div class="flex flex-column grow">
                @yield('edit-forms')
            </div>
        </div>
    </div>
</div>