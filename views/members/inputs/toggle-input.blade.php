<div class="flex flex-row form-group align-v-center">
    <label for="{{ $inputID }}" class="toggle-label">
        {{ $inputLabel }}
    </label>

    <span class="toggle-input">
        {{-- the hidden input will force the checkbox to return false if its not checked --}}
        <input type="hidden" name="{{ $inputName }}" value="0">

        <input id="{{ $inputID }}"
               name="{{ $inputName }}"
               value="{{ $inputValue ?? 'on' }}"
               {{ !empty($checked) && $checked === true ? 'checked' : '' }}
               type="checkbox">

        <span class="toggle">
            <span class="handle"></span>
        </span>
    </span>
</div>