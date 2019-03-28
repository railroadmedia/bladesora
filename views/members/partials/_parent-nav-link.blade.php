<div class="page-link parent flex flex-row flex-wrap body text-black align-v-center"
     data-remain-open="{{ strtolower(str_replace(' ', '-', $page)) }}">
    <span class="page-link parent-button pa-1 bb-grey-2-1 pointer"
          dusk="parent-button-{{ strtolower(str_replace(' ', '-', $page)) }}">
        <i class="no-events {{ $icon }} mr-1 text-{{ $themeColor }}"></i>{{ $page }}

        <i class="no-events fas fa-chevron-down text-grey-2 arrow"></i>
    </span>

    <div class="flex flex-column xs-12 child-links">
        @foreach($children as $page => $info)
            @include('bladesora::members.partials._nav-link', [
                "page" => $page,
                "icon" => $info['icon'],
                "url" => $info['url'],
                "greyed" => true
            ])
        @endforeach
    </div>
</div>