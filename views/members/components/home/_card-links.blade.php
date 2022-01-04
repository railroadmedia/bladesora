<!-- Main Page Links -->
<section class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 xl:tw-grid-cols-3 tw-gap-2 tw-mb-6">
    <!-- Method -->
    <div class="tw-bg-cover tw-bg-center tw-text-white tw-text-center tw-rounded-lg tw-p-8" style="background-image: url('{{ $methodBgImg }}');">
        <img class="tw-mx-auto tw-mb-4 tw-block" src="{{ $methodIcon }}" alt="{{ ucfirst($brand) }} Method Icon"/>
        <h3 class="tw-mb-4 tw-text-xl">Step-by-step curriculum.</h3>
        <p class="tw-mb-4 tw-text-sm">Exclusive curriculum so you'll always know what to work on for maximum results.</p>
        <a href="{{$methodUrl}}" 
           title="Go to Methods Page" 
           class="tw-btn tw-btn-primary tw-transition tw-bg-{{ $brand }} tw-px-8 tw-w-full tw-mb-3 hover:tw-bg-{{ $brand }}-600"
        >
            @if($hasStartedMethod ?? false)
                Continue Next Lesson <span class="tw-h-full tw-px-1 tw-pb-1">&raquo;</span>
            @else
                Get Started <span class="tw-h-full tw-px-1 tw-pb-1">&raquo;</span>
            @endif
        </a>
        <i>Level {{ $nextLearningPathLevel }} - {{$nextLearningPathLessonTitle}} </i>
    </div>
    <!-- Songs -->
    <div class="tw-bg-cover tw-bg-center tw-text-white tw-text-center tw-rounded-lg tw-p-8" style="background-image: url('{{ $songsBgImg }}');">
        <img class="tw-mx-auto tw-mb-4 tw-block" src="{{ $songsLogo }}" alt="Songs Icon"/>
        <h3 class="tw-mb-4 tw-text-xl">Popular songs in all genres.</h3>
        <p class="tw-mb-4 tw-text-sm">Full transcriptions, loops, and practice tools for music by popular bands of all eras and styles.</p>
        <a href="/members/lessons/songs" 
           title="Go to Lessons Page" 
           class="tw-btn tw-btn-primary tw-transition tw-bg-pink-600 tw-px-8 tw-w-full hover:tw-bg-pink-700"
        >
            Go to Songs <span class="tw-h-full tw-px-1 tw-pb-1">&raquo;</span>
        </a>
    </div>
    <!-- Coaches -->
    <div class="tw-bg-cover tw-bg-center tw-text-white tw-text-center tw-rounded-lg tw-p-8" style="background-image: url('{{ $coachCardBg }}');">
        <img class="tw-mx-auto tw-mb-4 tw-block" src="{{ $coachCardIcon }}" alt="Coaches Icon"/>
        <h3 class="tw-mb-4 tw-text-xl">Learn with the legends.</h3>
        <p class="tw-mb-4 tw-text-sm">{{ $coachCardDescription }}</p>
        <a href="/members/coaches" 
           title="Go to Coaches Page" 
           class="tw-btn tw-btn-primary tw-transition tw-bg-yellow-500 tw-px-8 tw-w-full hover:tw-bg-yellow-600"
        >
            Go to Coaches <span class="tw-h-full tw-px-1 tw-pb-1">&raquo;</span>
        </a>
    </div>
</section>