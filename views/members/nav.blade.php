<header id="nav" class="container fluid collapsed shadow">
    <div class="flex flex-row">
        <div class="flex flex-column logo ph align-center">
            <img src="{{ $logo }}">
        </div>

        <div class="flex flex-column">

        </div>

        <div id="menuButton" class="flex flex-column menu noselect">
            <div class="flex flex-row text-white align-center uppercase">
                <span class="title hide-sm-down">Menu</span> <i class="menu-icon"></i>
            </div>
        </div>
    </div>
</header>
<aside id="navSideBar" class="shadow bg-white">
    <section id="userInfo" class="flex flex-column align-center pa-3">
        <div class="avatar mb">
            <div class="square">
                <img class="rounded" src="https://placehold.it/250x250">
            </div>
        </div>
        <div class="mb">
            <h4 class="title text-white">Curtis Conway</h4>
        </div>

        <a href="" class="btn bg-{{ $brand }} inverted text-{{ $brand }}">
            <i class="fas fa-user mr-1"></i> My Profile
        </a>
    </section>
    <section id="pageLinks">
        @foreach($links as $page => $info)
            @include('bladesora::members.partials._nav-link')
        @endforeach
    </section>
</aside>