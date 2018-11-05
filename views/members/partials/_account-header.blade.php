<div id="pageHeader" class="container fluid pv-4" style="background-image:url({{ $backgroundImage }});">
    <div class="container">
        <div class="flex flex-row align-center account-header">
            <div class="header-avatar flex flex-column">
                <div class="user-avatar
                                {{ in_array($currentUser['access_level'], ['team', 'edge', 'lifetime']) ? 'subscriber' : '' }}
                {{ $brand }}
                {{ $currentUser['access_level'] }}">
                    <img class="rounded inset-border"
                         data-avatar-update="true"
                         src="{{ $currentUser['avatar'] }}">
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
                        Drumeo Team
                    @else
                        {{ $currentUser['xp_rank'] }}
                    @endif
                </p>

                @if(!$currentUser['access_level'] === 'team')
                    <p class="heading dense text-white font-regular font-compressed text-center">{{ $currentUser['xp'] }} XP</p>
                @endif
            </div>
        </div>
    </div>
</div>