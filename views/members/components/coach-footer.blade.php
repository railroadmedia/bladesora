<div class="tw-relative tw-bg-black">
    <div class="tw-text-white">
        <div class="sm:tw-py-12 md:tw-py-12 lg:tw-py-16 tw-py-16 tw-px-14">
            <div class="tw-flex tw-flex-col-reverse lg:tw-flex-row">
                <div class="tw-flex-grow lg:tw-pr-6">
                    <h1 class="tw-text-4xl tw-mb-2 tw-uppercase tw-font-normal">
                        {{ $firstName }} <span class="tw-font-bold">{{ $lastName }}</span>
                    </h1>
                    <div class="tw-uppercase tw-font-semibold tw-mb-6" style="color: #7E9AB1;">
                        @php
                            $focusArray;
                            $lastFocus = array_pop($focusArray);
                        @endphp
                        {{ implode($focusArray, ', ') }}
                        @if (count($focusArray) !== 0)
                            <span>AND</span>
                        @endif
                        <span>{{ $lastFocus }}</span>
                    </div>
                    <h2 class="tw-mb-10 tw-text-base tw-font-normal tw-max-w-4xl">
                        {!! $shortBio !!}
                    </h2>
                </div>
                <div class="lg:tw-h-48 lg:tw-w-48">
                    <div
                        class="tw-mx-auto tw-mb-6 lg:tw-mb-0 lg:tw-mx-0 lg:tw-mr-4 tw-rounded-full tw-relative tw-w-48 tw-h-48 tw-overflow-hidden tw-flex-shrink-0">
                        <img class="tw-w-48 tw-h-48 tw-rounded-full tw-border-4 tw-border-solid tw-border-yellow-500"
                            src="{{ imgix($headShotPicture, ['w' => 300]) }} ">
                        <!-- Badge -->
                        <div
                            class="tw-bg-yellow-500 tw-absolute tw-w-full tw-h-6 tw-left-0 tw-bottom-0 tw-z-10 tw-flex tw-items-center tw-justify-center">
                            <svg class="tw-block" width="16" height="16" aria-hidden="true" fill="white"
                                focusable="false">
                                <use href="#whistle"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tw-bg-off-black tw-text-white">
                {{-- <div class="tw-text-4xl">Bio</div> --}}
                {{-- <div class="tw-py-4"> --}}
                {{-- {!! $longBio !!} --}}
                {{-- </div> --}}
                @if (!empty($bandsArray))
                    <div class="tw-text-4xl">Bands</div>
                    <div class="tw-py-4 tw-font-normal">
                        @php
                            $lastBand = array_pop($bandsArray);
                        @endphp
                        {{ implode($bandsArray, ', ') }}
                        @if (count($bandsArray) !== 0)
                            <span>and</span>
                        @endif
                        <span>{{ $lastBand }}</span>
                    </div>
                @endif

                @if (!empty($endorsementsArray))
                    <div class="tw-text-4xl">Endorsements</div>
                    <div class="tw-py-4 tw-font-normal">
                        @php
                            foreach ($endorsementsArray as $key => $endorsement) {
                                if ($key === 0) {
                                    /*echo $endorsement . ': ';*/
                                    echo $endorsement;
                                } elseif (count($endorsementsArray) - 1 !== $key) {
                                    echo $endorsement . ', ';
                                } else {
                                    echo $endorsement;
                                }
                            }
                        @endphp
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
