<div id="sidebar" class="" data-simplebar>
    <div class="">
        <div class="sidebar-section member-section flex flex-row align-v-center bb-grey-1-1 pl-3">
            <div class="member-avatar">
                <a href="{{ $member['profileUrl'] ?? '#' }}">
                    <img class="bg-grey-2 rounded {{ $themeColor }}" src="{{ imgix($member['avatar'], ['q' => 50, 'blur' => 2, 'w' => 60, 'h' => 60, 'fit' => 'crop']) }}" alt="member avatar">
                </a>
            </div>
            <div class="member-details">
                <h5 class="title font-bold sidebar-member-username">{{ $member['name'] }}</h5>
                <div class="body member-stats">
                    <span>LEVEL {{ $member['level'] }}</span><br>
                    <span class="member-stats-xp">{{ $member['xp'] }} XP</span>
                </div>
            </div>
        </div>
        <div class="sidebar-section user-links-section bb-grey-1-1">
            @foreach($userLinks as $link)
                <div>
                    <a
                        href="{{ $link['url'] }}"
                        class="sidebar-link pl-3 no-decoration text-black body {{ $themeColor }} {{ $link['active'] ? 'active' : '' }}"
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
        <div class="sidebar-section membership-links-section">
            @isset($membershipSectionLink)
                <h5 class="title font-bold dense pl-3">
                    <a href="{{ $membershipSectionLink['url'] }}">{{ $membershipSectionLink['title'] }}</a>
                </h5>
            @endisset
            @foreach($membershipLinks as $link)
                <div>
                    <a
                        href="{{ $link['url'] }}"
                        class="sidebar-link pl-3 no-decoration text-black body {{ $themeColor }} {{ $link['active'] ? 'active' : '' }}"
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
