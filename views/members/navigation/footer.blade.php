<footer class="container fluid bg-white shadow text-dark">
    <div class="container">
        <div class="flex flex-row flex-wrap align-h-center">
            <section class="flex flex-column footer-col">
                <div class="flex flex-row tiny align-center">
                    Musora Media Inc &copy; {{ date('Y') }} - <a href="{{ $termsUrl }}">Terms</a> / <a href="{{ $privacyUrl }}">Privacy</a>
                </div>
            </section>

            <div class="flex flex-column spacer ph hide-xs-only"></div>

            <section class="flex flex-column footer-col">
                <div class="flex flex-row tiny align-center">
                    <a href="{{ $supportUrl }}">Support</a> / <a href="{{ $logoutUrl }}">Logout</a>
                </div>
            </section>
        </div>
    </div>
</footer>