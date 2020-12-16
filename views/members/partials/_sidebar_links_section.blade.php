@foreach($sectionLinks as $link)
    <div>
        <a
            href="{{ $link['url'] }}"
            class="sidebar-link pl-3 no-decoration body {{ $themeColor }} {{ $link['active'] ? 'active' : '' }}"
        >
            <div class="sidebar-link-icon">
                @isset($link['iconClass'])
                    <i class="{{ $link['iconClass'] }}"></i>
                @endisset
                @isset($link['iconSvg'])
                    <svg width="22" height="22" aria-hidden="true" focusable="false">
                        <use xlink:href="#{{ $link['iconSvg'] }}"></use>
                    </svg>
                @endisset
            </div><span class="sidebar-link-title">{{ $link['title'] }}</span>
        </a>
    </div>
@endforeach
