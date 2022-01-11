<!-- Main Page Links -->
<section class="tw-flex tw-flex-wrap tw-justify-center xl:tw-grid xl:tw-grid-cols-3 xl:tw-gap-2 tw-mb-6">
    <!-- Method -->
    <div class="md:tw-px-1 xl:tw-px-0 tw-mb-2 xl:tw-mb-0 tw-w-full xl:tw-w-full">
        <div class="tw-bg-gray-900 tw-h-full tw-bg-cover tw-bg-center tw-text-white tw-text-center tw-rounded-lg tw-p-8" 
             style="background-image: url('{{ imgix($methodBgImg, ['w' => 960]) }} ');"
        >
            <img class="tw-mx-auto tw-mb-4 tw-block" src="{{ $methodIcon }}"
                alt="{{ ucfirst($brand) }} Method Icon" />
            <h3 class="tw-mb-4 tw-text-xl">Step-by-step curriculum.</h3>
            <p class="tw-mb-4 tw-text-sm">Exclusive curriculum so you'll always know what to work on for maximum results.
            </p>
            <a href="{{ $methodUrl }}" title="Go to Methods Page"
                class="tw-btn tw-btn-primary tw-transition tw-bg-{{ $brand }} tw-px-8 tw-w-full tw-mb-3 hover:tw-bg-{{ $brand }}-600">
                @if ($hasStartedMethod ?? false)
                    Continue Next Lesson <span class="tw-h-full tw-px-1 tw-pb-1">&raquo;</span>
                @else
                    Get Started <span class="tw-h-full tw-px-1 tw-pb-1">&raquo;</span>
                @endif
            </a>
            <i>Level {{ $nextLearningPathLevel }} - {{ $nextLearningPathLessonTitle }} </i>
        </div>
    </div>
    <!-- Songs -->
    <div class="md:tw-px-1 xl:tw-px-0 tw-mb-2 xl:tw-mb-0 tw-w-full md:tw-w-1/2 xl:tw-w-full">
        <div class="tw-bg-gray-900 tw-h-full tw-bg-cover tw-bg-center tw-text-white tw-text-center tw-rounded-lg tw-p-8" style="background-image: url('{{ imgix($songsBgImg, ['w' => 500]) }} ');">
            <img class="tw-mx-auto tw-mb-4 tw-block"
                 style="{{ $brand === 'pianote' ? 'filter: hue-rotate(211deg) brightness(1.8);' : '' }}" 
                 src="{{ $songsLogo }}" 
                 alt="Songs Icon" 
            />
            <h3 class="tw-mb-4 tw-text-xl">Popular songs in all genres.</h3>
            <p class="tw-mb-4 tw-text-sm">Full transcriptions, loops, and practice tools for music by popular bands of
                all eras and styles.</p>
            <a href="/members/lessons/songs" title="Go to Lessons Page"
                class="tw-btn tw-btn-primary tw-transition tw-px-8 tw-w-full {{ $brand === 'pianote' ? '' : 'tw-bg-pink-600 hover:tw-bg-pink-700' }}"
                style="{{ $brand === 'pianote' ? 'background-color: rgb(23, 209, 250)' : '' }}"
            >
                Go to Songs <span class="tw-h-full tw-px-1 tw-pb-1">&raquo;</span>
            </a>
        </div>
    </div>
    <!-- Coaches -->
    <div class="md:tw-px-1 xl:tw-px-0 tw-mb-2 xl:tw-mb-0 tw-w-full md:tw-w-1/2 xl:tw-w-full">
        <div class="tw-bg-gray-900 tw-h-full tw-bg-cover tw-bg-center tw-text-white tw-text-center tw-rounded-lg tw-p-8" style="background-image: url('{{ imgix($coachCardBg, ['w' => 500]) }} ');">
            <img class="tw-mx-auto tw-mb-4 tw-block" src="{{ $coachCardIcon }}" alt="Coaches Icon" />
            <h3 class="tw-mb-4 tw-text-xl">Learn with the legends.</h3>
            <p class="tw-mb-4 tw-text-sm">{{ $coachCardDescription }}</p>
            <a href="/members/coaches" title="Go to Coaches Page"
                class="tw-btn tw-btn-primary tw-transition tw-bg-yellow-500 tw-px-8 tw-w-full hover:tw-bg-yellow-600">
                Go to Coaches <span class="tw-h-full tw-px-1 tw-pb-1">&raquo;</span>
            </a>
        </div>
    </div>
</section>
