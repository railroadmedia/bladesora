<div id="breadCrumbs" class="container fluid bg-black bb-grey-5-1 collapsed hide-xs-only">
    <div class="container text-grey-2 pa-1 uppercase">
        <div class="flex flex-row">
            @foreach($pages as $index => $page)
                @if($index !== 0)
                    <span class="mh-1 tiny">&raquo;</span>
                @endif

                @if(!empty($page['url']))
                    <a class="tiny text-grey-2 no-decoration" href="{{ $page['url'] }}">
                        {{ ucwords($page['title']) }}
                    </a>
                @else
                    <span class="tiny font-bold">{{ ucwords($page['title']) }}</span>
                @endif
            @endforeach
        </div>
    </div>
</div>