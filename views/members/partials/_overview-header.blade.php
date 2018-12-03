<header id="pageHeader" class="container fluid pv-4" style="background-image:url({{ $backgroundImage }});">
    <div class="container collapsed">
        <div class="flex flex-row">
            @if(!empty($avatarImage))
                <div class="header-avatar flex flex-column hide-xs-only">
                    <div class="square">
                        <img class="rounded inset-border" src="{{ $avatarImage }}">
                    </div>
                </div>
            @endif

            <div class="flex flex-column ph grow">
                <h2 class="title uppercase text-{{ $themeColor }}">
                    {{ str_replace('-', ' ', ucwords($overviewType)) }}
                    @if(!empty($difficulty))
                        -
                        <span class="font-light">{{ $difficulty }}</span>
                    @endif
                </h2>
                <h1 class="heading text-white mb-2">{{ $pageTitle }}</h1>
                <div class="body text-white">
                    {!! $pageDescription !!}
                </div>

                {{ $interactionSlot }}
            </div>
            <div class="flex flex-column sm-2 hide-xs-only"></div>
        </div>
    </div>
</header>