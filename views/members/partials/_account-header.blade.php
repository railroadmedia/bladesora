<div id="pageHeader" class="container fluid pv-4" style="background-image:url({{ $backgroundImage }});">
    <div class="container">
        <div class="flex flex-row align-center account-header">
            <div class="header-avatar flex flex-column">
                <img class="rounded inset-border" src="{{ $userAvatar }}">
            </div>
            <div class="flex flex-column user ph-3 mv-3">
                <h1 class="heading text-white flex flex-row align-v-center">
                    <span class="flag flag-ca"></span>
                    {{ $userName }}
                </h1>
                <p class="body text-white uppercase font-light">
                    Recordeo Member Since {{ $memberSince }}
                </p>
            </div>
            <div class="flex flex-column experience hide-xs-only">
                <h1 class="heading text-white">
                    {{ number_format($expAmount) }}
                </h1>
                <p class="body text-white uppercase font-light">
                    Experience Points
                </p>
            </div>
        </div>
    </div>
</div>