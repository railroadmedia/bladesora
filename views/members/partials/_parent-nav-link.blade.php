<div class="page-link parent flex flex-row flex-wrap body text-black align-v-center"
     data-remain-open="{{ strtolower(str_replace(' ', '-', $page)) }}">
    <div class="page-link parent-button bb-grey-1-1 pointer"
          dusk="parent-button-{{ strtolower(str_replace(' ', '-', $page)) }}">
        @if(!empty($iconClass))
            <div class="page-link-icon"><i class="no-events {{ $iconClass }} text-{{ $themeColor }}"></i></div>{{ $page }}
        @elseif(!empty($iconSvg))
            <div class="page-link-icon"><svg width="20" height="20" aria-hidden="true" focusable="false"><use xlink:href="#{{ $iconSvg }}"></use></svg></div>{{ $page }}
        @else
            {{ $page }}
        @endif
        <i class="no-events far fa-chevron-down arrow"></i>
    </div>

    <div class="flex flex-column xs-12 child-links">
        @foreach($children as $page => $info)
            @include('bladesora::members.partials._nav-link', [
                "page" => $page,
                "iconClass" => $info['iconClass'] ?? null,
                "iconSvg" => $info['iconSvg'] ?? null,
                "url" => $info['url'],
                "greyed" => true
            ])
        @endforeach
    </div>
</div>