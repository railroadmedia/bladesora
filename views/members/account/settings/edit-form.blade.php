<div class="flex flex-column">
    <div class="flex flex-row flex-auto align-v-center mb-2">
        <div class="flex flex-column">
            <h2 class="subheading">
                {{ $formTitle }}
            </h2>
        </div>
        <div class="flex flex-column edit-button">
            <button class="btn" data-open-modal="{{ $modalId }}">
                <span class="text-black bg-black inverted corners-3 short">
                    Edit
                </span>
            </button>
        </div>
    </div>
    <div class="flex flex-row">
        <div class="flex flex-column">
            <div class="flex flex-row">
                {{ $formData }}
            </div>
        </div>
    </div>

    {{ $formModal }}
</div>