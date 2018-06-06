<div class="flex flex-row form-group align-v-center">
    <span class="toggle-input mr-1">
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

    <label for="{{ $inputID }}" class="toggle-label">
        {{ $inputLabel }}
    </label>
</div>