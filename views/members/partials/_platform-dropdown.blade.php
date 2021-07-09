@php
    $platforms = [
        [
            "name" => "drumeo",
            "img" => "https://musora-ui.s3.amazonaws.com/logos/drumeo.svg",
            "membersURL" => "https://drumeo.com/members/",
            "offerURL" => "https://drumeo.com/",
            "isMember" => true   
        ],  
        [
            "name" => "pianote",
            "img" => "https://musora-ui.s3.amazonaws.com/logos/pianote.svg",
            "offerURL" => "https://pianote.com/members/",
            "membersURL" => "https://pianote.com/",
            "isMember" => true   
        ], 
        [
            "name" => "guitareo",
            "img" => "https://musora-ui.s3.amazonaws.com/logos/guitareo.svg",
            "membersURL" => "https://guitareo.com/members/",
            "offerURL" => "https://guitareo.com/",
            "isMember" => false   
        ], 
        [
            "name" => "singeo",
            "img" => "https://musora-ui.s3.amazonaws.com/logos/singeo.svg",
            "membersURL" => "https://singeo.com/members/",
            "offerURL" => "https://singeo.com/",
            "isMember" => false   
        ]  
    ]
@endphp

<div class="tw-relative tw-ml-1 tw-items-center tw-inline-flex">
    <button role="button" class="tw-bg-transparent tw-border-none tw-cursor-pointer tw-transform tw-transition-all" id="platformDropdownTrigger" tabindex="0">
        <span class="tw-sr-only">Got to another one of our platforms</span>
        <i class="fas fa-chevron-down tw-text-{{ $themeColor }} tw-text-sm"></i>
    </button>
    <div class="tw-rounded-b-lg tw-bg-dm-dark-blue-3 tw-right-0 tw-top-full tw-absolute tw-z-100 tw-w-44 tw-max-h-0 tw-overflow-hidden tw-transition-all" id="platformDropdown">
        <p class="tw-uppercase tw-text-gray-200 tw-my-2 tw-whitespace-nowrap tw-px-4 tw-tracking-wide" style="font-size: 9px;">Choose A Platform</p>
        <ul class="tw-pl-0 tw-pb-3">
            @foreach ($platforms as $platform)
                @if ($platform['name'] != $themeColor )
                    <li>
                        <a href="{{ $platform['isMember'] ? $platform['membersURL'] : $platform['offerURL'] }}" 
                           target="{{ $platform['isMember'] ? '' : '_blank' }}" 
                           title="Go to {{ $platform['name'] }}" 
                           class="tw-py-2 tw-px-4 tw-flex tw-items-center hover:tw-bg-dm-dark-blue-1"
                        >
                            <img src="{{ $platform['img'] }}" class="{{ $platform['name'] == 'singeo' ? 'tw-w-14' : 'tw-w-16' }}" alt="{{ $platform['name'] }} logo">
                            <div class="tw-ml-auto">
                                @if ( $platform['isMember'] == true )
                                    <i class="far fa-chevron-right tw-text-gray-200" style="font-size: 9px"></i>
                                @else
                                    <i class="far fa-lock-alt tw-text-gray-200" style="font-size: 10px"></i>
                                @endif
                            </div>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>