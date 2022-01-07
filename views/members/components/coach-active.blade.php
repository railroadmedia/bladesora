@if ($hasActiveCoaches)
    <div class="container">
        <div class="tw-flex tw-items-center tw-mb-6">
            <span class="rounded bg-{{ $brand }} text-white icon-bg-circle body mr-1">
                <svg width="20" height="20" aria-hidden="true" fill="white" focusable="false">
                    <use href="#whistle"></use>
                </svg>
            </span>
            <h2 class="heading sans">
                Active Coaches
            </h2>
        </div>

        <!-- Active Coaches -->
        <div class="tw-my-3">
            <div class="tw-grid tw-grid-cols-2 sm:tw-grid-cols-3 md:tw-grid-cols-4 lg:tw-grid-cols-4 tw-gap-3">
                @foreach ($activeCoaches as $coach)
                    <a href="{{ url()->route('members.coaches.show', ['coachSlug' => $coach['slug']]) }}"
                        class="tw-rounded-3xl tw-overflow-hidden tw-relative tw-flex tw-mb-3">

                        <!-- Coach Image -->
                        <img src="{{ imgix($coach->fetch('data.coach_card_image'), ['w' => 300]) }}"
                            class="tw-w-full tw-flex" alt="{{ $coach->fetch('fields.name') }} Card">

                        <div class="tw-absolute tw-w-full tw-left-0 tw-bottom-0 tw-text-white tw-flex tw-flex-col tw-text-center tw-uppercase tw-h-2/3 tw-px-3"
                            style="background: linear-gradient(transparent, #112E4A)">
                            <!-- Coach Name -->
                            <p class="tw-text-lg sm:tw-text-xl xl:tw-text-3xl tw-font-bold tw-break-words tw-flex tw-flex-col tw-mt-auto tw-mb-4 lg:tw-mb-1"
                                style="line-height: 1em!important;hyphens: auto;">
                                @php
                                    $fullName = $coach->fetch('fields.name');
                                    $exploded = explode(' ', $fullName);
                                    $firstName = array_shift($exploded);
                                @endphp
                                <span class="tw-block tw-font-normal">{{ $firstName }}</span>
                                {{ implode($exploded, ' ') }}
                            </p>

                            <!-- Coach Title -->
                            <p class="tw-text-sm xl:tw-text-lg tw-font-primary tw-hidden tw-mb-4 lg:tw-block">
                                {{ $coach->fetch('data.focus_text.value') }}
                            </p>
                        </div>

                        <!-- Overlay -->
                        <div
                            class="tw-flex tw-items-center tw-content-center tw-p-6 tw-absolute tw-top-0 tw-left-0 tw-right-0 tw-bottom-0 tw-bg-black tw-opacity-0 tw-transition tw-bg-opacity-60 tw-duration-500 tw-ease-in-out hover:tw-opacity-100">
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endif