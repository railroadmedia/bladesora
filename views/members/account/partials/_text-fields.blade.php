@foreach($fields as $key => $value)
    @if($value || !empty($showEmpty))
        <div class="flex flex-row text-field flex-auto mb-1">
            <div class="flex flex-column key">
                <p class="body font-bold">{{ ucwords($key) }}</p>
            </div>
            <div class="flex flex-column value grow">
                <p class="body">{{ $value }}</p>
            </div>
        </div>
    @endif
@endforeach