<div class="flex flex-row align-v-center mb-2">
    <div class="flex flex-column">
        <h4 class="title pr-1">
            {{ $plan['title'] }}
        </h4>
    </div>
    <div class="flex flex-column payment-col hide-xs-only">
        <p class="tiny font-bold text-right uppercase">
            {{ $plan['method'] }}
        </p>
    </div>
    {{--<div class="flex flex-column edit-button">--}}
    {{--<button class="btn"--}}
    {{--data-open-modal="paymentModal{{ str_replace(' ', '', ucwords($plan['title'])) }}">--}}
    {{--<span class="bg-black inverted text-black corners-3 short">--}}
    {{--Edit--}}
    {{--</span>--}}
    {{--</button>--}}
    {{--</div>--}}
</div>

@foreach($plan['payments'] as $key => $payment)
    <div class="flex flex-row align-v-center no-decoration mb-1">
        <div class="flex flex-column">
            <a href="{{ url()->route('invoice.order', [$payment['orderId']]) }}" target="_blank">
                <p class="tiny font-bold">
                    <i class="fal fa-file-pdf mr-1"></i>
                    {{ \Carbon\Carbon::parse($payment['date'])->format('F j, Y') }}
                </p>
            </a>
        </div>
        <div class="flex flex-column payment-col hide-xs-only">
            <p class="tiny font-italic text-grey-3 uppercase">
                @if($plan['total'] !== null)
                    {{ $key }} of {{ $plan['total'] }}
                @else
                    Membership
                @endif
            </p>
        </div>
        <div class="flex flex-column edit-button align-h-right">
            <p class="tiny uppercase font-italic text-grey-3">
                ${{ number_format($payment['amount'], 2) }}
            </p>
        </div>
    </div>
@endforeach

<div id="paymentModal{{ str_replace(' ', '', ucwords($plan['title'])) }}" class="modal">
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

        @include('bladesora::members.account.settings.payments.partials._payment-method-form', [
            "editingPayment" => true,
            "formId" => "paymentPlan" . str_replace(' ', '', ucwords($plan['title'])),
            "formAction" => "",
            "formMethod" => "",
            'methodField' => "",
            "activeMethod" => null
        ])
    </div>
</div>