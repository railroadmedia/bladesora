<div class="flex flex-row mb-2">
    <div class="flex flex-column pr-1">
        <h1 class="heading text-white">{{ $lessonTitle }}</h1>
        <h4 class="subtitle text-white uppercase {{ $contentType }}">
        @if(!empty($parentTitle))
            From <a href="{{ $courseUrl }}" class="text-{{ $themeColor }} no-decoration">
                {{ $parentTitle }}
            </a>
        @else
            With
            @foreach($instructors as $index => $instructor)
                {{ $instructor->fetch('fields.name') }}
                @if($index < (count($instructors) - 1)),@endif
            @endforeach
        @endif
        </h4>
    </div>

    @if(!empty($lessonResources))
        <div class="flex flex-column align-center sq-btn-col">
            <div class="btn bg-{{ $themeColor }} inverted text-{{ $themeColor }} is-dropdown"
                 data-tooltip="Download Resources">
                <i class="unopen fas fa-download no-events text-{{ $themeColor }}"></i>
                <i class="open fas fa-download no-events text-white"></i>

                <div class="dropdown-content bg-white shadow tiny text-black">
                    <ul>
                        @foreach($lessonResources as $resource)
                            <li>
                                <a class="no-decoration text-black pa-1"
                                   href="{{ $resource['resource_url'] }}"
                                   target="_blank"
                                   download>
                                    <i class="fas {{ get_resource_icon($resource['resource_url']) }} mr-1" style="width:20px;text-align:center;"></i>  {{ $resource['resource_name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    @if((empty($isLive) || $isLive !== true))
        <div class="flex flex-column align-center sq-btn-col ml-1">
            <button class="addToList btn {{ $isAdded ? 'added' : '' }}"
                    data-tooltip="Add To List"
                    data-content-id="{{ $contentId }}">
                    <span class="un-added bg-{{ $themeColor }} inverted text-{{ $themeColor }}">
                        <i class="fas fa-plus"></i>
                    </span>

                <span class="is-added bg-{{ $themeColor }} text-white">
                        <i class="fas fa-plus rotate-45"></i>
                    </span>
            </button>
        </div>
    @endif
</div>