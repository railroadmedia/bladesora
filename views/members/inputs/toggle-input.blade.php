<div class="flex flex-row form-group align-v-center">
    <label for="{{ $inputID }}" class="toggle-label">
        {{ $inputLabel }}
    </label>

    <span class="toggle-input">
        <input id="{{ $inputID }}"
               name="{{ $inputName }}"
               {{ !empty($checked) && $checked === true ? 'checked' : '' }}
               type="checkbox">

        <span class="toggle">
            <span class="handle"></span>
        </span>
    </span>
</div>