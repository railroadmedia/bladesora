<div class="form-group">
    <textarea id="{{ $inputId }}"
              name="{{ $inputName }}"
              class="{{ !empty($inputErrors) && count($inputErrors) > 0 ? 'has-error' : '' }}"
            {{ !empty($disabled) && $disabled === true ? 'disabled' : '' }}>{{ $inputValue ?? '' }}</textarea>
    <label for="{{ $inputId }}"
           class="{{ $brand }}">{{ $inputLabel }}</label>

    @include('bladesora::members.inputs.partials._errors', [
        "inputErrors" => $inputErrors
    ])
</div>