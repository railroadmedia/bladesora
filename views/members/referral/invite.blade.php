<section class="tw-text-center tw-text-white tw-py-6 md:tw-py-10 lg:tw-pt-12 lg:tw-pb-16" style="background:linear-gradient(to bottom, #010e2c, #000c17);">
    <div class="tw-container tw-mx-auto tw-max-w-7xl">
        <h1 class="tw-leading-tight lg:tw-mb-14"><strong>Share a free 30-day pass<br> with up to five friends.</strong></h1>
        <div class="tw-flex tw-flex-wrap lg:tw-flex-nowrap lg:tw-flex-row tw-items-center tw-px-4">
            <div class="tw-flex-shrink-0 tw-w-full lg:tw-w-auto tw-my-5 md:tw-my-6 lg:tw-my-0">
                <div class="tw-relative">
                    <img class="tw-inline-block tw-w-full tw-max-w-xs md:tw-max-w-sm lg:tw-max-w-xl" src="https://drumeo-assets.s3.amazonaws.com/redeem/referral/30-day-guest-pass.png">
                    <div class="tw-absolute tw-bottom-0 tw-w-full tw-p-4">
                        <p class="tw-leading-none">PASSES REDEEMED</p>
                        <h1 class="tw-leading-none"><strong>{{ 'todo' }}/5</strong></h1>
                    </div>
                </div>
            </div>

            <div class="tw-flex tw-flex-col lg:tw-h-full lg:tw-pl-10 tw-w-full tw-max-w-md lg:tw-max-w-none tw-mx-auto">
                <h5 class="tw-leading-tight tw-py-4">Give a friend unlimited access to Drumeo, free for 30 days</h5>
                <form id="commentform" name="drumeo" method="post" action="{{ URL::route('access-codes.form-claim') }}">
                    <label class="tw-inline-block tw-w-full tw-text-left tw-pt-6" for="email"><strong>Invite via email</strong></label>
                    <div class="tw-flex tw-flex-wrap lg:tw-flex-nowrap tw-items-center tw-justify-center tw-mt-1">
                        <input class="tw-inline-block tw-w-full tw-mb-4 lg:tw-mb-0 lg:tw-mr-4 tw-default-form-field lg:tw-flex-grow tw-pt-0" type="email" id="email" name="email" placeholder="Email address..." value="{{ Input::old('email') }}">
                        <input name="button" type="submit" id="button" class="tw-bg-drumeo tw-leading-none tw-text-base tw-font-bold tw-border-0 tw-rounded-full tw-select-none tw-cursor-pointer tw-text-center tw-py-4 tw-px-6 tw-uppercase tw-font-roboto tw-text-white tw-flex-none tw-w-52" value="Send Guest Pass"/>
                    </div>
                </form>

                <form id="commentform" name="drumeo" method="post" action="{{ URL::route('access-codes.form-claim') }}">
                    <label class="tw-inline-block tw-w-full tw-text-left tw-pt-6" for="email"><strong>Share your link</strong></label>
                    <div class="tw-flex tw-flex-wrap lg:tw-flex-nowrap tw-items-center tw-justify-center tw-mt-1">
                        <input class="tw-inline-block tw-w-full tw-mb-4 lg:tw-mb-0 lg:tw-mr-4 tw-default-form-field lg:tw-flex-grow tw-pt-0" type="email" id="email" name="email" placeholder="link" value="{{ Input::old('link') }}">
                        <input name="button" type="submit" id="button" class="tw-bg-drumeo tw-leading-none tw-text-base tw-font-bold tw-border-0 tw-rounded-full tw-select-none tw-cursor-pointer tw-text-center tw-py-4 tw-px-6 tw-uppercase tw-font-roboto tw-text-white tw-flex-none tw-w-52" value="Copy Link"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section  class="tw-text-center tw-text-white tw-py-5 md:tw-py-8" style="background-color:#081f35;">
    <div class="tw-container tw-mx-auto tw-max-w-6xl">
        <h5 class="tw-leading-normal tw-opacity-70">Guest passes are for new subscribers only and cannot be<br class="tw-hidden tw-g:inline"> redeemed for renewals, extensions, or gift subscriptions.</h5>
    </div>
</section>
