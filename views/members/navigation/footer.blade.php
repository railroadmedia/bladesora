<footer class="container fluid bg-white shadow text-grey-3 collapsed-xs">
    <div class="container">
        <div class="flex flex-row flex-wrap align-h-center">
            <section class="flex flex-column footer-col">
                <div class="flex flex-row tiny align-v-center">
                    Musora Media Inc &copy; {{ date('Y') }} -
                    <a href="{{ $termsUrl }}" target="_blank" class="text-grey-3">Terms</a>
                    /
                    <a href="{{ $privacyUrl }}" target="_blank" class="text-grey-3">Privacy</a>

                    @if(!empty($legacyResourcesUrl))
                        /
                        <a href="{{ $legacyResourcesUrl }}" target="_blank" class="text-grey-3">Legacy Resources</a>
                    @endif
                </div>
            </section>

            <div class="flex flex-column spacer ph hide-xs-only"></div>

            <section class="flex flex-column footer-col">
                <div class="flex flex-row tiny align-v-center">
                    <a href="{{ $supportUrl }}" class="text-grey-3">Support</a>
                    /
                    <a href="{{ $logoutUrl }}" class="text-grey-3">Logout</a>
                </div>
            </section>
        </div>
    </div>
</footer>