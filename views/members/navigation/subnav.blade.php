<div id="subNav" class="container fluid collapsed bg-black bb-grey-5-1">
    <div class="container relative {{ count($subSections) > 4 ? 'pad-sides' : 'collapsed' }}">
        <div id="subNavWrap" class="flex flex-row overflow">
            @foreach($subSections as $section)
                <a href="{{ $section['url'] }}"
                   class="flex flex-column subnav-link pa-1 uppercase align-center text-grey-4 no-decoration br-grey-5-1
                    {{ $section['active'] ? 'active' : '' }}">
                    <i class="{{ $section['icon'] }}
                            {{ $section['active'] ? ('text-' . $themeColor) : 'text-grey-4' }}" style="font-size:20px;"></i>
                    <p class="x-tiny dense font-bold wrap text-center
                            {{ $section['active'] ? 'text-white' : 'text-grey-4' }}" style="max-width:100%;white-space:normal;">
                        {{ $section['title'] }}
                    </p>
                </a>
            @endforeach
        </div>

        @if(count($subSections) > 4)
            <div id="scrollSubNavLeft" class="scroll-sub-nav body text-grey-3 bh-grey-5-1 hide">
                <i class="fas fa-chevron-left"></i>
            </div>

            <div id="scrollSubNavRight" class="scroll-sub-nav body text-grey-3 bh-grey-5-1">
                <i class="fas fa-chevron-right"></i>
            </div>
        @endif
    </div>
</div>