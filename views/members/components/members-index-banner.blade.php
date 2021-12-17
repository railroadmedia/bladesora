@if(isset($coachOfTheMonth))
    <section class="tw-bg-dm-dark-blue-2 tw-relative tw-flex tw-w-full tw-text-white tw-bg-no-repeat tw-bg-contain tw-bg-right-top">
        <div class="container tw-z-10 tw-py-10 tw-w-full tw-bg-gradient-to-r tw-from-dm-dark-blue-2 ">
            <h2 class="tw-mb-2 tw-uppercase tw-text-base tw-text-drumeo-200 leading-none tw-font-bold">
                Coach Of the Month
            </h2>
            <h1 class="tw-mb-4 tw-text-5xl tw-uppercase">
                @php
                    $fullName = $coachOfTheMonth->fetch('fields.name');
                    $exploded = explode(' ', $fullName);
                    $firstName = array_shift( $exploded );
                @endphp
                <span class="tw-font-normal">{{ $firstName }}</span>
                {{ implode($exploded, ' ')}}
            </h1>
            <p class="tw-mb-6 tw-max-w-lg tw-text-base tw-leading-7">{!! $coachOfTheMonth->fetch('data.short_bio','') !!}</p>
            <div class="tw-flex">
                <a href="{{ $coachOfTheMonth->fetch('url','') }}" class="tw-btn tw-btn-primary tw-transition tw-bg-drumeo hover:tw-bg-drumeo-600 tw-mr-4">See Coach</a>
                <button class="tw-btn tw-btn-secondary tw-transition hover:tw-bg-opacity-10 hover:tw-bg-white"
                        data-open-modal="coach-trailer"
                >
                    Watch Trailer
                </button>
            </div>
        </div>  
        <!-- BG Image -->
        <div class="tw-w-1/2 tw-absolute tw-right-0 tw-top-0 tw-h-full tw-bg-cover tw-bg-top tw-bg-no-repeat tw-hidden md:tw-block" style="background-image: url( {{ $coachOfTheMonth->fetch('coach_top_banner_image') }} );">
            <div class="tw-w-32 tw-h-full tw-bg-gradient-to-r tw-from-dm-dark-blue-2 tw-to-transparent"></div>
        </div>
    </section>

    <!-- Video Modal -->
    <div id="coach-trailer" class="modal">
        <div class="flex flex-column corners-3">
            <div class="tw-w-full tw-relative" style="padding-bottom: 56.25%;">
                <iframe class="tw-absolute tw-w-full tw-h-full reset-on-close" 
                        src="//player.vimeo.com/video/495414119?autoplay=1" 
                        data-lazy-load-url="//player.vimeo.com/video/495414119?autoplay=1" 
                        frameborder="0" 
                        allowfullscreen="" 
                        allow="">
                </iframe>
            </div>
        </div>
    </div>
@endif