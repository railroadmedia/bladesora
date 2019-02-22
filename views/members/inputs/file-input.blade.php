<div class="form-group file-input">
    <input id="{{ $inputId }}"
           name="{{ $inputName }}"
           value="{{ $inputValue ?? '' }}"
           type="file"
           class="{{ !empty($inputErrors) && count($inputErrors) > 0 ? 'has-error' : '' }}"
            {{ !empty($disabled) && $disabled === true ? 'disabled' : '' }}>

    <label for="{{ $inputId }}"
           class="{{ $brand }} flex-center">
        <button class="btn no-events collapse-250">
            <span class="text-black inverted bg-black">
                <i class="fas fa-upload mr-1"></i>
                {{ $inputLabel }}
            </span>
        </button>
    </label>

    <p class="body file-name text-center text-grey-3 mt-1">
        {{ $inputValue }}
    </p>

    @include('bladesora::members.inputs.partials._errors', [
        "inputErrors" => $inputErrors
    ])
</div>