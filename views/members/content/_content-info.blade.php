<div id="instructorInfo" class="container fluid bg-grey-5">
    <div class="container pv-2">
        @if(!empty($lessonList))
            <div class="flex flex-row">
                <h6 class="body font-bold uppercase text-white mb-1">Course Lessons</h6>
            </div>
            <div class="flex flex-row dark-mode mb-3">
                <content-catalogue
                        catalogue-type="list"
                        theme-color="{{ $themeColor }}"
                        :use-theme-color="true"
                        :pre-loaded-content="{{ $lessonList }}"
                        @if(!empty($lockUnowned))
                        :lock-unowned="true"
                        @endif
                        user-id="{{ auth()->id() }}"></content-catalogue>
            </div>
        @endif

        @if(!empty($contentDescription))
            <div  class="flex flex-row mb-3">
                <div class="flex flex-column grow text-white">
                    <div id="collapsableInfo">
                        <h6 class="body font-bold uppercase mb-1">{{ $contentDescriptionHeader ?? 'About the Lesson' }}</h6>
                        <div class="body">
                            {!! $contentDescription !!}
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if(!empty($contentChapters))
            <div class="flex flex-row mb-3">
                <div class="flex flex-column grow text-white">
                    <h6 class="body font-bold uppercase mb-1">Chapter Markers</h6>
                    @foreach($contentChapters as $chapter)
                        <p class="body text-white">
                            <a class="font-bold font-underline"
                               data-jump-to-time="{{ $chapter['chapter_timecode'] }}">{{ gmdate('H:i:s', $chapter['chapter_timecode']) }}</a> - {{ $chapter['chapter_description'] }}
                        </p>
                    @endforeach
                </div>
            </div>
        @endif

        @if(!empty($instructors))
            @foreach($instructors as $instructor)
                <div  class="flex flex-row mb-3">
                    <div class="flex flex-column grow text-white">
                        <div id="collapsableInfo">
                            <h6 class="body font-bold uppercase mb-1">About {{ $instructor->fetch('fields.name') }}</h6>
                            <div class="body">
                                {!! $instructor->fetch('data.biography')  !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
<div class="container fluid">
    <div class="flex flex-column align-center">
        <div id="toggleInstructorInfo" class="text-center bg-grey-5 text-white pointer" style="margin-bottom: -20px;">
            <span class="x-tiny uppercase font-bold">Info</span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>
</div>
