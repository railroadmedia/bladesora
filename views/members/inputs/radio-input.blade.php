<div class="flex flex-row form-group align-v-center">
    <label for="{{ $inputID }}" class="toggle-label">
        {{ $inputLabel }}
    </label>

    <span class="radio-input">
        <input id="{{ $inputID }}"
               name="{{ $inputName }}"
               {{ !empty($checked) && $checked === true ? 'checked' : '' }}
               value="{{ $inputValue ?? '' }}"
               type="radio">

        <span class="toggle"></span>
    </span>
</div>