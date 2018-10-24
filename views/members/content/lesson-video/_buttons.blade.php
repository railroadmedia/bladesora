<div class="flex flex-row mv-3">
    <div class="flex flex-column sq-btn-col mr-1">
        @if(!empty($prevLessonUrl))
            <a href="{{ $prevLessonUrl }}"
               data-tooltip="Previous Lesson"
               class="btn bg-{{ $themeColor }} inverted text-{{ $themeColor }}">
                <i class="fas fa-chevron-left"></i>
            </a>
        @else
            <a class="btn bg-grey-3 inverted text-grey-3 no-events">
                <i class="fas fa-chevron-left"></i>
            </a>
        @endif
    </div>

    <div class="flex flex-column">
        <div class="flex flex-row">

            @if($hasQAVideo)
                <div class="flex flex-column ph-1 xs-6">
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

            <div class="flex flex-column ph-1 {{ $hasQAVideo ? 'xs-6' : '' }}">
                <button class="btn completeButton
                                        {{ $isCompleted ? 'is-complete' : '' }} {{ $hasQAVideo ? 'mb-1' : '' }}"
                        data-tooltip="Mark Lesson as Complete"
                        data-content-id="{{ $contentId }}">

                                    <span class="incompleted bg-{{ $themeColor }} inverted text-{{ $themeColor }}">
                                        <i class="fas fa-check"></i>
                                        <span class="{{ $hasQAVideo ? 'hide-xs-only' : '' }} ml-1">Mark as Complete</span>
                                    </span>

                    <span class="completed bg-{{ $themeColor }} text-white">
                                        <i class="fas fa-check"></i>
                                        <span class="{{ $hasQAVideo ? 'hide-xs-only' : '' }} ml-1">Completed</span>
                                    </span>
                </button>
            </div>
        </div>
    </div>

    <div class="flex flex-column sq-btn-col ml-1">
        @if(!empty($nextLessonUrl))
            <a href="{{ $nextLessonUrl }}"
               class="btn bg-{{ $themeColor }} inverted text-{{ $themeColor }}"
               data-tooltip="Next Lesson">
                <i class="fas fa-chevron-right"></i>
            </a>
        @else
            <a class="btn bg-grey-3 inverted text-grey-3 no-events">
                <i class="fas fa-chevron-right"></i>
            </a>
        @endif
    </div>
</div>