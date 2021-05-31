@component('bladesora::members.account.settings.edit-form')
    @slot('formTitle')
        Signature
    @endslot

    @slot('modalId')
        signatureModal
    @endslot

    @slot('formData')

        <div class="flex flex-column grow">
            <p class="body tw-mb-3">{{ $signature }}</p>

            <p class="tiny text-grey-3 font-italic">
                This will appear below your posts on the forums page.
            </p>
        </div>

    @endslot

    @slot('formModal')
        <div id="signatureModal" class="modal">
            <div class="flex flex-column bg-white corners-3 shadow">
                <div class="flex flex-row pa-3">
                    <h2 class="subheading">Edit: Signature</h2>
                </div>

                <form method="POST" action="{{ $action }}">
                    {{ method_field($method) }}
                    {{ csrf_field() }}

                    <div class="flex flex-row ph-3 mb-1">
                        <div class="flex flex-column">
                            <div class="flex flex-row mb-1">
                                <div class="flex flex-column">
                                    @include('bladesora::members.inputs.textarea-input', [
                                        "brand" => $brand,
                                        "inputId" => "signature",
                                        "inputName" => "signature",
                                        "inputLabel" => "Signature",
                                        "inputValue" => $signature,
                                        "inputErrors" => [],
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row ph-3 pb-3">
                        <button class="btn collapse-150 mr-1">
                            <span class="bg-{{ $brand }} text-white corners-3 short">
                                Save
                            </span>
                        </button>

                        <a class="btn collapse-150 close-modal corners-3 flat text-black flat short">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    @endslot
@endcomponent
