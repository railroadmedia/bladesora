    
@section('scripts')
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
@endsection

<div class="tw-grid xs:tw-grid-cols-1 sm:tw-grid-cols-1 md:tw-grid-cols-1 lg:tw-grid-cols-2 tw-gap-0">
    <div class="tw-bg-deepblue tw-text-white" style="background-color: #00101d;">
        <div class="md:tw-py-12 lg:tw-py-16 tw-py-12 md:tw-px-14 tw-px-6">
            <h1 class="tw-text-4xl tw-mb-2 tw-uppercase tw-font-normal">
                {{ $firstName }} <span class="tw-font-bold">{{ $lastName }}</span></h1>
            <div class="tw-uppercase tw-font-semibold tw-mb-1 tw-font-bold" style="color: #7E9AB1;">
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
            <h2 class="tw-mb-6 tw-text-base tw-font-normal">
                {{ $shortBio }}
            </h2>
            <div class="tw-flex">
                <div id="subscribeButton" class="tw-mr-4 {{ $isUserSubscribed ? 'tw-hidden' : '' }}">
                    <button onclick="subscribeToCoach({{ $coachId }}, '{{ $subscribeUrl }}');"
                        class="tw-text-xs sm:tw-text-sm tw-transition-none tw-px-3 sm:tw-px-6 tw-h-auto tw-py-3 tw-btn-secondary tw-btn-small tw-text-white tw-border-{{ $brandName }} tw-bg-{{ $brandName }} hover:tw-bg-transparent hover:tw-text-white hover:tw-border-white">
                        <span>
                            <i aria-hidden="true" class="fa fa-bell tw-px-0.5"></i>
                            Subscribe</span>
                    </button>
                </div>
                <div id="unsubscribeButton" class="tw-mr-4 {{ $isUserSubscribed ? '' : 'tw-hidden' }}">
                    <button onclick="unsubscribeToCoach({{ $coachId }}, '{{ $unsubscribeUrl }}');"
                        class="tw-text-xs sm:tw-text-sm tw-transition-none tw-px-3 sm:tw-px-6 tw-h-auto tw-py-3 tw-btn-secondary tw-btn-small tw-text-white tw-border-{{ $brandName }} tw-bg-{{ $brandName }} hover:tw-bg-transparent hover:tw-text-white hover:tw-border-white">
                        <span>
                            <i aria-hidden="true" class="fa fa-check tw-px-0.5"></i>
                            <span>Subscribed</span> </span>
                    </button>
                </div>
                <div class="tw-mr-4">
                    <a href="{{ $forumUrl }}"
                        class="tw-text-xs sm:tw-text-sm tw-transition-none tw-px-3 sm:tw-px-6 tw-h-auto tw-py-3 tw-btn-secondary tw-btn-small tw-text-white hover:tw-bg-{{ $brandName }} hover:tw-text-white hover:tw-border-{{ $brandName }}">
                        <span>
                            <i aria-hidden="true" class="fa fa-question-circle tw-px-0.5"></i>
                            <span class="tw-hidden sm:tw-inline-block">Ask a question</span></span>
                    </a>
                </div>
                @if ($vimeoVideo != null)
                    <div class="tw-mr-4">
                        <button data-open-modal="previewModal"
                            class="tw-text-xs sm:tw-text-sm tw-transition-none tw-px-3 sm:tw-px-6 tw-h-auto tw-py-3 tw-btn-secondary tw-btn-small tw-text-white hover:tw-bg-{{ $brandName }} hover:tw-text-white hover:tw-border-{{ $brandName }}">
                            <span>
                                <i aria-hidden="true" class="fa fa-play tw-px-0.5"></i>
                                <span class="tw-hidden sm:tw-inline-block">Play Trailer</span></span>
                        </button>
                    </div>
                @endif
            </div>
        </div>

        @if ($vimeoVideo != null)
            <div id="previewModal" class="modal">
                <div class="flex flex-column corners-10">
                    <div class="video-wrap">
                        <div class="widescreen">
                            <div class="flex flex-column video-player user-active">
                                <iframe
                                    style="max-width: 100%; width: 100%; height: 100%; position: absolute; top: 0; left: 0;z-index: 1;"
                                    src="//player.vimeo.com/video/{{ $vimeoVideo }}"
                                    frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

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
    </div>
    <div
        style="
            background-image: url({{ _imgix(
                $backgroundImage,
                []
            ) }});
            color: #fff;
            background-size: cover;
            background-position: 50%;">
        <div style="width: 100%; height: 100%; background: linear-gradient(268deg,rgba(0,16,29,.07) 50%,#00101d);"></div>

    </div>
</div>
