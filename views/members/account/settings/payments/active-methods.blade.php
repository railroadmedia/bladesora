<div class="flex flex-column">
    <h2 class="subheading mb-2">
        Your Active Payment Methods
    </h2>

    <p class="tiny text-dark">Your Recordeo subscription will automatically be charged by default to the credit card below. If you want to use a different credit card, just add a new payment method and select the new one as default.</p>

    <div class="flex flex-row flex-wrap mt-3">
        @foreach($activeMethods as $activeMethod)
            <div class="flex flex-column xs-12 sm-12 md-6 cc-col">
                @include('bladesora::members.account.settings.payments.partials._payment-method', [
                        "activeMethod" => $activeMethod
                    ])


            </div>
        @endforeach
        <div class="flex flex-column xs-12 sm-12 md-6 cc-col">
            <div class="credit-card-box">
                <div class="card flex-center ba-dark-2 dashed corners-5 pointer">
                    <h3 class="title text-dark uppercase dense">
                        <i class="fas fa-plus mr-1"></i>
                        Add Payment Method
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
