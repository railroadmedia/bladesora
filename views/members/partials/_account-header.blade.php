<div id="pageHeader" class="container fluid pv-4" style="background-image:url({{ $backgroundImage }});" dusk="profile-header">
    <div class="container">
        <div class="flex flex-row align-center account-header">
            <div class="header-avatar flex flex-column">
                <div class="user-avatar
                        {{ in_array($currentUser['access_level'], ['edge', 'lifetime', 'team', 'guitar', 'piano']) ? 'subscriber' : '' }}
                        {{ $brand }}
                        {{ $currentUser['access_level'] }}">
                    <a @if(!empty($accountUrl)) href="{{ $accountUrl }}" @endif
                       class="no-decoration">
                        <img class="rounded inset-border" src="{{ $currentUser['avatar'] }}">
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
        </div>
    </div>
</div>