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
    <div class="tw-text-white" style="background-color: {{ $brandColors['solidBg'] }}">
        <div class="md:tw-py-12 lg:tw-py-16 tw-py-12 md:tw-px-14 tw-px-6">
            @if (isset($topSubtitle))
                <h2 class="tw-uppercase tw-font-semibold tw-mb-2 tw-font-bold" style="color: {{ $brandColors['subtitle'] }}; font-size: 14px; line-height: 24px;">
                    {{ $topSubtitle }}
                </h2>
            @endif
            <h1 class="tw-mb-3 tw-uppercase tw-font-normal" style="font-size: 40px; line-height: 24px;">
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
            <div class="tw-flex tw-flex-col sm:tw-flex-row tw-items-center sm:tw-items-start">
                {{ $actions }}
            </div>
        </div>
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
        <div style="width: 100%; height: 100%; background: linear-gradient(268deg,{{ $colors["$brand"]['bgRgbStart'] }} 50%,{{ $colors["$brand"]['solidBg'] }};"></div>
    </div>
</section>
