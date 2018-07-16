<form id="{{ $formId }}"
      action="{{ $formAction }}"
      method="{{ $formMethod }}"
      class="payment-form">

    <input type="hidden" name="_method" value="{{ $methodField }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input name="stripe-publishable-key"
        id="stripe-publishable-key"
        type="hidden"
        value="{{ \Railroad\Ecommerce\Services\ConfigService::$paymentGateways['stripe']['recordeo']['stripe_publishable_key'] }}">

    @if(!empty($editingPayment) && $editingPayment === true)
        <div class="method-fields mb-2">
            <div class="flex flex-row ph-3">
                <div class="flex flex-column">
                    <div class="flex flex-row mb-2">
                        @include('bladesora::members.inputs.radio-input', [
                            "inputID" => "newMethod",
                            "inputName" => "payment_method_type",
                            "inputLabel" => "New Payment Method",
                            "inputValue" => null,
                            "checked" => true
                        ])
                    </div>

                    @if(!empty($activeMethods))
                        @foreach($activeMethods as $activeMethod)
                            <div class="flex flex-row mb-2">
                                @include('bladesora::members.inputs.radio-input', [
                                    "inputID" => "methodType" . ucwords($activeMethod['type']),
                                    "inputName" => "payment_method_type",
                                    "inputLabel" => $activeMethod['type'] === 'paypal' ?
                                                    'Use Paypal Account - ' . $activeMethod['email'] :
                                                    'Use ' . ucwords($activeMethod['type']) .
                                                    ' ending in ' . $activeMethod['lastFourDigits'],
                                    "inputValue" => $activeMethod['id'],
                                    "checked" => false
                                ])
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    @endif

    <div class="type-fields">
        <div class="flex flex-row ph-3">
            <div class="flex flex-column mb-1">
                @include('bladesora::members.inputs.select-input', [
                    "brand" => "recordeo",
                    "inputId" => "methodType",
                    "inputName" => "method_type",
                    "inputLabel" => "Payment Method Type",
                    "inputValue" => '',
                    "inputOptions" => ['visa', 'mastercard', 'amex', 'paypal'],
                    "inputErrors" => [],
                ])
            </div>
        </div>
    </div>

    <div class="credit-card-fields hide">
        <div class="flex flex-row ph-3">
            <div class="flex flex-column mb-1">
                @include('bladesora::members.inputs.text-input', [
                    "brand" => "recordeo",
                    "type" => "text",
                    "inputId" => "ccNumber",
                    "inputName" => "cc_number",
                    "inputLabel" => "Credit Card Number",
                    "inputValue" => "",
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
                    "inputValue" => "",
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
                    "inputValue" => "",
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
                    "inputValue" => "",
                    "inputErrors" => [],
                ])
            </div>
        </div>

        <div class="flex flex-row ph-3 mt-1 inline-inputs">
            <div class="flex flex-column">
                @include('bladesora::members.inputs.select-input', [
                    "brand" => "recordeo",
                    "inputId" => "cardCountry",
                    "inputName" => "country",
                    "inputLabel" => "Country",
                    "inputValue" => "",
                    "inputOptions" => [
                        'Canada',
                        'United States'
                    ],
                    "inputErrors" => [],
                ])
            </div>
            <div class="flex flex-column hide">
                @include('bladesora::members.inputs.select-input', [
                    "brand" => "recordeo",
                    "inputId" => "cardRegion",
                    "inputName" => "region",
                    "inputLabel" => "Province",
                    "disabled" => true,
                    "inputValue" => "",
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
    </div>

    <div class="paypal-fields hide">
        <div class="flex flex-row ph-3">
            <div class="flex flex-column mb-1">
                <p class="tiny text-dark font-italic">Click the Save button to be redirected to PayPal for authentication.</p>
            </div>
        </div>
    </div>

    <div class="flex flex-row ph-3 mt-2 mb-3">
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

    @include('bladesora::members.partials._secure-connection')
</form>