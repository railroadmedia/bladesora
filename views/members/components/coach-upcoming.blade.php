@if ($hasUpcomingCoaches)
    <div class="container">
        <div class="tw-flex tw-items-center tw-mb-6">
            <span class="rounded bg-{{ $brand }} text-white icon-bg-circle body mr-1">
                @include('bladesora::members.partials._upcoming-coaches-icon')
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
                            class="tw-w-full tw-flex tw-object-cover tw-filter tw-grayscale" alt="{{ $coach['name'] }} Card">
                        @if (isset($coach['date']))
                            <div class="tw-absolute  tw-leading-none tw-uppercase  tw-rounded  tw-p-1 tw-m-4 tw-bg-yellow-400">
                                <span class="tw-text-sm tw-text-black tw-font-bold tw-leading-none tw-font-roboto-condensed">
                                    <!-- Lock Icon SVG-->
                                    <svg width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.14286 4.375H6.71429V2.96875C6.71429 1.33203 5.49643 0 4 0C2.50357 0 1.28571 1.33203 1.28571 2.96875V4.375H0.857143C0.383929 4.375 0 4.79492 0 5.3125V9.0625C0 9.58008 0.383929 10 0.857143 10H7.14286C7.61607 10 8 9.58008 8 9.0625V5.3125C8 4.79492 7.61607 4.375 7.14286 4.375ZM5.28571 4.375H2.71429V2.96875C2.71429 2.19336 3.29107 1.5625 4 1.5625C4.70893 1.5625 5.28571 2.19336 5.28571 2.96875V4.375Z" fill="black"/>
                                    </svg>
                                    {{ $coach['date'] }}
                                </span>
                            </div>
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
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
