<div class="credit-card-box corners-5 {{ $activeMethod['type'] }}">

    @if($activeMethod['isDefault'] === true)
        <div class="default-overlay ba-{{ $brand }}-1 corners-5">
                        <span class="tiny font-bold uppercase bg-{{ $brand }} text-white">
                            Default
                        </span>
        </div>
    @endif

    @include('bladesora::members.account.settings.payments.partials._payment-card')
</div>

<div class="flex flex-row mt-2">
    <div class="flex flex-column">
        @include('bladesora::members.account.partials._text-fields', [
            "fields" => [
                "Country" => $activeMethod['country'],
                "State/Province" => $activeMethod['region'],
            ]
        ])
    </div>
</div>

<div class="flex flex-row">
    <button class="btn mr-1"
            data-open-modal="paymentModal">
        <span class="bg-black inverted text-black corners-3 short">
            Edit
        </span>
    </button>

    <button class="btn ml-1">
        <span class="bg-error inverted text-error corners-3 short">
            Delete
        </span>
    </button>
</div>

<div id="paymentModal" class="modal">
    <div class="flex flex-column bg-white corners-3 shadow">
        <div class="flex flex-row pa-3 align-v-center">
            <div class="flex flex-column">
                <h2 class="subheading">Edit: Payment Method</h2>
            </div>
            <div class="flex flex-column">
                <div class="flex flex-row flex-auto align-h-right" style="font-size:32px;">
                    <i class="fab fa-cc-visa ml-1"></i>
                    <i class="fab fa-cc-mastercard ml-1"></i>
                    <i class="fab fa-cc-amex ml-1"></i>
                    <i class="fab fa-cc-paypal ml-1"></i>
                </div>
            </div>
        </div>

        <form>
            @if($activeMethod['type'] !== 'paypal')
                <div class="flex flex-row ph-3">
                    <div class="flex flex-column mb-1">
                        @include('bladesora::members.inputs.text-input', [
                            "brand" => "recordeo",
                            "type" => "text",
                            "disabled" => true,
                            "inputId" => "ccNumber",
                            "inputName" => "cc_number",
                            "inputLabel" => "Credit Card Number",
                            "inputValue" => "•••• •••• •••• " . $activeMethod['lastFourDigits'],
                            "inputErrors" => [],
                        ])
                    </div>
                </div>

                <div class="flex flex-row ph-3 inline-inputs">
                    <div class="flex flex-column">
                        @include('bladesora::members.inputs.select-input', [
                            "brand" => "recordeo",
                            "inputId" => "expiryMonth",
                            "inputName" => "expiry_month",
                            "inputLabel" => "Expiry Month",
                            "inputValue" => "02",
                            "inputOptions" => ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
                            "inputErrors" => [],
                        ])
                    </div>
                    <div class="flex flex-column">
                        @include('bladesora::members.inputs.select-input', [
                            "brand" => "recordeo",
                            "inputId" => "expiryYear",
                            "inputName" => "expiry_year",
                            "inputLabel" => "Expiry Year",
                            "inputValue" => "2020",
                            "inputOptions" => range(date('Y'), date('Y') + 30),
                            "inputErrors" => [],
                        ])
                    </div>
                    <div class="flex flex-column smaller">
                        @include('bladesora::members.inputs.text-input', [
                            "brand" => "recordeo",
                            "type" => "text",
                            "inputId" => "cvvNumber",
                            "inputName" => "cvv",
                            "inputLabel" => "CVC/CVV",
                            "inputValue" => "928",
                            "inputErrors" => [],
                        ])
                    </div>
                </div>

                <div class="flex flex-row ph-3 mt-1 inline-inputs">
                    <div class="flex flex-column">
                        @include('bladesora::members.inputs.text-input', [
                            "brand" => "recordeo",
                            "type" => "text",
                            "inputId" => "nameOnCard",
                            "inputName" => "card_name",
                            "inputLabel" => "Name on Card",
                            "inputValue" => "Jared Falk",
                            "inputErrors" => [],
                        ])
                    </div>
                    <div class="flex flex-column">
                        @include('bladesora::members.inputs.select-input', [
                            "brand" => "recordeo",
                            "inputId" => "cardCountry",
                            "inputName" => "country",
                            "inputLabel" => "Country",
                            "inputValue" => "Canada",
                            "inputOptions" => [
                                'Canada',
                                'United States'
                            ],
                            "inputErrors" => [],
                        ])
                    </div>
                    <div class="flex flex-column smaller">
                        @include('bladesora::members.inputs.select-input', [
                            "brand" => "recordeo",
                            "inputId" => "cardRegion",
                            "inputName" => "region",
                            "inputLabel" => "Province",
                            "inputValue" => "BC",
                            "inputOptions" => [
                                'BC',
                                'AB',
                                'SK',
                                'MN',
                                'ON',
                                'QC',
                                'NB',
                                'NL',
                                'NS',
                                'PE',
                                'YT',
                                'NT',
                                'NU',
                            ],
                            "inputErrors" => [],
                        ])
                    </div>
                </div>
            @endif

            <div class="flex flex-row ph-3 pb-3">
                <button class="btn collapse-150 mr-1"
                        type="submit">
                            <span class="bg-recordeo text-white corners-3 short">
                                Save
                            </span>
                </button>

                <a class="btn collapse-150 close-modal corners-3 flat text-black flat short">
                    Cancel
                </a>
            </div>
        </form>

        <span class="close-modal close-button">
                    <i class="fas fa-times"></i>
                </span>
    </div>
</div>