<div id="subNav" class="container fluid collapsed bg-black bb-grey-4-1">
    <div class="flex flex-row">
        @foreach($subSections as $section => $info)
            <a href="{{ $info['url'] }}"
               class="flex flex-column subnav-link pa-1 tiny font-bold uppercase align-center text-grey-4 no-decoration br-grey-4-1
                    {{ strtolower(str_replace(' ', '-', $section)) }}
                    {{ stripos(url()->current(), $section) !== false ? 'active' : '' }}">
                <i class="{{ $info['icon'] }}" style="font-size:20px;"></i>
                <span class="hide-xs-only">{{ $section }}</span>
            </a>
        @endforeach
    </div>
</div>