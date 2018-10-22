<div id="pageHeader" class="container fluid pv-4" style="background-image:url({{ $backgroundImage }});">
    <div class="container">
        <div class="flex flex-row align-center account-header">
            <div class="header-avatar flex flex-column">
                <div class="user-avatar
                                {{ in_array($currentUser['access_level'], ['edge', 'lifetime']) ? 'subscriber' : '' }}
                {{ $brand }}
                {{ $currentUser['access_level'] }}">
                    <a href="{{ $profileUrl }}" class="no-decoration">
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
            <div class="flex flex-column flex-auto">
                <p class="subheading dense text-white font-bold text-center uppercase mt-1 text-{{ $brand }}"
                   data-map-xp="{{ $currentUser['xp'] }}"></p>
                <p class="subheading dense text-white font-compressed text-center">{{ $currentUser['xp'] }} XP</p>
            </div>
        </div>
    </div>
</div>