<div class="flex flex-column">
    <div class="flex flex-row pa-3">
        <div class="flex flex-column grow">
            <h2 class="subheading mb-2">
                Active Payment Methods
            </h2>

            <p class="tiny text-dark">Below you’ll see a list of your payment methods. If you’d like to change the payment method used for your Recordeo Membership add a new one here then update it in the Upcoming Payments area below. </p>
        </div>
    </div>

    <div class="flex flex-row flex-wrap ph-2">
        @foreach($activeMethods as $index => $activeMethod)
            <div id="{{ $activeMethod['id'] }}" class="flex flex-column xs-12 sm-12 md-6 cc-col ph-2 mb-3">
                @include('bladesora::members.account.settings.payments.partials._payment-method', [
                        "index" => $index,
                        "activeMethod" => $activeMethod,
                        "showDelete" => count($activeMethods) > 1
                    ])
            </div>
        @endforeach

        <input
            id="vuePropData"
            type="hidden"
            data-current-user="{{ $currentUser }}">

        <div id="paymentsElement"></div>

        <input name="stripe-publishable-key"
            id="stripe-publishable-key"
            type="hidden"
            value="{{ \Railroad\Ecommerce\Services\ConfigService::$paymentGateways['stripe']['recordeo']['stripe_publishable_key'] }}">
    </div>
</div>
