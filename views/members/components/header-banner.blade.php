<div
    class="container fluid collapsed-h pv-5 relative bg-black bg-center"
    style="background-image:url({{ imgix($backgroundImage, ["q" => 80, "blur" => 40, "w" => 600, "fit" => "crop", "auto" => "format"]) }});"
    data-ix-bg="{{ $backgroundImage }}"
>
    <div class="header-gradient-overlay absolute-fill {{ $brand }}"></div>
    <div class="container relative">
        <div class="flex flex-row align-center">
            {{ $content }}

            @if(empty($hideUser))
                <div class="header-avatar flex flex-column hide-xs-only">
                    <div class="user-avatar rounded bg-black
                                {{ in_array($currentUser['access_level'], ['edge', 'lifetime', 'team', 'guitar', 'piano']) ? 'subscriber' : '' }}
                                {{ $brand }}
                                {{ $currentUser['access_level'] }}"
                    >
                        <a href="{{ $profileUrl }}" class="no-decoration">
                            <img
                                class="rounded inset-border"
                                src="{{ imgix($currentUser['avatar'], ["q" => 50, "blur" => 2, "w" => 50, "h" => 50, "fit" => "crop", "auto" => "format"]) }}"
                                data-ix-src="{{ $currentUser['avatar'] }}"
                            >
                        </a>
                    </div>

                    @if($currentUser['access_level'] !== 'pack')
                        <p class="body dense text-white font-bold text-center uppercase mt-1 text-white">
                            @if($currentUser['access_level'] === 'team')
                                {{ $brand }} Team
                            @else
                                Level {{ $currentUser['level_number'] }}
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
