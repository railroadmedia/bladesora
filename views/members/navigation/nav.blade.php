<header id="nav" class="container fluid shadow bg-black bv-grey-5-1">
    <div class="container collapsed">
        <div class="flex flex-row">
            <a href="/members" class="flex flex-column logo ph align-center">
                <img src="{{ $logo }}">
            </a>

            @if(!empty($mainSections))
                <div class="flex flex-column">
                    <div class="flex flex-row hide-xs-only">
                        @foreach($mainSections as $mainSection)
                            <a href="{{ $mainSection['url'] }}"
                               class="main-section-link flex flex-column align-center body grow text-grey-3 no-decoration {{ $mainSection['active'] ? 'active' : '' }}">
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

            <div class="flex header-button flex-column noselect align-center ph">
                <a href="{{ $searchUrl }}">
                    <div class="wrap title hover-text-white text-grey-3">
                        <i class="fas fa-search"></i>
                    </div>
                </a>
            </div>

            <div class="flex header-button flex-column noselect">
                <a href="{{ $accountUrl }}"
                   class="square">
                    <div class="pa-1 wrap">
                        <img class="rounded inset-border"
                             src="{{ $userAvatar }}"
                             data-avatar-update="true">
                    </div>
                </a>
            </div>

            <a id="menuButton" tabindex="0"
               class="flex flex-column menu noselect bl-grey-5-1 hide-sm-up" role="button">
                <div class="flex flex-row text-white align-center uppercase">
                    <i class="menu-bars-icon"></i>
                </div>
            </a>
        </div>
    </div>
</header>
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

            <a class="flex flex-row align-v-center text-black ph mb-1" href="{{ $supportUrl }}">Support</a>
            <a class="flex flex-row align-v-center text-black ph mb-1" href="{{ $logoutUrl }}">Logout</a>
        </div>
    </section>
</aside>
<div id="backgroundOverlay"></div>