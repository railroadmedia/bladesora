<header id="nav" class="container fluid collapsed shadow bg-{{ $themeColor }}">
    <div class="flex flex-row">
        <a href="/members" class="flex flex-column logo ph align-center">
            <img src="{{ $logo }}">
        </a>

        <div class="flex flex-column"></div>

        <div id="menuButton" class="flex flex-column menu noselect" role="button">
            <div class="flex flex-row text-white align-center uppercase">
                <i class="menu-bars-icon"></i>
            </div>
        </div>
    </div>
</header>
<aside id="navSideBar" class="shadow bg-white flex flex-column">
    <section id="pageLinks" class="flex flex-column">
        @foreach($links as $page => $info)
            @if(!empty($info['children']))
                @include('bladesora::members.partials._parent-nav-link', [
                    "page" => $page,
                    "icon" => $info['icon'],
                    "children" => $info['children'],
                ])
            @else
                @include('bladesora::members.partials._nav-link', [
                    "page" => $page,
                    "icon" => $info['icon'],
                    "url" => $info['url'],
                ])
            @endif

        @endforeach
        <div class="flex flex-column spacer"></div>
    </section>
</aside>
<div id="backgroundOverlay"></div>