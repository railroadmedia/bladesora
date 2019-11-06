<div class="container bg-{{ $themeColor }}">
    <div class="content-progress flex flex-row flex-wrap pv-3">
        <div class="flex flex-column xs-12 sm-10">
            <div class="flex flex-row trophy-progress-bar bg-white mr-2 {{ $progress === 100 ? 'complete' : '' }}">
                <div class="flex flex-column trophy-progress-cutoff bg-{{ $themeColor }} inverted relative">
                    <span class="progress-border ba-white-5 absolute-fill"></span>
                    <span
                        data-current-progress="{{ $progress }}"
                        class="trophy-progress relative bg-{{ $themeColor }}"
                        style="transform:translateX({{ $progress - 100 }}%);"
                    >
                        <span class="progress-percent body font-bold text-white
                                    {{ $progress > 50 ? 'text-white' : 'text-drumeo right'  }}">
                            {{ round($progress) }}%
                        </span>
                    </span>
                </div>
                <div class="flex flex-column align-center trophy ph-2 title">
                    <div class="flex flex-row text-{{ $themeColor }} align-v-center dense body font-bold nowrap">
                        <i class="fas fa-trophy text-{{ $themeColor }}"></i>
                        @if(!empty($xpAmount))
                        &nbsp;&nbsp;{{ $xpAmount }} XP
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-column xs-12 sm-2">
            @if(empty($showCompleteButton))
                <a href="{{ $progress === 100 ? $backButton['url'] : $nextLessonUrl }}"
                   class="btn bg-white bg-white inverted text-white
                   {{ $contentType === 'learning-path' && $progress < 100 ? 'start-learning-path' : '' }}">
                    @if($progress > 0 && $progress < 100)
                        Next Lesson &raquo;
                    @elseif($progress === 100)
                        {!! $backButton['text'] !!}
                    @else
                        Start First Lesson
                    @endif
                </a>
            @else
                <button class="btn completeButton
                               {{ $isCompleted ? 'is-complete' : '' }}"
                        dusk="master-complete-button"
                        data-tooltip="Mark Lesson as Complete"
                        data-brand="{{ $brand }}"
                        data-content-id="{{ $contentId }}">

                    <span class="incompleted bg-white inverted text-white">
                        <i class="fas fa-check mr-1"></i> Mark as Complete
                    </span>

                    <span class="completed bg-white text-{{ $themeColor }}">
                        <i class="fas fa-check mr-1"></i>Completed
                    </span>
                </button>
            @endif
        </div>
    </div>
</div>
