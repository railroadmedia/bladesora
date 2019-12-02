<div
    id="pageHeader"
    class="container fluid pv-4 relative"
    dusk="profile-header"
    style="background-image:url({{ imgix($backgroundImage, ["q" => 80, "blur" => 40, "w" => 600, "fit" => "crop", "auto" => "format"]) }});"
    data-ix-bg="{{ $backgroundImage }}"
>
    <div class="header-gradient-overlay absolute-fill {{ $brand }}"></div>
    <div class="container relative">
        <div class="flex flex-row align-center account-header">
            <div class="header-avatar flex flex-column">
                <div class="user-avatar
                        {{ in_array($currentUser['access_level'], ['edge', 'lifetime', 'team', 'guitar', 'piano']) ? 'subscriber' : '' }}
                        {{ $brand }}
                        {{ $currentUser['access_level'] }}">
                    <a @if(!empty($accountUrl)) href="{{ $accountUrl }}" @endif
                       class="no-decoration">
                        <img
                            class="rounded inset-border"
                            src="{{ imgix($currentUser['avatar'], ["q" => 50, "blur" => 2, "w" => 50, "h" => 50, "fit" => "crop", "auto" => "format"]) }}"
                            data-ix-src="{{ $currentUser['avatar'] }}"
                        >
                    </a>
                </div>
            </div>
            <div class="flex flex-column user ph-3 mv-3">
                <h1 class="heading text-white flex flex-row align-v-center">
                    @if(!empty($countryCode))
                        <span class="flag flag-{{ strtolower($countryCode) }}"></span>
                    @endif
                    
                    {{ $userName }}
                </h1>
                <p class="body text-white uppercase font-light">
                    {{ $appName }} Member Since {{ \Carbon\Carbon::parse($memberSince)->format('Y') }}
                </p>
            </div>
            @if($currentUser['access_level'] !== 'pack')
                <div class="flex flex-column flex-auto xp-stats">
                    <p class="heading dense text-white font-bold font-compressed text-center uppercase mt-1 text-{{ $brand }}" style="margin-bottom:-10px;">
                        @if($currentUser['access_level'] === 'team')
                            {{ $appName }} Team
                        @else
                            {{ $currentUser['xp_rank'] }}
                        @endif
                    </p>

                    @if($currentUser['access_level'] !== 'team')
                        <p class="heading dense text-white font-regular font-compressed text-center">{{ $currentUser['xp'] }} XP</p>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>