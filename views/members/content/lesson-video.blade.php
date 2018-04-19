<div class="container">
    <div class="flex flex-row mb-2">
        <div class="flex flex-column pr-1">
            <h1 class="heading text-white">{{ $lessonTitle }}</h1>
            <h4 class="subtitle text-white uppercase">
                From <a href="{{ $courseUrl }}" class="text-{{ $brand }} no-decoration">
                    {{ $courseTitle }}
                </a>
            </h4>
        </div>

        @if($lessonResources)
            <div class="flex flex-column align-center sq-btn-col">
                <div class="btn bg-white inverted text-white is-dropdown">
                    <i class="fas fa-download no-events"></i>

                    <div class="dropdown-content bg-white shadow tiny text-black">
                        <ul>
                            @foreach($lessonResources as $title => $url)
                                <li>
                                    <a class="no-decoration text-black pa-1"
                                       href="{{ $url }}"
                                       target="_blank"
                                       download>
                                        <i class="fal {{ get_resource_icon($url) }} mr-1" style="width:20px;"></i>  {{ $title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div id="videoPlayer"></div> {{-- Vue will mount the video player component to this element --}}

    <div class="flex flex-row mv-3">
        <div class="flex flex-column sq-btn-col">
            @if(!empty($prevLessonUrl))
                <a href="{{ $prevLessonUrl }}" class="btn bg-{{ $brand }} inverted text-{{ $brand }}">
                    <i class="fas fa-chevron-left"></i>
                </a>
            @endif
        </div>
        <div class="flex flex-column ph-1 align-center">
            <button class="btn">
                <span class="bg-{{ $brand }} inverted text-{{ $brand }}">
                    <i class="fas fa-check mr-1"></i> Mark as Complete
                </span>
            </button>
        </div>
        <div class="flex flex-column sq-btn-col">
            @if(!empty($nextLessonUrl))
                <a href="{{ $nextLessonUrl }}" class="btn bg-{{ $brand }} inverted text-{{ $brand }}">
                    <i class="fas fa-chevron-right"></i>
                </a>
            @endif
        </div>
    </div>
</div>