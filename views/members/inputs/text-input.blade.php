<div class="form-group">
    <input id="{{ $inputId }}"
           name="{{ $inputName }}"
           value="{{ $inputValue ?? '' }}"
           type="{{ !empty($type) ? $type : 'text' }}"
           class="{{ !empty($inputErrors) && count($inputErrors) > 0 ? 'has-error' : '' }} {{ $customClasses ?? '' }}"
           autocomplete="{{ $autoComplete ?? 'off' }}"
           spellcheck="false"
            {{ !empty($disabled) && $disabled === true ? 'disabled' : '' }}>
    <label for="{{ $inputId }}"
           class="{{ $brand }}">{{ $inputLabel }}</label>

    @include('bladesora::members.inputs.partials._errors', [
        "inputErrors" => $inputErrors
    ])
</div>