<div class="form-group">
    <textarea id="{{ $inputId }}"
              name="{{ $inputName }}"
              class="{{ !empty($inputErrors) && count($inputErrors) > 0 ? 'has-error' : '' }} {{ $customClass ?? '' }}"
            {{ !empty($disabled) && $disabled === true ? 'disabled' : '' }}>{{ $inputValue ?? '' }}</textarea>
    @if(!empty($inputLabel))
        <label for="{{ $inputId }}"
               class="{{ $brand }}">{{ $inputLabel }}</label>
    @endif

    @include('bladesora::members.inputs.partials._errors', [
        "inputErrors" => $inputErrors
    ])
</div>