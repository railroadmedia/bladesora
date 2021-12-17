<div class="flex flex-column tw-max-w-3xl tw-mx-auto tw-px-4">

    <section>
        <div class="tw-mt-12 tw-text-center">
            <h2 class="tw-font-bold tw-text-3xl tw-mb-6">We'd love to hear from you!</h2>
            <p class="tw-mb-6 tw-text-base">Whether your question is about membership, shipping, technical troubles or anything else, our amazing support team is ready to answer any and all of your questions!</p>
            <p class="tw-text-base">You may find your response in our <a href="https://help.{{ $brand }}.com/" class="tw-font-bold tw-no-underline tw-text-{{ $themeColor }}" title="go to help center">Help Center here</a>, but if not, fill out the quick form below.</p>
        </div>
    </section>

    <section class="flex flex-row flex-wrap mv-3">
        <div class="flex flex-column">

            {{--TODO: Requires an instance of Vue with the Vuesora plugin ...? --}}
                <contact-member-email-form
                    brand="{{ $brand }}"
                    email-subject="{{ $emailSubject }}"
                    email-type="{{ $emailType }}"
                    email-endpoint="{{ $emailEndpoint }}"
                    email-logo="{{ $emailLogo }}"
                    email-alert="{{ $emailSubject }}"
                    input-label="{{ $emailInputLabel }}"
                    :lesson-page="false"
                    recipient="{{ $recipient ?? 'support@' . $brand . '.com' }}"
                    success-message="{{ $emailSuccessMessage }}"
                />
            {{--TODO: Requires an instance of Vue with the Vuesora plugin ...? --}}
        </div>
    </section>

    <section class="tw-flex tw-flex-col tw-text-center tw-my-8">
        <h2 class="tw-font-bold tw-text-3xl">Old fashioned phone calls work too!</h2>
        <div class="tw-flex tw-my-8 tw-flex-col tw-items-center sm:tw-flex-row">
            <div class="tw-flex tw-flex-col tw-w-10/12 sm:tw-w-1/3 tw-font-bold tw-justify-center tw-p-3 tw-border-solid tw-border-0 tw-border-b-2 sm:tw-border-b-0 sm:tw-border-r-2 tw-border-gray-300">
                <h4 class="tw-font-bold tw-mb-1">Toll-Free</h4>
                <a href="tel:{{ $tollFree }}" class=" text-{{ $themeColor }} sm:mb-2 no-decoration tw-text-base">{{ $tollFree }}</a>
            </div>
            <div class="tw-flex tw-flex-col tw-w-10/12 sm:tw-w-1/3 tw-font-bold tw-justify-center tw-p-3 tw-border-solid tw-border-0 tw-border-b-2 sm:tw-border-b-0 sm:tw-border-r-2 tw-border-gray-300">
                <h4 class="tw-font-bold tw-mb-1">Direct/International</h4>
                <a href="tel:{{ $internationalNumber }}" class=" text-{{ $themeColor }} sm:mb-2 no-decoration tw-text-base">{{ $internationalNumber }}</a>
            </div>
            <div class="tw-flex tw-flex-col tw-w-10/12 sm:tw-w-1/3 tw-font-bold tw-justify-center tw-p-3">
                <h4 class="tw-font-bold tw-mb-1">Office Hours</h4>
                <p class="text-{{ $themeColor }} tw-text-base"> Monday-Friday</p>
                <p class="text-{{ $themeColor }} sm:mb-2 tw-text-base">8 AM - 4 PM Pacific Time</p>
            </div>
        </div>
    </section>

    <section class="tw-flex tw-flex-col tw-text-center tw-mb-12">
        <h2 class="tw-font-bold tw-text-3xl tw-mb-3 md:tw-mb-6">Want to join the team?</h2>
        <p class="tw-text-base">For current available positions at our company, please visit <a href="https://musora.com/jobs" title="go to help center" class="tw-font-bold tw-no-underline text-{{ $themeColor }}">Musora.com/Jobs</a>.</p>
    </section>
</div>