<div id="sidebar" class="{{ !empty($_COOKIE['collapsed']) ? 'collapsed' : '' }}" data-simplebar>
    <div class="">
        <div class="sidebar-section main-links-section bb-grey-1-1">
            @include('bladesora::members.partials._sidebar_links_section', [
                'sectionLinks' => $mainLinks,
                'themeColor' => $themeColor,
            ])
        </div>
        <div class="sidebar-section membership-links-section bb-grey-1-1">
            @isset($membershipSectionLink)
                <h5 class="title font-bold dense pl-3">
                    <a href="{{ $membershipSectionLink['url'] }}">{{ $membershipSectionLink['title'] }}</a>
                </h5>
            @endisset
            @include('bladesora::members.partials._sidebar_links_section', [
                'sectionLinks' => $membershipLinks,
                'themeColor' => $themeColor,
            ])
        </div>
        <div class="sidebar-section user-links-section">
            @include('bladesora::members.partials._sidebar_links_section', [
                'sectionLinks' => $userLinks,
                'themeColor' => $themeColor,
            ])
        </div>
    </div>
</div>
