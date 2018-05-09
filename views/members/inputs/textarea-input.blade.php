<div class="form-group">
    <textarea id="{{ $inputId }}"
              name="{{ $inputName }}"
              class="{{ count($inputErrors) > 0 ? 'has-error' : '' }}">{{ $inputValue ?? '' }}</textarea>
    <label for="{{ $inputId }}"
           class="{{ $brand }}">{{ $inputLabel }}</label>

    @include('bladesora::members.inputs.partials._errors', [
        "inputErrors" => $inputErrors
    ])
</div>