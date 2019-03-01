<div class="flex flex-column bg-white shadow corners-3">
    <div class="flex flex-row">
        <div class="flex flex-column xs-12 pa">
            <h1 class="heading pv">Contact Us</h1>
        </div>
    </div>
    <div class="flex flex-row flex-wrap">
        <div class="flex flex-column align-v-top pa xs-12 md-8">

            {{--TODO: Requires an instance of Vue with the Vuesora plugin--}}
                <email-form
                    email-subject="{{ $emailSubject }}"
                    theme-color="{{ $themeColor }}"
                    brand="{{ $brand }}"
                    recipient="{{ $recipient ?? 'support@' . $brand . '.com' }}"
                    input-label="{{ $emailInputLabel }}"
                    email-type="{{ $emailType }}"
                    email-endpoint="{{ $emailEndpoint }}"
                    email-logo="{{ $emailLogo }}"
                    email-alert="{{ $emailSubject }}"
                    success-message="{{ $emailSuccessMessage }}"
                    :lesson-page="false"></email-form>
            {{--TODO: Requires an instance of Vue with the Vuesora plugin--}}
        </div>
        <div class="flex flex-column align-center pa xs-12 md-4">
            <h4 class="subtitle">International</h4>
            <a href="tel:{{ $internationalNumber }}" class="title text-{{ $themeColor }} font-light mb-2 no-decoration">{{ $internationalNumber }}</a>

            <h4 class="subtitle">USA & Canada</h4>
            <a href="tel:{{ $tollFree }}" class="title text-{{ $themeColor }} font-light mb-2 no-decoration">{{ $tollFree }}</a>

            <h4 class="subtitle">Email Address</h4>
            <a href="mailto:{{ $emailAddress }}" class="title text-{{ $themeColor }} font-light mb-2 no-decoration">{{ $emailAddress }}</a>
        </div>
    </div>
</div>