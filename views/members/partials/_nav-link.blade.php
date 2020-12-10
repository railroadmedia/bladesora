<a href="{{ $url }}" class="page-link flex flex-row body text-black align-v-center bb-grey-2-1 pointer"
    dusk="page-link-{{ strtolower(str_replace(' ', '-', $page)) }}">
    @if(!empty($iconClass))
        <div class="page-link-icon"><i class="no-events {{ $iconClass }} text-{{ $greyed ? 'black' : $themeColor }}"></i></div>{{ $page }}
    @elseif(!empty($iconSvg))
        <div class="page-link-icon"><svg width="20" height="20" aria-hidden="true" focusable="false"><use xlink:href="#{{ $iconSvg }}"></use></svg></div>{{ $page }}
    @else
        {{ $page }}
    @endif
</a>