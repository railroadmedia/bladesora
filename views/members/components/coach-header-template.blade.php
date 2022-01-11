@section('scripts')
    <script src="https://player.vimeo.com/api/player.js"></script>
    <script type="application/javascript">
        const attachOverlayListener = function () {
            const modalOverlay = document.getElementById('modalOverlay');

            modalOverlay.onclick = function () {
                const videoIframe = document.getElementById('coachVideoIframe');
                const player = new Vimeo.Player(videoIframe);
                player.pause();
            }
        }

        const onModalButtonClick = function () {
            const videoIframe = document.getElementById('coachVideoIframe');
            const player = new Vimeo.Player(videoIframe);
            player.play();

            setTimeout(function() {
                attachOverlayListener();
            }, 100);
        }
    </script>
    @if(isset($queuedScripts))
        {{ $queuedScripts }}
    @endif
@endsection

@php
$colors = [
    'drumeo' => [
        'solidBg' => '#00101d',
        'bgRgbStart' => 'rgba(0, 16, 29, 0)',
        'bgRgbEnd' => '',
        'subtitle' => '#7E9AB1',
    ],
    'guitareo' => [
        'solidBg' => '#101817',
        'bgRgbStart' => 'rgba(0, 16, 29, 0)',
        'bgRgbEnd' => '',
        'subtitle' => '#717179',
    ],
    'singeo' => [
        'solidBg' => '#18131C',
        'bgRgbStart' => 'rgba(0, 16, 29, 0)',
        'bgRgbEnd' => '',
        'subtitle' => '#717179',
    ],
    'pianote' => [
        'solidBg' => '#201617',
        'bgRgbStart' => 'rgba(0, 16, 29, 0)',
        'bgRgbEnd' => '',
        'subtitle' => '#717179',
    ],
];
$brandColors = $colors[$brand];
@endphp

<section class="tw-grid xs:tw-grid-cols-1 sm:tw-grid-cols-1 md:tw-grid-cols-1 lg:tw-grid-cols-2 tw-gap-0">
    <div class="lg:tw-hidden tw-bg-top"
        style="
            background-color: {{ $colors["$brand"]['solidBg'] }};
            background-image: url({{ _imgix(
                $backgroundImage,
                []
            ) }});
            color: #fff;
            background-size: cover;
            min-height: 25vh;
            background-position: 50%;">
        <div style="width: 100%; height: 100%; background: linear-gradient(180deg,{{ $colors["$brand"]['bgRgbStart'] }} 50%,{{ $colors["$brand"]['solidBg'] }});"></div>
    </div>
    <div class="tw-text-white" style="background-color: {{ $brandColors['solidBg'] }}">
        <div class="tw--mt-24 md:tw-mt-0 tw-text-center lg:tw-text-left md:tw-py-12 lg:tw-py-16 tw-py-12 md:tw-px-14 tw-px-6">
            @if (isset($topSubtitle))
                <h2 class="tw-uppercase tw-font-semibold tw-mb-2 tw-font-bold" style="color: {{ $brandColors['subtitle'] }}; font-size: 14px; line-height: 24px;">
                    {{ $topSubtitle }}
                </h2>
            @endif
            <h1 class="tw-mb-3 tw-uppercase tw-font-normal" style="font-size: 40px; line-height: 36px;">
                {{ $title }}
            </h1>
            @if (isset($bottomSubtitle))
                <h2 class="tw-uppercase tw-font-semibold tw-mb-2 tw-font-bold" style="color: {{ $brandColors['subtitle'] }}; font-size: 14px; line-height: 24px;">
                    {{ $bottomSubtitle }}
                </h2>
            @endif
            <h3 class="tw-mb-6 tw-font-normal" style="font-size: 14px; line-height: 24px;">
                {{ $shortBio }}
            </h3>
            <div class="tw-flex tw-flex-col lg:tw-flex-row tw-items-center xl:tw-items-start tw-flex-wrap xl:tw-flex-nowrap">
                {{ $actions }}
            </div>
        </div>
    </div>
    <div class="tw-hidden lg:tw-flex tw-bg-top"
        style="
            background-color: {{ $colors["$brand"]['solidBg'] }};
            background-image: url({{ _imgix(
                $backgroundImage,
                []
            ) }});
            color: #fff;
            background-size: cover;
            background-position: 50%;">
        <div style="width: 100%; height: 100%; background: linear-gradient(268deg,{{ $colors["$brand"]['bgRgbStart'] }} 50%,{{ $colors["$brand"]['solidBg'] }});"></div>
    </div>
</section>

@if ($vimeoVideo != null)
    <!-- Video Modal -->
    <div id="coach-trailer-modal" class="modal">
        <div class="flex flex-column corners-3">
            <div class="tw-w-full tw-relative" style="padding-bottom: 56.25%;">
                <iframe class="tw-absolute tw-w-full tw-h-full reset-on-close"
                    src="https://player.vimeo.com/video/{{$vimeoVideo}}?title=0&byline=0&portrait=0"
                    frameborder="0"
                    allow="autoplay; fullscreen;" 
                    id="coachVideoIframe">
                </iframe>
            </div>
        </div>
    </div>
@endif