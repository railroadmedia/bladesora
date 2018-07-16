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

        <div class="flex flex-column xs-12 sm-12 md-6 cc-col ph-2 mb-3">
            <div class="credit-card-box">
                <div class="card flex-center ba-dark-2 dashed corners-5 pointer"
                    data-open-modal="paymentModalNew">
                    <h3 class="title text-dark uppercase dense">
                        <i class="fas fa-plus mr-1"></i>
                        Add Payment Method
                    </h3>
                </div>
            </div>

            <div id="paymentModalNew" class="modal">
                <div class="flex flex-column bg-white corners-3 shadow">
                    <div class="flex flex-row pa-3 align-v-center">
                        <div class="flex flex-column">
                            <h2 class="subheading">Add New Payment Method</h2>
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

                    @include('bladesora::members.account.settings.payments.partials._payment-method-form', [
                        "formId" => "paymentMethodNew",
                        "formAction" => route('payment-method.store')",
                        "formMethod" => "POST",
                        "methodField" => "PUT",
                        "activeMethod" => null
                    ])

                    <span class="close-modal close-button">
                        <i class="fas fa-times"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
