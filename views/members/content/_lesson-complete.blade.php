<div
    id="lessonCompleteModal"
    class="modal"
>
    <div class="flex flex-column">
        <div class="flex flex-row bb-grey-4-1 pv-3">
            <div class="flex flex-column">
                <h1 class="display uppercase text-center text-white mb-2">
                    <i class="fas fa-check-circle text-{{ $themeColor }} mr-1"></i>
                    Complete
                </h1>

                <p class="body text-white text-center mb-2">
                    Congratulations you completed <strong>{{ $lessonContent->fetch('fields.title') }}!</strong>
                </p>

                <h2 class="heading text-white text-center uppercase">
                    You earned {{ $lessonContent->fetch('xp_bonus', 0) }} XP
                </h2>
            </div>
        </div>

        <div class="flex flex-row pv-3 flex-wrap single-col dark-mode">
            <div class="flex flex-column xs-12 sm-6">
                <p class="body text-center text-grey-4 mb-2">
                    Completed...
                </p>

                <content-catalogue
                    catalogue-type="grid"
                    theme-color="{{ $themeColor }}"
                    :use-theme-color="true"
                    :pre-loaded-content="{{ $thisLessonJson }}"
                    @if(!empty($lockUnowned))
                    :lock-unowned="true"
                    @endif
                    user-id="{{ auth()->id() }}"
                ></content-catalogue>
            </div>

            <div class="flex flex-column xs-12 sm-6">
                <p class="body text-center text-grey-4 mb-2">
                    Up Next...
                </p>

                <content-catalogue
                    catalogue-type="grid"
                    theme-color="{{ $themeColor }}"
                    :use-theme-color="true"
                    :pre-loaded-content="{{ $nextLessonJson }}"
                    @if(!empty($lockUnowned))
                    :lock-unowned="true"
                    @endif
                    user-id="{{ auth()->id() }}"
                ></content-catalogue>
            </div>
        </div>
    </div>
</div>