<div class="card">
    <div class="flex flex-column pa-3">
        <div class="flex flex-row text-white">
            <div class="flex flex-column">
                <h6 class="tiny uppercase font-bold">
                    {{ $activeMethod['type'] }}
                </h6>
            </div>

            <div class="flex flex-column flex-auto">
                <i class="fab fa-cc-{{ $activeMethod['type'] }} cc-icon"></i>
            </div>
        </div>

        @if($activeMethod['type'] !== 'paypal')
            <div class="flex flex-row text-white grow mb-1 align-center">
                <div class="flex flex-column">
                    <h1 class="heading text-center">
                        &#8226;&#8226;&#8226;&#8226;
                        &#8226;&#8226;&#8226;&#8226;
                        &#8226;&#8226;&#8226;&#8226;
                        {{ $activeMethod['lastFourDigits'] }}
                    </h1>
                </div>
            </div>

            <div class="flex flex-row text-white align-v-center">
                <div class="flex flex-column">
                    <h6 class="tiny uppercase dense font-bold">
                        {{ $activeMethod['nameOnCard'] }}
                    </h6>
                </div>

                <div class="flex flex-column flex-auto">
                    <p class="tiny uppercase dense">
                        expires
                        <span class="title ml-1 dense">
                            {{ $activeMethod['expiryMonth'] }}/{{ substr($activeMethod['expiryYear'], 2) }}
                        </span>
                    </p>
                </div>
            </div>
        @else
            <div class="flex flex-row grow align-center text-white">
                <h1 class="subheading dense grow text-center">
                    {{ $activeMethod['email'] }}
                </h1>
            </div>
        @endif
    </div>
</div>