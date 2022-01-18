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
                <a href="{{ $allCoachesUrl }}"
                    aria-label="See All Coaches"
                    class="text-{{$brand}} tiny no-decoration nowrap raised-hover pa-1 dense font-bold uppercase corners-10">
                    See All
                </a>
            </div>

            <div class="tw-grid tw-gap-3 tw-grid-cols-2 sm:tw-grid-cols-3 md:tw-grid-cols-4 lg:tw-grid-cols-5 xl:tw-grid-cols-6">
                @foreach($subscribedCoaches->results() as $coach)
                    <a href="{{ $coach->fetch('url','') }}"
                        class="tw-no-underline ">
                        <div class="bg-grey-2 tw-rounded-2xl tw-relative tw-h-64 tw-bg-cover tw-overflow-hidden"
                                style="background-image: url( '{{ $coach->fetch('data.coach_card_image') }}' )"
                        >
                            <div class="tw-absolute tw-w-full tw-bottom-0 tw-left-0 tw-h-2/3 tw-px-1 tw-py-4 tw-flex tw-flex-col"
                                    style="background: linear-gradient(180deg, rgba(0, 0, 23, 0) 17.28%, #000017 100%);"
                            >
                                <h4 class="tw-uppercase tw-mt-auto tw-text-white tw-text-center tw-text-base">
                                    @php
                                        $fullName = $coach->fetch('fields.name');
                                        $exploded = explode(' ', $fullName);
                                        $firstName = array_shift( $exploded );
                                    @endphp
                                    <span class="tw-font-normal">{{ $firstName }}</span><br>
                                    {{ implode($exploded, ' ')}}
                                    </h4>
                            </div>
                            <div class="tw-absolute tw-w-full tw-h-full tw-top-0 tw-left-0 tw-z-10 tw-bg-opacity-0 tw-transition tw-bg-black hover:tw-bg-opacity-25"></div>
                        </div>
                    </a>
                @endforeach
            </div>
            
        </div>
    </section>
@endif