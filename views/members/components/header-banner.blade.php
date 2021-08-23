<div class="container fluid collapsed-h pv-5 relative bg-black">
    <div class="header-background-container absolute-fill bg-top"
            style="background-image: url({{ _imgix(
                    $backgroundImage,
                    ["q" => 80, "blur" => 40, "w" => 640]
                ) }});" data-ix-bg="{{ $backgroundImage }}"
    ></div>
    <div class="header-background-container absolute-fill bg-top hide-lg-down" style="background: linear-gradient(to left, #000 0%, transparent 10%, transparent 90%, #000 100%)"></div>
    <div class="header-gradient-overlay absolute-fill {{ $brand }}"></div>
    <div class="container relative">
        <div class="flex flex-row align-center">
            {{ $content }}

            @if(empty($hideUser))
                <div class="tw-flex-col tw-items-center tw-hidden sm:tw-flex">
                    <div class="header-avatar user-avatar rounded tw-bg-black tw-pb-0 tw-w-32
                                {{ in_array($currentUser['access_level'], ['coach', 'edge', 'lifetime', 'team', 'guitar', 'piano']) ? 'subscriber' : '' }}
                                {{ $brand }}
                                {{ $currentUser['access_level'] }}"
                    >
                        <a href="{{ $profileUrl }}" class="no-decoration">
                            <img
                                class="rounded inset-border"
                                src="{{ _imgix(
                                    $currentUser['avatar'],
                                    ["q" => 50, "blur" => 2, "w" => 50, "h" => 50]
                                ) }}"
                                data-ix-src="{{ $currentUser['avatar'] }}"
                            >
                        </a>
                    </div>

                    @if($currentUser['access_level'] !== 'pack')
                        <p class="body dense text-white font-bold text-center uppercase mt-1 text-white">
                            @if($currentUser['access_level'] === 'team')
                                {{ $brand }} Team
                            @elseif ($currentUser['access_level'] === 'coach')
                                COACH
                            @else
                                Level {{ $currentUser['level_number'] }}
                            @endif
                        </p>

                        @if($currentUser['access_level'] !== 'team')
                            <p class="body dense text-white font-compressed text-center">
                                {{ $currentUser['xp'] }} XP
                            </p>
                        @endif
                        
                        @isset($userActions)
                            {{ $userActions }}
                        @endif
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
