<div id="sidebar" class="{{ !empty($_COOKIE['collapsed']) ? 'sidebar-collapsed' : '' }}" data-simplebar>
    @isset($header)
        <div class="sidebar-header flex flex-row align-v-bottom bb-grey-1-1">
            <div id="sidebar-close"><i class="fal fa-times"></i></div>
            <div class="sidebar-header-inner">
                <img src="{{ $header }}">
            </div>
        </div>
    @endisset
    @foreach($sections as $section)
        <div class="sidebar-section {{ $loop->last ? '' : 'bb-grey-1-1' }}">
            @isset($section['header'])
                <h5 class="sidebar-section-title font-bold dense pl-3">
                    <a href="{{ $section['header']['url'] }}">{{ $section['header']['title'] }}</a>
                </h5>
            @endisset
            @include('bladesora::members.partials._sidebar_links_section', [
                'sectionLinks' => $section['links'],
                'themeColor' => $themeColor,
            ])
        </div>
    @endforeach
</div>
