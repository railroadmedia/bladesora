@php
    $cardImages = [
        'drumeo' => 'https://drumeo-assets.s3.amazonaws.com/redeem/referral/30-day-guest-pass.png',
        'pianote' => 'https://drumeo-assets.s3.amazonaws.com/redeem/referral/pianote-guest-pass.png',
        'singeo' => 'https://drumeo-assets.s3.amazonaws.com/redeem/referral/singeo-guest-pass.png',
        'guitareo' => 'https://drumeo-assets.s3.amazonaws.com/redeem/referral/guitareo-guest-pass.png',
    ];

    $cardImage = $cardImages[$brand];
@endphp

<div class="tw-relative">
    <img class="tw-inline-block tw-w-full tw-max-w-xs sm:tw-max-w-md md:tw-max-w-lg lg:tw-max-w-xl" src="{{ $cardImage }}">
    @if(!empty($showEmpty))
        <div class="tw-absolute tw-bottom-0 tw-w-full tw-p-4">
            <p class="tw-leading-none">PASSES REDEEMED</p>
            <h1 class="tw-leading-none"><strong>{{ $userReferralsPerformed }}/{{ $referralsPerUser }}</strong></h1>
        </div>
    @endif
</div>
