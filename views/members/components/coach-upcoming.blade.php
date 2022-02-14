@if ($hasUpcomingCoaches)
    <div class="container">
        <div class="tw-flex tw-items-center tw-mb-6">
            <span class="rounded bg-{{ $brand }} text-white icon-bg-circle body mr-1">
                <svg width="20" height="20" aria-hidden="true" fill="white" focusable="false">
                    <use href="#whistle"></use>
                </svg>
            </span>
            <h2 class="heading sans">
                Upcoming Coaches
            </h2>
        </div>
        <!-- Upcoming Coaches -->
        <div class="tw-my-3">
            <div class="tw-grid tw-grid-cols-2 sm:tw-grid-cols-3 md:tw-grid-cols-4 xl:tw-grid-cols-5 tw-gap-3">
                @foreach ($upcomingCoaches as $coach)
                    <div class="tw-rounded-3xl tw-overflow-hidden tw-relative tw-flex tw-mb-3">
                        <!-- Coach Image -->
                        <img src="{{ imgix($coach['image'], ['h' => 436, 'w' => 300, 'fit' => 'crop', 'crop' => 'faces']) }}"
                            class="tw-w-full tw-flex tw-object-cover" alt="{{ $coach['name'] }} Card">
                        @if (isset($coach['date']))
                            <div
                                class="tw-absolute tw-text-black tw-leading-none tw-uppercase tw-font-bold tw-rounded tw-font-roboto-condensed tw-p-1 tw-m-4 tw-bg-yellow-400">
                                {{ $coach['date'] }}</div>
                        @endif
                        <div class="tw-absolute tw-w-full tw-left-0 tw-bottom-0 tw-text-white tw-flex tw-flex-col tw-text-center tw-uppercase tw-h-2/3 tw-px-3"
                            style="background: linear-gradient(180deg, rgba(1, 5, 15, 0) 0%, #01050F 100%);">
                            <!-- Coach Name -->
                            <p class="tw-text-2xl xl:tw-text-3xl tw-font-bold tw-font-roboto-condensed tw-break-words tw-flex tw-flex-col tw-mt-auto tw-mb-4"
                                style="line-height:1.1 !important; hyphens: auto;">
                                @php
                                    $fullName = strip_tags($coach['name']);
                                    $exploded = explode(' ', $fullName);
                                    $firstName = array_shift($exploded);
                                @endphp
                                <span class="tw-block">{{ $firstName }}</span>
                                {{ implode($exploded, ' ') }}
                            </p>

                            <!-- Coach Title -->
                            <p class="tw-text-sm tw-font-primary tw-text-yellow-400 tw-mb-8 tw-leading-snug">
                                {{ strip_tags($coach['focus_text']) }}
                            </p>
                        </div>

                        <!-- Overlay -->
                        <div
                            class="tw-flex tw-items-center tw-content-center tw-p-6 tw-absolute tw-top-0 tw-left-0 tw-right-0 tw-bottom-0 tw-bg-black tw-opacity-0 tw-transition tw-bg-opacity-60 tw-duration-500 tw-ease-in-out hover:tw-opacity-100">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
