<header id="pageHeader" class="container fluid pv-4" style="background-image:url({{ $backgroundImage }});">
    <div class="container">
        <div class="flex flex-row">
            <div class="flex flex-column grow">
                @if(!empty($pageType))
                    <p class="body text-{{ $brand }} font-bold uppercase">{{ $pageType }}</p>
                @endif

                <h1 class="heading text-white mb-2">
                    @if(!empty($pageIcon))
                        <i class="{{ $pageIcon }} text-{{ $brand }}"></i>
                    @endif

                    {{ $pageTitle }}
                </h1>
                <p class="body text-white">{{ $pageDescription }}</p>


                {{ $interactionSlot }}
            </div>
            <div class="flex flex-column sm-2 hide-xs-only"></div>
            <div class="header-avatar flex flex-column hide-xs-only">
                <div class="square">
                    <img class="rounded inset-border" src="{{ $avatarImage }}">
                </div>
            </div>
        </div>
    </div>
</header>