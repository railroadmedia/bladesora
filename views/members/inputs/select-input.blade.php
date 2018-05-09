<div class="form-group">
    <select id="{{ $inputId }}"
            name="{{ $inputName }}"
            class="{{ count($inputErrors) > 0 ? 'has-error' : '' }}">
        <option value="" style="display:none;"></option>
        @foreach($inputOptions as $option)
            <option value="{{ $option }}"
                    {{ $inputValue === $option ? 'selected' : '' }}>
                {{ ucwords($option) }}
            </option>
        @endforeach
    </select>
    <label for="{{ $inputId }}"
           class="{{ $brand }}">
        {{ $inputLabel }}
    </label>

    @include('bladesora::members.inputs.partials._errors', [
        "inputErrors" => $inputErrors
    ])
</div>

