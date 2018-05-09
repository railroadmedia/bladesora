<div class="form-group">
    <input id="{{ $inputId }}"
           name="{{ $inputName }}"
           value="{{ $inputValue ?? '' }}"
           type="text"
           class="flatpickr
            {{ !empty($enableTime) && $enableTime === true ? 'enable-time' : '' }}
            {{ count($inputErrors) > 0 ? 'has-error' : '' }}">
    <label for="{{ $inputId }}"
           class="{{ $brand }}">{{ $inputLabel }}</label>

    @include('bladesora::members.inputs.partials._errors', [
        "inputErrors" => $inputErrors
    ])
</div>