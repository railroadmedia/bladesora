@foreach($sectionLinks as $link)
    <div class="sidebar-link-container {{ isset($link['collapsed']) && $link['collapsed'] ? 'show-collapsed' : '' }}">
        <a
            href="{{ $link['url'] }}"
            class="sidebar-link pl-3 no-decoration body tw-relative {{ $themeColor }} {{ $link['active'] ? 'active' : '' }}"
        >
            <div class="sidebar-link-icon tw-inline-flex">
                @isset($link['iconClass'])
                    <i class="{{ $link['iconClass'] }}"></i>
                @endisset
                @isset($link['iconSvg'])
                    <svg width="16" height="16" aria-hidden="true" focusable="false">
                        <use xlink:href="#{{ $link['iconSvg'] }}"></use>
                    </svg>
                @endisset

                @if( ($link['title'] === "Notifications") && !empty($hasUnreadNotifications) )
                    <div class="tw-rounded-full tw-h-2 tw-w-2 tw-bg-red-500 tw-inline-block" dusk="notification-dot"></div>
                @endif
            </div>
            <span class="sidebar-link-title">{{ $link['title'] }}</span>
            @isset($link['badge'])
                <span
                    @isset($link['badge']['id'])
                        id="{{ $link['badge']['id'] }}"
                    @endisset
                    class="text-white corners-5"
                >{{ $link['badge']['text'] }}</span>
            @endisset

        </a>
    </div>
@endforeach
