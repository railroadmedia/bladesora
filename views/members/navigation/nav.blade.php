<header id="nav" class="container fluid shadow tw-z-100">
    <div class="{{ (isset($stretch) && $stretch) ? 'nav-inner' : '' }} container collapsed tw-bg-inherit">
        <div class="flex flex-row tw-bg-inherit">
            @if(empty($isIframe))
            <a id="menuButton"
               tabindex="0"
               dusk="hamburger-button"
               class="flex flex-column menu noselect bb-grey-5-1 hide-md-up" role="button">
                <div class="flex flex-row text-white align-center uppercase">
                    <i class="menu-bars-icon"></i>
                </div>
            </a>

            <a id="colapseButton"
               tabindex="0"
               dusk="hamburger-button"
               class="flex flex-column menu noselect bb-grey-5-1 hide-sm-down" role="button">
                <div class="flex flex-row text-white align-center uppercase">
                    <i class="menu-bars-icon"></i>
                </div>
            </a>
            @endif
            
            <a href="/members"
               class="flex flex-column logo align-center"
               @if(!empty($isIframe)) target="_parent" @endif>
                <img src="{{ $logo }}"
                style=" @if ( $themeColor == 'drumeo' )
                            padding:0 0 10px;
                        @elseif ( $themeColor == 'pianote' )
                            padding:3px 0;
                        @elseif ( $themeColor == 'guitareo' )
                            padding:4px 0 0;
                        @elseif ( $themeColor == 'singeo' )
                            padding:5px 0 1px;
                        @endif ">
            </a>

            <!-- Platform Select -->
            @include('bladesora::members.partials._platform-dropdown')

            <div class="flex flex-column align-center">
                <div class="flex flex-row search-input-container align-v-center hide-sm-down">
                    <div class="search-input-icon">
                        <i class="fas fa-search"></i>
                    </div>

                    <form method="GET" action="{{ $searchUrl }}">
                        <input id="search-input"
                               name="term"
                               type="text"
                               class="solo text-white"
                               placeholder="What would you like to learn?"
                               autocomplete="off"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = 'What would you like to learn?'"
                               dusk="search-input">
                    </form>

                    <div id="search-input-clear" class="hide">
                        <i class="fal fa-times"></i>
                    </div>
                </div>
            </div>

            <div class="flex header-button live-button flex-column align-v-center noselect ph-1">
                <a href="{{ $livePageUrl }}"
                   @if(!empty($isIframe)) target="_parent" @endif
                   id="liveIndicator"
                   class="bg-error text-white tiny font-bold corners-3 text-center uppercase no-decoration">
                    Live
                </a>
            </div>

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
            <div id="searchColumn" class="flex search-column relative flex-column noselect align-v-center hide-md-up">
                <div class="flex flex-row search-row">
                    <div class="flex flex-column search-button title hover-text-white text-grey-3 align-center pointer"
                        dusk="search-button">
                        <i class="fas fa-search"></i>
                    </div>
                    <div id="searchBox" class="form-group flex grow align-v-center flex-column hide-xs-only">
                        <form method="GET" action="{{ $searchUrl }}">
                            <input id="toggled-search-input"
                                   name="term"
                                   type="text"
                                   class="solo text-white"
                                   placeholder="What would you like to learn?"
                                   onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'What would you like to learn?'"
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
                    <div class="flex flex-row search-row pl-2">
                        <a href="{{ $searchPageUrl }}" target="_parent"
                           class="flex flex-column search-button title no-decoration hover-text-white text-grey-3 align-center pointer">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
            @endif

            <div class="flex header-button flex-column noselect relative">
                <a href="{{ $accountUrl }}"
                   class="square profile-nav-link"
                   dusk="profile-nav-link"
                   @if(!empty($isIframe)) target="_parent" @endif>
                    <div class="pa-1 wrap">
                        <img class="rounded tw-h-7 tw-w-7 lg:tw-w-9 lg:tw-h-9 tw-box-border"
                             src="{{ imgix($userAvatar, ["q" => 50, "blur" => 2, "w" => 50, "h" => 50, "fit" => "crop"]) }}"
                             data-avatar-update="true">
                    </div>
                </a>
                <div class="profile-nav-info text-black corners-10">
                    <div class="relative">
                        <div class="profile-nav-tip"></div>
                        <h3 class="body font-bold">{{ $userName }}</h3>
                        <p class="tw-text-nowrap">LEVEL {{  $userLevel}}</p>
                        <p class="tw-text-nowrap">{{ $userXp }} XP</p>
                    </div>
                </div>
            </div>

            @if(isset($showReferralButton) && $showReferralButton)
                <div class="pa-1 noselect tw-grow-0 tw-bg-inherit" style="padding-left: 0; z-index: 10">
                    <a
                        href="{{ $referralPageUrl ?? '/' }}"
                        class="btn tw-w-7 tw-h-7 lg:tw-h-9 md:tw-w-36 tw-rounded-full text-white bg-{{ $themeColor }}"
                        style="font-size: 13px;"
                    >
                        <i class="fas fa-gift md:tw-mr-2"></i> <span class="tw-hidden md:tw-inline-block">invite a friend</span>
                    </a>
                </div>
            @endif
        </div>
    </div>
</header>
@if(empty($isIframe))
    <aside id="navSideBar" class="shadow bg-white flex flex-column">
        <div class="relative">
            <div class="sidebar-member-section flex flex-row align-v-center bb-grey-1-1">
                <div class="member-avatar">
                    <a href="{{ $member['profileUrl'] ?? '#' }}">
                        <img class="bg-grey-2 rounded {{ $themeColor }}" src="{{ imgix($member['avatar'], ['q' => 50, 'blur' => 2, 'w' => 60, 'h' => 60, 'fit' => 'crop']) }}" alt="member avatar">
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
            <div id="nav-sidebar-close"><i class="fal fa-times"></i></div>
        </div>
        <section id="pageLinks" class="flex flex-column">

            @foreach($links as $page => $info)
                @if(!empty($info['children']))
                    @include('bladesora::members.partials._parent-nav-link', [
                        "page" => $page,
                        "iconClass" => $info['iconClass'],
                        "children" => $info['children'],
                    ])
                @else
                    @include('bladesora::members.partials._nav-link', [
                        "page" => $page,
                        "iconClass" => $info['iconClass'],
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
