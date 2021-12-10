<div class="tw-relative tw-bg-black">
    <div class="tw-text-white">
        <div class="sm:tw-py-12 md:tw-py-12 lg:tw-py-16 tw-py-16 tw-px-14">
            <div class="tw-flex tw-flex-col-reverse lg:tw-flex-row">
                <div class="tw-flex-grow lg:tw-pr-6">
                    <h1 class="tw-text-4xl tw-mb-2 tw-uppercase tw-font-normal">
                        {{ $firstName }} <span class="tw-font-bold">{{ $lastName }}</span>
                    </h1>
                    <div class="tw-uppercase tw-font-semibold tw-mb-1" style="color: #7E9AB1;">
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
                    <div style="background-image: url('{{ $headShotPicture }}')"
                        class="tw-mb-10 lg:tw-mb-0 tw-mx-auto tw-rounded-full tw-bg-cover tw-h-48 tw-w-48">
                    </div>
                </div>
            </div>
            <div class="tw-bg-off-black tw-text-white">
                <div class="tw-text-4xl">Bio</div>
                <div class="tw-py-4">
                    {!! $longBio !!}
                </div>
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
                <div class="tw-text-4xl">Endorsements</div>
                <div class="tw-py-4 tw-font-normal">
                    @php
                        foreach ($endorsementsArray as $key => $endorsement) {
                            if ($key === 0) {
                                echo $endorsement . ': ';
                            } elseif (count($endorsementsArray) - 1 !== $key) {
                                echo $endorsement . ', ';
                            } else {
                                echo $endorsement;
                            }
                        }
                    @endphp
                </div>
            </div>
        </div>
    </div>
</div>
