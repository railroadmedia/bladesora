<div class="form-group date-input">
    <input id="{{ $inputId }}"
           name="{{ $inputName }}"
           value="{{ $inputValue ?? '' }}"
           type="text"
           class="flatpickr
            {{ !empty($enableTime) && $enableTime === true ? 'enable-time' : '' }}
            {{ !empty($inputErrors) && count($inputErrors) > 0 ? 'has-error' : '' }}">
    <label for="{{ $inputId }}"
           class="{{ $brand }}">{{ $inputLabel }}</label>

    @include('bladesora::members.inputs.partials._errors', [
        "inputErrors" => $inputErrors
    ])
</div>