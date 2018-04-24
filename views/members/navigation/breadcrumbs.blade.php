<div id="breadCrumbs" class="container fluid bg-x-dark bb-light-1 collapsed hide-xs-only">
    <div class="container text-light pa-1 uppercase">
        <div class="flex flex-row">
            @foreach($pages as $index => $page)
                @if($index === 0)
                    <i class="icon-learning-paths mh-1 bg-light text-x-dark tiny flex-center flex-auto corners-3"></i>
                @else
                    <span class="mh-1 tiny">&raquo;</span>
                @endif

                @if(!empty($page['url']))
                    <a class="tiny text-light no-decoration" href="{{ $page['url'] }}">
                        {{ ucwords($page['title']) }}
                    </a>
                @else
                    <span class="tiny font-bold">{{ ucwords($page['title']) }}</span>
                @endif
            @endforeach
        </div>
    </div>
</div>