<div id="sidebar" class="{{ $themeColor }} {{ !empty($_COOKIE['collapsed']) ? 'sidebar-collapsed' : '' }}" data-simplebar>
    @isset($header)
        <div class="sidebar-header flex flex-row align-v-center bb-grey-1-1">
            <div id="sidebar-close"><i class="fal fa-times"></i></div>
            <div class="sidebar-header-inner">
                <img src="{{ $header }}">
            </div>
        </div>
    @endisset

    {{-- New Platform Preview Button --}}
    <div class="tw-p-2 tw-pb-0">
        <a  class="tw-btn-primary tw-px-4 tw-w-full tw-border-0 musora-btn tw-wrap"
            href="{{ $newPlatformUrl ?? 'https://www.musora.com/members/' }}"
            target="_blank"
            title="Open Musora in new tab"
            style="background: linear-gradient(45.69deg, rgb(0, 201, 172) 1.54%, rgb(11, 118, 219) 30.83%, rgb(154, 0, 238) 72.12%, rgb(246, 26, 48) 95.24%);">
            <span class="collapsed-text">Musora</span>
            <span class="expanded-text">Try our new platform!</span>
        </a>
    </div>

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
