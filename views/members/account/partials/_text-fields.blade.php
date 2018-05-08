@foreach($fields as $key => $value)
    <div class="flex flex-row text-field flex-auto mb-1">
        <div class="flex flex-column key">
            <p class="body font-bold">{{ ucwords($key) }}</p>
        </div>
        <div class="flex flex-column value">
            <p class="body">{{ $value }}</p>
        </div>
    </div>
@endforeach