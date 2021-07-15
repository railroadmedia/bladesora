@if(isset($platforms) && !empty($platforms))
<div class="tw-relative tw-ml-1 tw-items-center tw-inline-flex tw-bg-inherit">
    <button role="button"
            class="tw-bg-transparent tw-border-none tw-cursor-pointer tw-transform tw-transition-all focus:tw-outline-none"
            id="platformDropdownTrigger" 
            tabindex="0"
    >
        <span class="tw-sr-only">Got to another one of our platforms</span>
        <i class="fas fa-chevron-down tw-text-{{ $themeColor }} tw-text-sm"></i>
    </button>
    <div class="tw-rounded-b-lg tw-bg-inherit tw-right-0 tw-top-full tw-absolute tw-z-100 tw-w-44 tw-max-h-0 tw-overflow-hidden tw-transition-all" id="platformDropdown">
        <p class="tw-uppercase tw-text-gray-200 tw-my-2 tw-whitespace-nowrap tw-px-4 tw-tracking-wide" style="font-size: 9px;">Choose A Platform</p>
        <ul class="tw-pl-0 tw-pb-3">
            @foreach ($platforms as $platform)
                @if ($platform['name'] != $themeColor )
                    <li>
                        <a href="{{ $platform['isMember'] ? $platform['membersURL'] : $platform['offerURL'] }}" 
                           target="{{ $platform['isMember'] ? '' : '_blank' }}" 
                           title="Go to {{ $platform['name'] }}" 
                           class="tw-py-2 tw-px-4 tw-flex tw-items-center hover:tw-bg-opacity-10 hover:tw-bg-white"
                        >
                            <img src="{{ $platform['img'] }}" alt="{{ $platform['name'] }} logo"
                                    style=" @if ( $platform['name'] == 'drumeo' )
                                                padding:0 0 10px;
                                            @elseif ( $platform['name'] == 'pianote' )
                                                padding:3px 0;
                                            @elseif ( $platform['name'] == 'guitareo' )
                                                padding:4px 0 0;
                                            @elseif ( $platform['name'] == 'singeo' )
                                                padding:5px 0 1px;
                                            @endif ">
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
@endif