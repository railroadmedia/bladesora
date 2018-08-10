<footer class="container fluid bg-white shadow text-grey-3">
    <div class="container">
        <div class="flex flex-row flex-wrap align-h-center">
            <section class="flex flex-column footer-col">
                <div class="flex flex-row tiny align-center">
                    Musora Media Inc &copy; {{ date('Y') }} -
                    <a href="{{ $termsUrl }}" target="_blank" class="text-grey-3">Terms</a> /
                    <a href="{{ $privacyUrl }}" target="_blank" class="text-grey-3">Privacy</a>
                </div>
            </section>

            <div class="flex flex-column spacer ph hide-xs-only"></div>

            <section class="flex flex-column footer-col">
                <div class="flex flex-row tiny align-center">
                    <a href="{{ $supportUrl }}" class="text-grey-3">Support</a> /
                    <a href="{{ $logoutUrl }}" class="text-grey-3">Logout</a>
                </div>
            </section>
        </div>
    </div>
</footer>