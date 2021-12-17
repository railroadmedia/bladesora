@if (isset($coachOfTheMonth))
    @component('bladesora::members.components.coach-header-template', [
        'brand'=> 'singeo',
        'backgroundImage'=> $coachOfTheMonth->fetch('coach_top_banner_image'),
        ])
        @slot('topSubitle')
            Coach of The Month
        @endslot
        @slot('title')
            @php
                $fullName = $coachOfTheMonth->fetch('fields.name');
                $exploded = explode(' ', $fullName);
                $firstName = array_shift($exploded);
            @endphp
            <span class="tw-font-normal">{{ $firstName }}</span>
            {{ implode($exploded, ' ') }}
        @endslot
        @slot('shortBio')
            {!! $coachOfTheMonth->fetch('data.short_bio', '') !!}
        @endslot
        @slot('actions')
            <a href="{{ $coachOfTheMonth->fetch('url', '') }}"
                class="tw-btn tw-btn-primary tw-transition tw-bg-drumeo hover:tw-bg-drumeo-600 tw-mr-4">See Coach</a>
            <button class="tw-btn tw-btn-secondary tw-transition hover:tw-bg-opacity-10 hover:tw-bg-white"
                data-open-modal="coach-trailer">
                Watch Trailer
            </button>
        @endslot
    @endcomponent

    <!-- Video Modal -->
    <div id="coach-trailer" class="modal">
        <div class="flex flex-column corners-3">
            <div class="tw-w-full tw-relative" style="padding-bottom: 56.25%;">
                <iframe class="tw-absolute tw-w-full tw-h-full reset-on-close"
                    src="//player.vimeo.com/video/495414119?autoplay=1"
                    data-lazy-load-url="//player.vimeo.com/video/495414119?autoplay=1" frameborder="0"
                    allowfullscreen="" allow="">
                </iframe>
            </div>
        </div>
    </div>
@endif
