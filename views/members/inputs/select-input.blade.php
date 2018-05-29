<div class="form-group">
    <select id="{{ $inputId }}"
            name="{{ $inputName }}"
            class="{{ count($inputErrors) > 0 ? 'has-error' : '' }}
            {{ !empty($borderless) && $borderless === true ? 'borderless' : '' }}"
            {{ !empty($disabled) && $disabled === true ? 'disabled' : '' }}>
        <option value="" style="display:none;"></option>
        @foreach($inputOptions as $option)
            <option value="{{ (string)$option }}"
                    {{ $inputValue === (string)$option ? 'selected' : '' }}>
                {{ ucwords((string)$option) }}
            </option>
        @endforeach
    </select>
    <label for="{{ $inputId }}"
           class="{{ $brand }}">
        {{ $inputLabel }}
    </label>

    @include('bladesora::members.inputs.partials._errors', [
        "inputErrors" => $inputErrors
    ])
</div>

