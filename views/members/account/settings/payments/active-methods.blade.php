<div class="flex flex-column">
    <div class="flex flex-row pa-3">
        <div class="flex flex-column grow">
            <h2 class="subheading mb-2">
                Active Payment Methods
            </h2>

            <p class="tiny text-grey-3">Below you’ll see a list of your payment methods. If you’d like to change the payment method used for your Recordeo Membership add a new one here then update it in the Upcoming Payments area below. </p>
        </div>
    </div>

    <input
        id="vuePropData"
        type="hidden"
        data-current-user="{{ $currentUser }}"
        data-active-methods="{{ json_encode($activeMethods) }}">

    <div id="paymentsElement"></div>

    <input name="stripe-publishable-key"
        id="stripe-publishable-key"
        type="hidden"
        value="{{ \Railroad\Ecommerce\Services\ConfigService::$paymentGateways['stripe']['recordeo']['stripe_publishable_key'] }}">
</div>
