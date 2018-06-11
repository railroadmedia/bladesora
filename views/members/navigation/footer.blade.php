<footer class="container fluid bg-white shadow text-dark">
    <div class="container">
        <div class="flex flex-row flex-wrap align-h-center">
            <section class="flex flex-column footer-col">
                <div class="flex flex-row tiny align-center">
                    Musora Media Inc &copy; {{ date('Y') }} -
                    <a href="{{ $termsUrl }}" target="_blank" class="text-dark">Terms</a> /
                    <a href="{{ $privacyUrl }}" target="_blank" class="text-dark">Privacy</a>
                </div>
            </section>

            <div class="flex flex-column spacer ph hide-xs-only"></div>

            <section class="flex flex-column footer-col">
                <div class="flex flex-row tiny align-center">
                    <a href="{{ $supportUrl }}" class="text-dark">Support</a> /
                    <a href="{{ $logoutUrl }}" class="text-dark">Logout</a>
                </div>
            </section>
        </div>
    </div>
</footer>