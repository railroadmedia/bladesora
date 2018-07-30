<header id="pageHeader" class="container fluid pv-4" style="background-image:url({{ $backgroundImage }});">
    <div class="container">
        <div class="flex flex-row">
            <div class="header-avatar flex flex-column hide-xs-only">
                <div class="square">
                    <img class="rounded inset-border" src="{{ $avatarImage }}">
                </div>
            </div>
            <div class="flex flex-column ph grow">
                <h2 class="title uppercase text-{{ $themeColor }}">
                    {{ ucwords($overviewType) }} -
                    <span class="font-light">{{ $difficulty }}</span>
                </h2>
                <h1 class="heading text-white mb-2">{{ $pageTitle }}</h1>
                <p class="body text-white">{{ $pageDescription }}</p>

                {{ $interactionSlot }}
            </div>
            <div class="flex flex-column sm-2 hide-xs-only"></div>
        </div>
    </div>
</header>