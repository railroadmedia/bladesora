@if ($hasFeaturedCoaches)
    <div class="container mt-2 tw-mb-6">
        <div class="flex flex-row align-v-center pv-2  tw-mb-4">
            <span class="rounded bg-{{ $brand }} text-white icon-bg-circle body mr-1">
                <i class="fas fa-star"></i>
            </span>

            <h2 class="heading capitalize grow">
                Featured Coaches
            </h2>
        </div>
        <?php $singleFeaturedCoach = count($featuredCoaches->results()) === 1; ?>
        <div class="tw-grid tw-grid-cols-1 tw-gap-6 {{ $singleFeaturedCoach ? '' : 'md:tw-grid-cols-2' }}">
            @foreach ($featuredCoaches->results() as $featured)
                <?php //dd($featured->dot());
                ?>
                <div class="tw-flex {{ $singleFeaturedCoach ? 'tw-flex-col md:tw-flex-row' : 'tw-flex-col' }}">
                    <!-- Card Thumbnail -->
                    <div class="{{ $singleFeaturedCoach ? 'md:tw-mr-6 md:tw-w-1/2' : 'md:tw-mr-0' }}">
                        <div class="tw-w-full tw-rounded-xl tw-mb-4 tw-bg-cover tw-bg-top tw-h-80 tw-bg-gray-200"
                            style="background-image: url( {{ imgix($featured->fetch('data.coach_featured_image'), ['w' => 720]) }} );">
                            <span class="sr-only">Image of {{ $featured->fetch('fields.name') }}</span>
                        </div>
                    </div>
                    <div
                        class="tw-inline-flex tw-flex-col tw-justify-center {{ $singleFeaturedCoach ? 'md:tw-w-1/2' : '' }}">
                        <!-- Card Header -->
                        <div class="tw-flex tw-items-center tw-mb-4">
                            <!-- Coach Headshot -->
                            <div
                                class="tw-mr-4 tw-rounded-full tw-relative tw-w-16 tw-h-16 tw-overflow-hidden tw-flex-shrink-0">
                                <img class="tw-w-16 tw-h-16 tw-rounded-full tw-border-2 tw-border-solid tw-border-yellow-500"
                                    src="{{ imgix($featured->fetch('coach_profile_image'), ['w' => 300]) }} ">
                                <!-- Badge -->
                                <div
                                    class="tw-bg-yellow-500 tw-absolute tw-w-full tw-h-3 tw-left-0 tw-bottom-0 tw-z-10 tw-flex tw-items-center tw-justify-center">
                                    <svg class="tw-block" width="10" height="10" aria-hidden="true" fill="white"
                                        focusable="false">
                                        <use xlink:href="#whistle"></use>
                                    </svg>
                                </div>
                            </div>
                            <!-- Header -->
                            <h2 class="tw-text-2xl tw-font-bold tw-uppercase tw-mr-4">
                                @php
                                    $fullName = $featured->fetch('fields.name');
                                    $exploded = explode(' ', $fullName);
                                    $firstName = array_shift($exploded);
                                @endphp
                                <span class="tw-font-normal">{{ $firstName }}</span>
                                {{ implode($exploded, ' ') }}
                            </h2>
                            <!-- Buttons -->
                            <a href="{{ $featured->fetch('url') }}"
                                class="tw-btn tw-btn-primary tw-bg-{{ $brand }} tw-ml-auto tw-hidden hover:tw-bg-{{ $brand }}-600 {{ $singleFeaturedCoach ? '' : 'xl:tw-inline-flex' }}">Visit
                                Coach</a>
                        </div>
                        <!-- Card Body -->
                        <div class="tw-flex tw-flex-col tw-mb-6">
                            <h3 class="tw-text-xl tw-font-bold tw-uppercase tw-mb-4">
                                @php
                                    $focusArray = $featured->fetch('*fields.focus.value');
                                    $lastFocus = array_pop($focusArray);
                                @endphp
                                {{ implode($focusArray, ', ') }}
                                @if (count($focusArray) !== 0)
                                    <span>AND</span>
                                @endif
                                <span>{{ $lastFocus }}</span>
                            </h3>
                            <div class="tw-text-sm">{!! $featured->fetch('data.short_bio.value') !!}</div>
                        </div>
                        <!-- Buttons -->
                        <a href="{{ $featured->fetch('url') }}"
                            class="tw-btn tw-btn-primary tw-bg-{{ $brand }} tw-mr-auto hover:tw-bg-{{ $brand }}-600 {{ $singleFeaturedCoach ? '' : 'xl:tw-hidden' }}">Visit
                            Coach</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
