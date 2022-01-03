@component('bladesora::members.components.coach-header-template', [
    'brand'=> $brandName,
    'backgroundImage'=> $backgroundImage,
    'vimeoVideo' => $vimeoVideo,
    ])    
    @slot('queuedScripts')
    <script type="application/javascript">
        function hideElement(elId) {
            var element = document.getElementById(elId);
            if (!element.classList.contains("tw-hidden")) {
                element.classList.add("tw-hidden");
            }
        }

        function showElement(elId) {
            var element = document.getElementById(elId);
            element.classList.remove("tw-hidden");
        }

        function switchToSubscribedButton() {
            hideElement("subscribeButton");
            showElement("unsubscribeButton");
        };

        function switchToSubscribeButton() {
            hideElement("unsubscribeButton");
            showElement("subscribeButton");
        };

        function successSubscribeToast() {
            showElement("subscribeToast");
            hideElement("unsubscribeToast");
            hideElement("errorToast");
            setTimeout(() => {
                hideElement("subscribeToast");
            }, 2500);
        };

        function successUnsubscribeToast() {
            showElement("unsubscribeToast");
            hideElement("subscribeToast");
            hideElement("errorToast");
            setTimeout(() => {
                hideElement("unsubscribeToast");
            }, 2500);
        };

        function showErrorToast() {
            showElement("errorToast");
            hideElement("subscribeToast");
            hideElement("unsubscribeToast");
        };

        function subscribeToCoach(coachId, URL) {
            switchToSubscribedButton();

            fetch(URL, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    referrerPolicy: 'no-referrer',
                    body: JSON.stringify({
                        content_id: coachId
                    })
                })
                .then(response => response.json())
                .then(() => {
                    successSubscribeToast();
                })
                .catch((e) => {
                    switchToSubscribeButton();
                });
        }

        function unsubscribeToCoach(coachId, URL) {
            switchToSubscribeButton();

            fetch(URL, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    referrerPolicy: 'no-referrer',
                    body: JSON.stringify({
                        content_id: coachId
                    })
                })
                .then(() => {
                    successUnsubscribeToast();
                })
                .catch((e) => {
                    switchToSubscribedButton();
                });
        }
    </script>
    @endslot
    @slot('bottomSubtitle')
        @php
                $focusArray;
                $lastFocus = array_pop($focusArray);
            @endphp
            {{ implode($focusArray, ', ') }}
            @if (count($focusArray) !== 0)
                <span>AND</span>
            @endif
            <span>{{ $lastFocus }}</span>
    @endslot
    @slot('title')
        {{ $firstName }} <span class="tw-font-bold">{{ $lastName }}</span>
    @endslot
    @slot('shortBio')
        {!! $shortBio !!}
    @endslot
    @slot('actions')
            <div id="subscribeButton" class="md:tw-mr-4 {{ $isUserSubscribed ? 'tw-hidden' : '' }}">
                    <button onclick="subscribeToCoach({{ $coachId }}, '{{ $subscribeUrl }}');"
                        class="tw-btn tw-btn-primary tw-transition tw-bg-{{ $brandName }} hover:tw-bg-{{ $brandName }}-600 sm:tw-mr-4 tw-box-border tw-px-auto tw-mb-4" style="font-size: 16px; line-height: 24px; height: 50px; width: 250px;">
                        <span>
                            <i aria-hidden="true" class="fa fa-bell tw-px-0.5"></i>
                            Subscribe</span>
                    </button>
                </div>
                <div id="unsubscribeButton" class="md:tw-mr-4 {{ $isUserSubscribed ? '' : 'tw-hidden' }}">
                    <button onclick="unsubscribeToCoach({{ $coachId }}, '{{ $unsubscribeUrl }}');"
                        class="tw-btn tw-btn-primary tw-transition tw-bg-{{ $brandName }} hover:tw-bg-{{ $brandName }}-600 sm:tw-mr-4 tw-box-border tw-px-auto tw-mb-4" style="font-size: 16px; line-height: 24px; height: 50px; width: 250px;">
                        <span>
                            <i aria-hidden="true" class="fa fa-check tw-px-0.5"></i>
                            <span>Subscribed</span> </span>
                    </button>
                </div>
                @if ($forumUrl != null)
                    <div class="md:tw-mr-4">
                        <a href="{{ $forumUrl }}"
                            class="tw-btn tw-btn-primary tw-transition tw-bg-{{ $brandName }} hover:tw-bg-{{ $brandName }}-600 sm:tw-mr-4 tw-box-border tw-px-auto tw-mb-4" style="font-size: 16px; line-height: 24px; height: 50px; width: 250px;">
                            <span>
                                <i aria-hidden="true" class="fa fa-question-circle tw-px-0.5"></i>
                                <span>Ask a question</span></span>
                        </a>
                    </div>
                @endif
                @if ($vimeoVideo != null)
                    <div class="md:tw-mr-4">
                        <button onclick="onModalButtonClick()" data-open-modal="coach-trailer-modal"
                            class="tw-btn tw-btn-secondary tw-transition hover:tw-bg-opacity-10 hover:tw-bg-white tw-box-border tw-px-auto tw-mb-4" style="font-size: 16px; line-height: 24px; height: 50px; width: 250px;">
                            <span>
                                <i aria-hidden="true" class="fa fa-play tw-px-0.5"></i>
                                <span>Play Trailer</span></span>
                        </button>
                    </div>
                @endif
    @endslot
@endcomponent 

        @if(empty($hideUser))
            <div class="tw-flex-col tw-items-center tw-hidden sm:tw-flex">
                <div class="header-avatar user-avatar rounded tw-bg-black tw-pb-0 tw-w-32
                            {{ in_array($currentUser['access_level'], ['coach', 'edge', 'lifetime', 'team', 'guitar', 'piano']) ? 'subscriber' : '' }}
                            {{ $brand }}
                            {{ $currentUser['access_level'] }}"
                >
                    <a href="{{ $profileUrl }}" class="no-decoration">
                        <img
                            class="rounded inset-border"
                            src="{{ _imgix(
                                $currentUser['avatar'],
                                ["q" => 50, "blur" => 2, "w" => 50, "h" => 50]
                            ) }}"
                            data-ix-src="{{ $currentUser['avatar'] }}"
                        >
                    </a>
                </div>

                @if($currentUser['access_level'] !== 'pack')
                    <p class="body dense text-white font-bold text-center uppercase mt-1 text-white">
                        @if($currentUser['access_level'] === 'team')
                            {{ $brand }} Team
                        @elseif ($currentUser['access_level'] === 'coach')
                            COACH
                        @else
                            Level {{ $currentUser['level_number'] }}
                        @endif
                    </p>

                    @if($currentUser['access_level'] !== 'team')
                        <p class="body dense text-white font-compressed text-center">
                            {{ $currentUser['xp'] }} XP
                        </p>
                    @endif
                    
                    @isset($userActions)
                        {{ $userActions }}
                    @endif
                @endif
            </div>
        @endif