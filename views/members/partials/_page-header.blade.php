<header id="pageHeader" class="container fluid pv-4" style="background-image:url({{ $backgroundImage }});">
    <div class="container">
        <div class="flex flex-row align-v-center">
            <div class="flex flex-column grow">
                @if(!empty($pageType))
                    <p class="body text-{{ $themeColor }} font-bold uppercase">{{ $pageType }}</p>
                @endif

                <h1 class="heading text-white mb-2">
                    @if(!empty($backButtonUrl))
                        <a href="{{ $backButtonUrl }}" class="no-decoration">
                            <i class="fas fa-arrow-circle-left text-grey-2"></i>
                        </a>
                    @else
                        @if(!empty($pageIcon))
                            <i class="{{ $pageIcon }} text-{{ $themeColor }}"></i>
                        @endif
                    @endif

                    {{ $pageTitle }}
                </h1>
            <p class="body text-white">{{ $pageDescription }}</p>
                {{ $interactionSlot }}
            </div>
            <div class="flex flex-column sm-2 hide-xs-only"></div>

            @if(!empty($currentUser))
                <div class="header-avatar flex flex-column hide-xs-only">
                    <div class="user-avatar
                                {{ in_array($currentUser['access_level'], ['edge', 'lifetime', 'team']) ? 'subscriber' : '' }}
                                {{ $brand }}
                                {{ $currentUser['access_level'] }}">
                        <a href="{{ $profileUrl }}" class="no-decoration">
                            <img class="rounded inset-border" src="{{ $currentUser['avatar'] }}">
                        </a>
                    </div>

                        <p class="body dense text-white font-bold text-center uppercase mt-1 text-{{ $brand }}">
                            @if($currentUser['access_level'] === 'team')
                                Drumeo Team
                            @else
                                {{ $currentUser['xp_rank'] }}
                            @endif
                        </p>
                    @if(!$currentUser['access_level'] === 'team')
                        <p class="body dense text-white font-compressed text-center">{{ $currentUser['xp'] }} XP</p>
                    @endif
                </div>
            @endif
        </div>
    </div>
</header>