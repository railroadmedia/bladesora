<div class="flex flex-row">
    <div class="flex flex-column next-prev-button-col mr-1" dusk="previous-lesson">
        @if(!empty($prevLessonUrl))
            <a href="{{ $prevLessonUrl }}"
               data-tooltip="Previous Lesson"
               class="btn bg-{{ $themeColor }} inverted text-{{ $themeColor }}">
                <i class="fas fa-chevron-left"></i>
                <span class="hide-xs-only ml-1">Previous Lesson</span>
            </a>
        @else
            <a class="btn bg-grey-3 inverted text-grey-3 no-events">
                <i class="fas fa-chevron-left"></i>
                <span class="hide-xs-only ml-1">Previous Lesson</span>
            </a>
        @endif
    </div>

    <div class="flex flex-column">
        <div class="flex flex-row">
            @if($hasQAVideo)
                <div class="flex flex-column ph-1">
                    <button id="playQAVideo"
                            data-tooltip="Play QnA Video"
                            class="btn">
                        <span class="qa bg-{{ $themeColor }} inverted text-{{ $themeColor }}">
                            <i class="fas fa-question-circle"></i>
                            <span class="hide-xs-only ml-1">Watch Q&A</span>
                        </span>
                        <span class="lesson bg-{{ $themeColor }} inverted text-{{ $themeColor }}">
                            <i class="fas fa-play"></i>
                            <span class="hide-xs-only ml-1">Watch Lesson</span>
                        </span>
                    </button>
                </div>
            @endif
        </div>
    </div>

    <div class="flex flex-column next-prev-button-col ml-1" dusk="next-lesson">
        @if(!empty($nextLessonUrl))
            <a href="{{ $nextLessonUrl }}"
               class="btn bg-{{ $themeColor }} inverted text-{{ $themeColor }}"
               data-tooltip="Next Lesson">
                <span class="hide-xs-only mr-1">Next Lesson</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        @else
            <a class="btn bg-grey-3 inverted text-grey-3 no-events">
                <span class="hide-xs-only mr-1">Next Lesson</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        @endif
    </div>
</div>