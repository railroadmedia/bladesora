@php
$titleLineOne = $canRefer ? 'Share a free 30-day pass' : 'Thank you for your';
$titleLineTwo = $canRefer ? 'with up to five friends.' : 'referrals & support!';
$footerLineOne = $canRefer ? 'Guest passes are for new subscribers only and cannot be' : 'You have referred the maximum of five guests.';
$footerLineTwo = $canRefer ? 'redeemed for renewals, extensions, or gift subscriptions.' : 'You\'ll have access to more invites soon!';

$containerClass = $canRefer ? '' : 'tw-justify-center';

$cardImages = [
    'drumeo' => 'https://drumeo-assets.s3.amazonaws.com/redeem/referral/30-day-guest-pass.png',
    'pianote' => 'https://drumeo-assets.s3.amazonaws.com/redeem/referral/pianote-guest-pass.png',
    'singeo' => 'https://drumeo-assets.s3.amazonaws.com/redeem/referral/singeo-guest-pass.png',
    'guitareo' => 'https://drumeo-assets.s3.amazonaws.com/redeem/referral/guitareo-guest-pass.png',
];

$cardImage = $cardImages[$brand];
@endphp
<div class="referral-sections">
    @if (isset($showToast) && $showToast)
        <div class="tw-bottom-0 tw-text-center tw-pb-6" id="emailSentToast"
        style="z-index: 2000; position: fixed !important; width: 100%">
        <div
            class="
                tw-bg-{{ $brand }}
                tw-px-3
                tw-py-2
                tw-w-4/6
                tw-justify-self-center
                tw-mx-auto
                tw-rounded-md">
            <div class="tw-flex tw-justify-between tw-text-white tw-text-small">
                <div><i class="fas fa-envelope tw-mr-2"></i>{{ $toastMessage ?? 'Your invite has been sent!' }}
                </div>
                <button class="tw-bg-transparent tw-border-none" onclick="hideToast();">
                    <i class="far fa-times-circle tw-text-white"></i>
                </button>
            </div>
        </div>
    </div>
    @endif
    <section class="tw-text-center tw-text-white tw-py-6 md:tw-py-10 lg:tw-pt-12 lg:tw-pb-16">
        <div class="tw-container tw-mx-auto tw-max-w-7xl">
            <h1 class="tw-leading-tight lg:tw-mb-14"><strong>{{ $titleLineOne }}<br> {{ $titleLineTwo }}</strong>
            </h1>
            <div class="tw-flex tw-flex-col xl:tw-flex-row tw-items-center tw-px-4 {{ $containerClass }}">
                <div class="tw-flex-shrink-0 tw-w-full lg:tw-w-auto tw-my-5 md:tw-my-6 lg:tw-my-0">
                    <div class="tw-relative">
                        <img class="tw-inline-block tw-w-full tw-max-w-xs sm:tw-max-w-md md:tw-max-w-lg lg:tw-max-w-xl"
                            src="{{ $cardImage }}">
                        <div class="tw-absolute tw-bottom-0 tw-w-full tw-p-4">
                            <p class="tw-leading-none">PASSES REDEEMED</p>
                            <h1 class="tw-leading-none">
                                <strong>{{ $userReferralsPerformed }}/{{ $referralsPerUser }}</strong>
                            </h1>
                        </div>
                    </div>
                </div>
                @if ($canRefer)
                    <div
                        class="tw-flex tw-flex-col lg:tw-h-full lg:tw-pl-10 tw-w-full tw-max-w-lg lg:tw-max-w-none tw-mx-auto">
                        <h5 class="tw-leading-tight tw-py-4">Give a friend unlimited access to Drumeo, free for 30 days
                        </h5>
                        <form id="invite-email-form" name="invite-email-form" method="post"
                            action="{{ $emailInviteUrl }}">
                            <label class="tw-inline-block tw-w-full tw-text-left tw-pt-6 tw-ml-6"
                                for="email"><strong>Invite via email</strong></label>
                            <div
                                class="tw-flex tw-flex-wrap sm:tw-flex-nowrap tw-items-center tw-justify-center tw-mt-1">
                                <input type="hidden" name="_token" class="sort-input"
                                    value="{{ csrf_token() }}" />
                                <input
                                    class="tw-inline-block tw-w-full tw-mb-4 sm:tw-mb-0 sm:tw-mr-4 tw-default-form-field sm:tw-flex-grow tw-pt-0"
                                    type="email" id="email" name="email" placeholder="Email address..." value="">
                                <input name="button" type="submit" id="button"
                                    class="tw-bg-{{ $brand }} tw-leading-none tw-text-base tw-font-bold tw-border-0 tw-rounded-full tw-select-none tw-cursor-pointer tw-text-center tw-py-4 tw-px-6 tw-uppercase tw-font-roboto tw-text-white tw-flex-none tw-w-52"
                                    value="Send Guest Pass" />
                            </div>
                        </form>

                        <form id="invite-link-form" name="invite-link-form" action="#">
                            <label class="tw-inline-block tw-w-full tw-text-left tw-pt-6 tw-ml-6"
                                for="email"><strong>Share your link</strong></label>
                            <div
                                class="tw-flex tw-flex-wrap sm:tw-flex-nowrap tw-items-center tw-justify-center tw-mt-1">
                                <input
                                    class="tw-inline-block tw-w-full tw-mb-4 sm:tw-mb-0 sm:tw-mr-4 tw-default-form-field sm:tw-flex-grow tw-pt-0"
                                    type="text" id="referral-link" readonly name="referral-link" placeholder="link"
                                    value="{{ $userReferralLink }}">
                                <input onclick="copyLink()" name="button" id="button" readonly
                                    class="tw-bg-{{ $brand }} tw-leading-none tw-text-base tw-font-bold tw-border-0 tw-rounded-full tw-select-none tw-cursor-pointer tw-text-center tw-py-4 tw-px-6 tw-uppercase tw-font-roboto tw-text-white tw-flex-none tw-w-52"
                                    value="Copy Link" />
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <section class="tw-text-center tw-text-white tw-py-5 md:tw-py-8" style="background-color:#081f35;">
        <div class="tw-container tw-mx-auto tw-max-w-6xl">
            <h5 class="tw-leading-normal tw-opacity-70">{{ $footerLineOne }}<br class="tw-hidden lg:tw-inline">
                {{ $footerLineTwo }}</h5>
        </div>
    </section>
</div>
<script>
    function copyLink() {
        var link = document.getElementById("referral-link");
        navigator.clipboard.writeText(link.value);
    }

    function hideToast() {
        var toast = document.getElementById("emailSentToast");
        if (!toast.classList.contains("tw-hidden")) {
            toast.classList.add("tw-hidden");
        }
    }

    function docReady(fn) {
        if (document.readyState === "complete" || document.readyState === "interactive") {
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }

    docReady(function() {
        setTimeout(() => {
            hideToast();
        }, 3000);
    });
</script>
