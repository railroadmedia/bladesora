<footer class="container fluid bg-grey-5 shadow text-grey-3 collapsed-xs">
    <div class="container">
        <div class="flex flex-row flex-wrap align-h-center">
            <section class="flex flex-column xs-12 md-3 pv-2">
                <div class="flex flex-row tiny align-v-center">
                    <img
                        alt="Musora Media Inc."
                        src="{{ $logoImage }}"
                        class="tw-w-28"
                    >
                </div>
            </section>

            <section class="flex flex-column xs-12 md-9 pv-2">
                <div class="flex flex-row tiny align-v-center">
                    <span class="hide-xs-only">Musora Media Inc &copy; {{ date('Y') }}</span>
                    <span class="hide-xs-only" style="margin:0 4px">-</span>
                    <a href="{{ $termsUrl }}" target="_blank" class="text-grey-3">Terms</a>
                    <span style="margin:0 4px">/</span>
                    <a href="{{ $privacyUrl }}" target="_blank" class="text-grey-3">Privacy</a>
                    <span style="margin:0 4px">/</span>
                    @if(!empty($legacyResourcesUrl))
                        <a href="{{ $legacyResourcesUrl }}" target="_blank" class="text-grey-3">Legacy Resources</a>
                        <span style="margin:0 4px">/</span>
                    @endif
                    <a href="{{ $supportUrl }}" class="text-grey-3">Support</a>
                    <span style="margin:0 4px">/</span>
                    <a href="{{ $logoutUrl }}" class="text-grey-3">Logout</a>
                </div>
            </section>
        </div>
    </div>
</footer>