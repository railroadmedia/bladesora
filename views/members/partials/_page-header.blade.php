<header id="pageHeader" class="container fluid pa-3" style="background-image:url({{ $backgroundImage }});">
    <div class="container">
        <div class="flex flex-row">
            <div class="flex flex-column pr-2">
                <h1 class="heading text-white mb-2">
                    <i class="fas fa-home text-{{ $brand }}"></i> Home
                </h1>
                <p class="body text-white">{{ $pageDescription }}</p>
            </div>
            <div class="flex flex-column sm-2 hide-xs-only"></div>
            <div class="header-avatar flex flex-column hide-xs-only">
                <div class="square">
                    <img class="rounded" src="https://placehold.it/250x250">
                </div>
            </div>
        </div>
    </div>
</header>