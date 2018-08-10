<div class="container">
    <div class="flex flex-row mb-2">
        <div class="flex flex-column pr-1">
            <h1 class="heading text-white">{{ $lessonTitle }}</h1>
            @if(!empty($courseTitle))
            <h4 class="subtitle text-white uppercase">
                @if($contentType === 'course-part')
                    From <a href="{{ $courseUrl }}" class="text-{{ $themeColor }} no-decoration">
                        {{ $courseTitle }}
                    </a>
                @else
                    With <a href="{{ $courseUrl }}" class="text-{{ $themeColor }} no-decoration">
                        {{ $lessonInstructor }}
                    </a>
                @endif
            </h4>
            @endif
        </div>

        @if($lessonResources)
            <div class="flex flex-column align-center sq-btn-col">
                <div class="btn bg-{{ $themeColor }} inverted text-{{ $themeColor }} is-dropdown">
                    <i class="fas fa-download no-events"></i>

                    <div class="dropdown-content bg-white shadow tiny text-black">
                        <ul>
                            @foreach($lessonResources as $resource)
                                <li>
                                    <a class="no-decoration text-black pa-1"
                                       href="{{ $resource['resource_url'] }}"
                                       target="_blank"
                                       download>
                                        <i class="fas {{ get_resource_icon($resource['resource_url']) }} mr-1" style="width:20px;"></i>  {{ $resource['resource_name'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <div class="flex flex-column align-center sq-btn-col ml-1">
            <button class="addToList btn {{ $isAdded ? 'added' : '' }}"
                 data-content-id="{{ $contentId }}">
                <span class="un-added bg-{{ $themeColor }} inverted text-{{ $themeColor }}">
                    <i class="fas fa-plus"></i>
                </span>

                <span class="is-added bg-{{ $themeColor }} text-white">
                    <i class="fas fa-plus rotate-45"></i>
                </span>
            </button>
        </div>
    </div>

    <div class="flex flex-row flex-wrap">
        <div id="videoContainer" class="flex flex-column">
            @if(!empty($isLive) && $isLive === true)
                <div class="widescreen mb-3">
                    <iframe id="liveVideo" src="https://www.youtube.com/embed/live_stream?channel=UCTjpcu0G-zR8UXXDHShFC_w&rel=0&autoplay=1&playsinline=1&modestthemeColoring=1" frameborder="0" allowfullscreen></iframe>
                </div>
            @else
                <input type="hidden" id="mediaElementPropData"
                       data-theme-color="{{ $themeColor }}"
                       data-video-poster="{{ $videoPoster ?? "" }}"
                       data-video-sources="{{ json_encode($videoSources) }}"
                       data-video-id="{{ $videoId }}"
                       data-current-second="{{ $currentSecond ?? 0 }}"
                       data-progress-state="{{ $progressState }}"
                       data-video-length="{{ $videoLength }}">

                <div class="">
                    <div id="videoPlayer"></div> {{-- Vue will mount the video player component to this element --}}
                </div>

                <div class="flex flex-row mv-3">
                    <div class="flex flex-column sq-btn-col mr-1">
                        @if(!empty($prevLessonUrl))
                            <a href="{{ $prevLessonUrl }}" class="btn bg-{{ $themeColor }} inverted text-{{ $themeColor }}">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        @else
                            <a class="btn bg-grey-3 inverted text-grey-3 no-events">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        @endif
                    </div>

                    <div class="flex flex-column ph-1 align-center">
                        <button class="btn completeButton {{ $isCompleted ? 'is-complete' : '' }}"
                                data-content-id="{{ $contentId }}">

                            <span class="incompleted bg-{{ $themeColor }} inverted text-{{ $themeColor }}">
                                <i class="fas fa-check mr-1"></i> Mark as Complete
                            </span>

                            <span class="completed bg-{{ $themeColor }} text-white">
                                <i class="fas fa-check mr-1"></i> Completed
                            </span>
                        </button>
                    </div>

                    <div class="flex flex-column sq-btn-col ml-1">
                        @if(!empty($nextLessonUrl))
                            <a href="{{ $nextLessonUrl }}" class="btn bg-{{ $themeColor }} inverted text-{{ $themeColor }}">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        @else
                            <a class="btn bg-grey-3 inverted text-grey-3 no-events">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        @endif
                    </div>
                </div>
            @endif

            <div id="emailForm"></div> {{-- Vue will mount the email form component to this element --}}
        </div>

        @if(!empty($isLive) && $isLive === true)
            <div id="chatContainer" class="flex flex-column">
                <div class="inside flex flex-column corners-3 shadow bg-white">
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowtransparency="true" src="{{ $chatrollUrl }}"></iframe>
                </div>
            </div>
        @endif
    </div>
</div>