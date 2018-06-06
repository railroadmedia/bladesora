<div class="flex flex-row form-group align-v-center">
    <span class="radio-input mr-1">
        <input id="{{ $inputID }}"
               name="{{ $inputName }}"
               {{ !empty($checked) && $checked === true ? 'checked' : '' }}
               value="{{ $inputValue ?? '' }}"
               type="radio">

        <span class="toggle"></span>
    </span>

    <label for="{{ $inputID }}" class="toggle-label">
        {{ $inputLabel }}
    </label>
</div>