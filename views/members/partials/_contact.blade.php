<div class="flex flex-column bg-white shadow corners-3">
    <div class="flex flex-row">
        <div class="flex flex-column xs-12 pa">
            <h1 class="heading pv">Contact Us</h1>
        </div>
    </div>
    <div class="flex flex-row flex-wrap">
        <div class="flex flex-column align-v-top pa xs-12 md-8">
            <div id="emailForm"
                 data-email-subject="{{ $emailSubject }}"
                 data-email-type="{{ $emailType }}"
                 data-input-label="{{ $emailInputLabel }}"
                 data-theme-color="{{ $themeColor }}"
                 data-user-avatar="{{ $userAvatar ?? '' }}"
                 data-success-message="{{ $emailSuccessMessage }}"
                 data-lesson-page="false"></div>
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