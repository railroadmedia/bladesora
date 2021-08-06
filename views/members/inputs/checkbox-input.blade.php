<div class="form-group">
    <div class="flex flex-row align-v-center">
        <input id="{{ $inputId }}"
               name="{{ $inputName }}"
               value="{{ $inputValue ?? 'on' }}"
               {{ !empty($checked) && $checked === true ? 'checked' : '' }}
               type="checkbox">
        <label for="{{ $inputId }}"
               class="toggle-label ml-1 {{ $labelClasses ?? '' }}">{{ $inputLabel }}</label>
    </div>
</div>
