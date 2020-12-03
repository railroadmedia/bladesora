<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="whistle" viewBox="0 0 32.6 31.6">
        <polygon points="16.3,9.8 17.6,11.4 21.2,9.3 19.6,7.7"/>
        <path d="M32.2,17.5L32.2,17.5L32.2,17.5c-0.5-0.6-8.4-9.5-12-12.4c-3.5-2.7-9.9-2.5-15.9,2.3L3.5,8.1c0,0-0.1,0.1-0.1,0.1
            c-3.4,2.7-3.7,8.1-0.7,12c3.1,3.9,8.4,4.9,11.8,2.2c0.7-0.6,1.4-1.8,1.9-2.5l7.1,8.4l8.6-5.6L32.2,17.5L32.2,17.5
            C32.2,17.5,32.2,17.5,32.2,17.5z M30.3,21.9l-4.2,2.5v-1.2l4.2-2.5V21.9z M24.5,21.8l-9.3-11.4c0,0,0-0.1-0.1-0.1
            c-0.1-0.1-0.1-0.2-0.2-0.2l-0.2-0.3l0,0C12.9,7.8,10.4,6.7,8,6.7c4.4-2.3,8.7-2.6,11.4-0.5c3.3,2.6,10.4,10.6,11.7,12L24.5,21.8z"
            />
    </symbol>
    <symbol id="quick-tips-drumeo" viewBox="0 0 16.66 23.79">
        <path id="Path_68459" d="M4.71,20.97c0,0.28,0.09,0.56,0.24,0.8l0.78,1.17c0.27,0.41,0.72,0.65,1.21,0.65h2.8
            c0.49,0,0.94-0.24,1.21-0.65l0.78-1.17c0.16-0.24,0.24-0.52,0.24-0.8v-1.74H4.7L4.71,20.97z"/>
        <path id="Path_68460" d="M13.61,2.29c-3.33-2.9-8.39-2.55-11.29,0.78c-2.62,3.01-2.62,7.49,0,10.5c1.04,1.23,1.84,2.64,2.37,4.16
            c0,0.01,0,0.02,0,0.03h7.28c0-0.01,0-0.02,0-0.03c0.53-1.52,1.33-2.93,2.37-4.16C17.26,10.26,16.93,5.21,13.61,2.29 M11.97,7.83
            l-3.39,5.86c-0.13,0.22-0.41,0.3-0.63,0.17c-0.18-0.1-0.27-0.31-0.22-0.51L8.62,9.6H6.33c-0.26,0-0.46-0.21-0.46-0.46
            c0-0.02,0-0.04,0-0.06l0.62-4.63c0.03-0.23,0.23-0.4,0.46-0.4h2.78c0.26,0,0.46,0.21,0.46,0.47c0,0.04-0.01,0.08-0.02,0.12
            l-0.82,2.5h2.22c0.26,0,0.46,0.21,0.46,0.46C12.03,7.68,12.01,7.76,11.97,7.83"/>
    </symbol>
    <symbol id="quick-tips-pianote" viewBox="0 0 16 23.27">
        <path id="Path_68459" d="M4.49,20.34c0,0.28,0.08,0.54,0.24,0.77l0.75,1.13c0.26,0.39,0.7,0.63,1.17,0.63h2.7
            c0.47,0,0.91-0.24,1.17-0.63l0.75-1.13c0.15-0.23,0.23-0.5,0.24-0.77v-1.68H4.48L4.49,20.34z"/>
        <path id="Path_68460" d="M13.09,2.31c-3.22-2.8-8.1-2.46-10.9,0.75c-2.53,2.91-2.53,7.23,0,10.14c1,1.19,1.78,2.55,2.29,4.01
            c0,0.01,0,0.02,0,0.03h7.03c0-0.01,0-0.02,0-0.03c0.51-1.47,1.29-2.83,2.29-4.01C16.61,10,16.29,5.12,13.09,2.31 M11.5,7.65
            l-3.28,5.66c-0.12,0.21-0.4,0.29-0.61,0.16c-0.17-0.1-0.26-0.3-0.21-0.49l0.86-3.62H6.05c-0.25,0-0.45-0.2-0.45-0.45
            c0-0.02,0-0.04,0-0.06l0.6-4.47C6.24,4.17,6.43,4,6.65,4h2.68c0.25,0,0.45,0.2,0.45,0.45c0,0.04-0.01,0.08-0.01,0.11L8.97,6.98
            h2.15c0.25,0,0.45,0.2,0.45,0.45C11.56,7.51,11.54,7.58,11.5,7.65"/>
    </symbol>
</svg>

<div id="sidebar" class="" data-simplebar>
    <div class="">
        <div class="member-section flex flex-row align-v-center bb-grey-1-1">
            <div class="member-avatar">
                <a href="{{ $member['profileUrl'] ?? '#' }}">
                    <img class="bg-grey-2 rounded {{ $themeColor }}" src="{{ $member['avatar'] }}" alt="member avatar">
                </a>
            </div>
            <div class="member-details">
                <h5 class="title font-bold">{{ $member['name'] }}</h5>
                <div class="body member-stats">
                    <span>LEVEL {{ $member['level'] }}</span>
                    <span class="member-stats-xp">{{ $member['xp'] }} XP</span>
                </div>
            </div>
        </div>
        <div class="user-links-section pl-1 bb-grey-1-1">
            @foreach($userLinks as $link)
                <div class="pv-1">
                    <a
                        href="{{ $link['url'] }}"
                        class="sidebar-link no-decoration text-black body {{ $themeColor }} {{ $link['active'] ? 'active' : '' }}"
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
        </div>
        <div class="membership-links-section pl-1">
            @isset($membershipSectionTitle)
                <h5 class="title font-bold dense">{{ $membershipSectionTitle }}</h5>
            @endisset
            @foreach($membershipLinks as $link)
                <div class="pv-1">
                    <a
                        href="{{ $link['url'] }}"
                        class="sidebar-link no-decoration text-black body {{ $themeColor }} {{ $link['active'] ? 'active' : '' }}"
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
        </div>
    </div>
</div>
