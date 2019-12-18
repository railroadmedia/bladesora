<div class="container bg-{{ $themeColor }}">
    <div class="content-progress flex flex-row flex-wrap pv-3">
        @if(!empty($labelText))
            <div class="flex flex-column left-column align-v-center">
                <h3 class="display text-white nowrap">
                    {{ $labelText }}
                </h3>
            </div>
        @endif

        <div class="flex flex-column">
            <div class="flex flex-row trophy-progress-bar bg-white mr-2 {{ $isCompleted ? 'complete' : '' }}">
                <div class="flex flex-column trophy-progress-cutoff bg-{{ $themeColor }} inverted relative">
                    <span class="progress-border ba-white-5 absolute-fill"></span>
                    <span
                        data-current-progress="{{ $progress }}"
                        class="trophy-progress relative bg-{{ $themeColor }}"
                        style="transform:translateX({{ $progress - 100 }}%);"
                    >
                        <span class="progress-percent body font-bold text-white
                                    {{ $progress > 50 ? 'text-white' : 'right text-' . $themeColor  }}">
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

        <div class="flex flex-column right-column">
            @if(empty($showCompleteButton))
                <a href="{{ $isCompleted ? $backButton['url'] : $nextLessonUrl }}"
                   class="btn bg-white bg-white inverted text-white">
                    @if(!$isCompleted)
                        @if($isStarted)
                            Next Lesson &raquo;
                        @else
                            Start First Lesson
                        @endif
                    @else
                        {!! $backButton['text'] !!}
                    @endif
                </a>
            @else
                <button class="btn completeButton
                               {{ $isCompleted ? 'is-complete' : '' }}"
                        dusk="master-complete-button"
                        title="Mark Lesson as Complete"
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
