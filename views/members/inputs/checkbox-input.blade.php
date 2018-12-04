<div class="form-group">
    <input id="{{ $inputId }}"
           name="{{ $inputName }}"
           value="{{ $inputValue ?? 'on' }}"
           {{ !empty($checked) && $checked === true ? 'checked' : '' }}
           type="checkbox">
    <label for="{{ $inputId }}"
           class="toggle-label {{ $labelClasses ?? '' }}">{{ $inputLabel }}</label>
</div>
