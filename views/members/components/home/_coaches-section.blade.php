@if($hasSubscribedCoaches)
    <section class="flex flex-row tw-mb-6 md:tw-mb-8">
        <div class="flex flex-column grow">

            <div class="flex flex-row align-v-center pv-2">
                <span class="rounded bg-{{$brand}} text-white icon-bg-circle body mr-1">
                    <i class="fas fa-gem"></i>
                    <!-- <svg width="19" height="19" aria-hidden="true" focusable="false" fill="white">
                        <use href="#whistle"></use>
                    </svg> -->
                </span>
                <h2 class="heading capitalize grow">
                    <a
                        href="{{ $subscribedCoachesUrl }}"
                        class="text-black font-no-underline"
                    >Subscribed Coaches</a>
                </h2>
                <a href="{{ $subscribedCoachesUrl }}"
                    aria-label="See All Coaches"
                    class="text-{{$brand}} tiny no-decoration nowrap raised-hover pa-1 dense font-bold uppercase corners-10">
                    See All
                </a>
            </div>

            <div class="tw-grid tw-gap-3 tw-grid-cols-2 sm:tw-grid-cols-3 md:tw-grid-cols-4 lg:tw-grid-cols-5 xl:tw-grid-cols-6">
                @foreach($subscribedCoaches->results() as $coach)
                    <a href="{{ $coach->fetch('url','') }}"
                        class="tw-no-underline ">
                        <div class="tw-flex tw-bg-cover tw-bg-top tw-h-64 tw-relative tw-bg-gray-200 tw-overflow-hidden tw-rounded-lg lg:tw-rounded-xl tw-no-underline tw-text-white"
                                style="background-image: url( '{{ $coach->fetch('data.coach_card_image') }}' )"
                        >
                            <div class="tw-flex tw-flex-col tw-mt-auto tw-w-full tw-items-center tw-justify-center tw-h-2/3 tw-px-2 tw-text-center"
                                style="background: linear-gradient(180deg, rgba(1, 5, 15, 0) 0%, #01050F 100%);"
                            >
                                <!-- Coach Name -->
                                <h4 class="tw-uppercase tw-mt-auto tw-leading-tight tw-text-base tw-mb-4 tw-text-center"
                                    style="hyphens: auto">
                                    @php
                                        $fullName = $coach->fetch('fields.name');
                                        $exploded = explode(' ', $fullName);
                                        $firstName = array_shift( $exploded );
                                    @endphp
                                    <span class="">{{ $firstName }}</span><br>
                                    {{ implode($exploded, ' ')}}
                                </h4>
                                <!-- Coach Title -->
                                <p class="tw-text-yellow-400 tw-text-xs tw-mb-4 md:tw-mb-6 tw-uppercase">
                                    {{ $coach->fetch('data.focus_text.value') }}
                                </p>
                            </div>
                            <div class="tw-absolute tw-w-full tw-h-full tw-top-0 tw-left-0 tw-z-10 tw-bg-opacity-0 tw-transition tw-bg-black hover:tw-bg-opacity-25"></div>
                        </div>
                    </a>
                @endforeach
            </div>
            
        </div>
    </section>
@endif