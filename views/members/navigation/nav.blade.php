<header id="nav" class="container fluid collapsed shadow bv-grey-4-1">
    <div class="flex flex-row">
        <a href="/members" class="flex flex-column logo ph align-center br-grey-4-1">
            <img src="{{ $logo }}">
        </a>

        <div class="flex flex-column search-column align-v-center ph-2">
            @if(!empty($searchEndpoint))
                <form method="GET" action="{{ $searchEndpoint }}">
                    <div class="flex flex-row align-v-center">
                        <span id="searchIcon" class="flex flex-column flex-auto title text-grey-4 mr-2">
                            <i class="fas fa-search"></i>
                        </span>
                        <div id="searchBox" class="form-group flex flex-column">
                            <input id="searchInput"
                                   type="text"
                                   class="solo text-white"
                                   placeholder="What would you like to learn?"
                                   autocomplete="off">
                        </div>
                    </div>
                </form>
            @endif
        </div>

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
                        <i class="rounded inset-border text-black fas fa-bell flex-center"></i>
                    </div>
                </a>
            </div>
        @endif

        <div class="flex header-button flex-column noselect mr-1 hide-xs-only">
            <a href="{{ $accountUrl }}"
               class="square">
                <div class="pa-1 wrap">
                    <img class="rounded inset-border"
                         src="{{ $userAvatar }}"
                         data-avatar-update="true">
                </div>
            </a>
        </div>

        <div id="menuButton" class="flex flex-column menu noselect bl-grey-4-1" role="button">
            <div class="flex flex-row text-white align-center uppercase">
                <i class="menu-bars-icon"></i>
            </div>
        </div>
    </div>
</header>
<aside id="navSideBar" class="shadow bg-white flex flex-column">
    <section id="userInfo" class="flex flex-column align-center bg-grey-5 pa-3">
        <div class="avatar mb">
            <img class="rounded inset-border"
                 src="{{ $userAvatar }}"
                 data-avatar-update="true">
        </div>
        <div class="mb">
            <h4 class="title text-white">{{ $userName }}</h4>
        </div>

        <a href="{{ $accountUrl }}" class="btn bg-{{ $brand }} inverted text-{{ $brand }}">
            <i class="fas fa-user mr-1"></i> My Profile
        </a>
    </section>
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
                ])
            @endif

        @endforeach
        <div class="flex flex-column spacer"></div>
        <div class="sub-links flex flex-column mt-3">
            <a class="flex flex-row align-v-center text-black ph mv-1" href="{{ $supportUrl }}">Support</a>
            <a class="flex flex-row align-v-center text-black ph mb-1" href="{{ $logoutUrl }}">Logout</a>
        </div>
    </section>
</aside>
<div id="backgroundOverlay"></div>