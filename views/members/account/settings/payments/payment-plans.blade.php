<div class="flex flex-column">
    <div class="flex flex-row pa-3">
        <div class="flex flex-column grow">
            <h2 class="subheading capitalize">
                Payment Plans &amp; History
            </h2>
        </div>
    </div>

    @foreach($paymentPlans as $plan)
        <div class="flex flex-row ph-3 mb-3">
            <div class="flex flex-column">
                @include('bladesora::members.account.settings.payments.partials._payment-plan')
            </div>
        </div>
    @endforeach
</div>