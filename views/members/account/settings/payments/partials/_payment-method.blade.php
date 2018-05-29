{{-- ----------------------------------------------------------------------
  -- Payment Type Card
  -- ----------------------------------------------------------------------}}
<div class="credit-card-box corners-5 {{ $activeMethod['type'] }}">
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

@if($showDelete)
    <div class="flex flex-row">
        <button class="btn delete-payment"
                data-method-to-delete="{{ $activeMethod['id'] }}">
        <span class="bg-error inverted text-error corners-3 short">
            Delete
        </span>
        </button>
    </div>
@endif