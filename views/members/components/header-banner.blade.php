<div
    class="container fluid collapsed-h pv-5 relative bg-black bg-center"
    style="background-image:url({{ $backgroundImage }});"
>
    <div class="header-gradient-overlay absolute-fill"></div>
    <div class="container relative">
        <div class="flex flex-row align-center">
            {{ $content }}

            @if(empty($hideUser))
                <div class="header-avatar flex flex-column hide-xs-only">
                    <div class="user-avatar
                                {{ in_array($currentUser['access_level'], ['edge', 'lifetime', 'team', 'guitar', 'piano']) ? 'subscriber' : '' }}
                                {{ $brand }}
                                {{ $currentUser['access_level'] }}"
                    >
                        <a href="{{ $profileUrl }}" class="no-decoration">
                            <img class="rounded inset-border" src="{{ $currentUser['avatar'] }}">
                        </a>
                    </div>

                    @if($currentUser['access_level'] !== 'pack')
                        <p class="body dense text-white font-bold text-center uppercase mt-1 text-{{ $brand }}">
                            @if($currentUser['access_level'] === 'team')
                                {{ $brand }} Team
                            @else
                                {{ $currentUser['xp_rank'] }}
                            @endif
                        </p>

                        @if($currentUser['access_level'] !== 'team')
                            <p class="body dense text-white font-compressed text-center">{{ $currentUser['xp'] }} XP</p>
                        @endif
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>