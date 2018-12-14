<div id="instructorInfo" class="container fluid bg-grey-5">
    <div class="container pv-2">
        @if(!empty($contentDescription))
        <div  class="flex flex-row mb-2">
            <div class="flex flex-column text-white">
                <div id="collapsableInfo">
                    <h6 class="body font-bold uppercase">About the Lesson</h6>
                    <div class="body">
                        {!! $contentDescription !!}
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if(!empty($contentChapters))
            <div class="flex flex-row mb-2">
                <div class="flex flex-column text-white">
                    <h6 class="body font-bold uppercase">Chapter Markers</h6>
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
                <div  class="flex flex-row mb-2">
                    <div class="flex flex-column text-white">
                        <div id="collapsableInfo">
                            <h6 class="body font-bold uppercase">About {{ $instructor->fetch('fields.name') }}</h6>
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
        <div id="toggleInstructorInfo" class="text-center bg-x-dark text-white pointer">
            <span class="x-tiny uppercase font-bold">Info</span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>
</div>
