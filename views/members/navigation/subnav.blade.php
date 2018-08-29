<div id="subNav" class="container fluid collapsed bg-black bb-grey-5-1">
    <div class="flex flex-row">
        @foreach($subSections as $section => $info)
            <a href="{{ $info['url'] }}"
               class="flex flex-column subnav-link pa-1 tiny dense font-bold uppercase align-center text-grey-4 no-decoration br-grey-5-1
                    {{ strtolower(str_replace(' ', '-', $section)) }}
                    {{ stripos(url()->current(), $section) !== false || ($section === 'Shows' && $isShow) ? 'active' : '' }}">
                <i class="{{ $info['icon'] }} text-grey-4" style="font-size:20px;"></i>
                {{ $section }}
            </a>
        @endforeach
    </div>
</div>