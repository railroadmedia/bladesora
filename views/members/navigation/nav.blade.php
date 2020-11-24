<header id="nav" class="container fluid shadow bg-black bv-grey-5-1">
    <div class="{{ (isset($stretch) && $stretch) ? 'nav-inner' : 'container collapsed' }}">
        <div class="flex flex-row">
            <a href="/members"
               class="flex flex-column logo ph align-center"
               @if(!empty($isIframe)) target="_parent" @endif>
                <img src="{{ $logo }}">
            </a>

            @if(!empty($mainSections))
                <div id="pageLinks" class="flex flex-column nav-page-links">
                    <div class="flex flex-row hide-xs-only">
                        @foreach($mainSections as $mainSection)
                            <a href="{{ $mainSection['url'] }}"
                               class="main-section-link flex flex-column align-center body grow text-grey-3 no-decoration {{ $mainSection['active'] ? 'active' : '' }}"
                               dusk="main-section-link-{{ strtolower($mainSection['title']) }}"

                            @if(!empty($mainSection['newTab'])) target="_blank" @endif

                            @if(empty($mainSection['newTab']) && !empty($isIframe)) target="_parent" @endif
                            >
                                {!! $mainSection['title'] !!}
                            </a>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="flex flex-column"></div>
            @endif

            @if(!empty($isLive) && $isLive === true)
                <div class="flex header-button live-button flex-column align-v-center noselect ph-1">
                    <a href="{{ $livePageUrl }}"
                       @if(!empty($isIframe)) target="_parent" @endif
                       id="liveIndicator"
                       class="bg-error text-white tiny font-bold corners-3 text-center uppercase no-decoration">
                        Live
                    </a>
                </div>
            @endif

            @if(!empty($links['Notifications']))
                <div class="flex header-button flex-column noselect">
                    <a href="{{ $links['Notifications']['url'] }}"
                       id="notificationButton" class="square">
                        <div class="pa-1 wrap">
                            @if (!empty($unreadNotificationCount))
                                <span class="rounded bg-{{ $themeColor }} dense text-white new">
                                    {{ $unreadNotificationCount }}
                                </span>
                            @endif
                            <i class="rounded inset-border text-black fas fa-bell flex-center hide-sm-down"></i>
                        </div>
                    </a>
                </div>
            @endif

            @if(!empty($searchUrl) && !$agent->is('IE') && empty($isIframe))
            <div id="searchColumn" class="flex search-column relative flex-column noselect align-v-center">
                <div class="flex flex-row search-row bb-grey-5-1 pl-2">
                    <div class="flex flex-column search-button title hover-text-white text-grey-3 align-center pointer"
                        dusk="search-button">
                        <i class="fas fa-search"></i>
                    </div>
                    <div id="searchBox" class="form-group flex grow align-v-center flex-column pl-2">
                        <form method="GET" action="{{ $searchUrl }}">
                            <input id="searchInput"
                                   name="term"
                                   type="text"
                                   class="solo text-white"
                                   placeholder="What would you like to learn?"
                                   autocomplete="off"
                                   dusk="search-input">
                        </form>
                    </div>
                    <div class="flex flex-column search-button title hover-text-white text-grey-3 align-center pointer">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </div>
            @endif

            @if(!empty($isIframe))
                <div id="searchColumn" class="flex search-column relative flex-column noselect align-v-center">
                    <div class="flex flex-row search-row bb-grey-5-1 pl-2">
                        <a href="{{ $searchPageUrl }}" target="_parent"
                           class="flex flex-column search-button title no-decoration hover-text-white text-grey-3 align-center pointer">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
            @endif

            <div class="flex header-button flex-column bb-grey-5-1 noselect">
                <a href="{{ $accountUrl }}"
                   class="square"
                   dusk="profile-nav-link"
                   @if(!empty($isIframe)) target="_parent" @endif>
                    <div class="pa-1 wrap">
                        <img class="rounded inset-border"
                             src="{{ imgix($userAvatar, ["q" => 50, "blur" => 2, "w" => 50, "h" => 50, "fit" => "crop"]) }}"
                             data-avatar-update="true">
                        @if(!empty($hasUnreadNotifications))
                            <span class="notification-badge rounded" dusk="notification-dot"></span>
                        @endif
                    </div>
                </a>
            </div>

            @if(empty($isIframe))
            <a id="menuButton"
               tabindex="0"
               dusk="hamburger-button"
               class="flex flex-column menu noselect bl-grey-5-1 bb-grey-5-1 hide-sm-up" role="button">
                <div class="flex flex-row text-white align-center uppercase">
                    <i class="menu-bars-icon"></i>
                </div>
            </a>
            @endif
        </div>
    </div>
</header>
@if(empty($isIframe))
    <aside id="navSideBar" class="shadow bg-white flex flex-column">
        <section id="pageLinks" class="flex flex-column">

            @foreach($links as $page => $info)
                @if(!empty($info['children']))
                    @include('bladesora::members.partials._parent-nav-link', [
                        "page" => $page,
                        "icon" => $info['icon'],
                        "children" => $info['children'],
                    ])
                @else
                    @include('bladesora::members.partials._nav-link', [
                        "page" => $page,
                        "icon" => $info['icon'],
                        "url" => $info['url'],
                        "greyed" => false
                    ])
                @endif

            @endforeach
            <div class="flex flex-column spacer"></div>
            <div class="sub-links flex flex-column mt-3">

                @if(!empty($drumeoBeatUrl))
                    <a class="flex flex-row align-v-center text-black ph mb-1"
                       href="{{ $drumeoBeatUrl }}" target="_blank">
                        Drumeo Beat <i class="fal fa-external-link ml-1"></i>
                    </a>
                @endif

                @if(!empty($legacyResourcesUrl))
                    <a class="flex flex-row align-v-center text-black ph mb-1" href="{{ $legacyResourcesUrl }}">Legacy Resources</a>
                @endif

                <a class="flex flex-row align-v-center text-black ph mb-1" href="{{ $supportUrl }}" dusk="page-link-support">Support</a>
                <a class="flex flex-row align-v-center text-black ph mb-1" href="{{ $logoutUrl }}" dusk="page-link-logout">Logout</a>
            </div>
        </section>
    </aside>
    <div id="backgroundOverlay"></div>

    @if(!empty($levelUpNotification))
        <input id="levelUpData" type="hidden"
               data-old-rank="{{ $levelUpNotification['tierPrevious'] }}"
               data-new-rank="{{ $levelUpNotification['tierNew'] }}">
    @endif
@endif
