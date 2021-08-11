@component('bladesora::members.account.settings.edit-form')
    @slot('formTitle')
        Forum Signature
    @endslot

    @slot('modalId')
        signatureModal
    @endslot

    @slot('formData')

        <div class="flex flex-column grow body tw-break-words">

            {!! html_entity_decode($signature) !!}

            <p class="tiny text-grey-3 font-italic tw-mt-3">
                This will appear below your posts on the forums page.
            </p>
        </div>

    @endslot

    @slot('formModal')
        <div id="signatureModal" class="modal">
            <div class="flex flex-column bg-white corners-10 shadow">
                <div class="pa-3 tw-pb-3">
                    <h2 class="subheading">Edit: Signature</h2>
                    <p class="tw-mt-1 tw-italic tw-text-13 tw-text-gray-400">Limit of 200 characters</p>
                    <p id="signatureErrorMessage" class="tw-text-13 tw-text-red-500 tw-mt-2 tw-transition tw-opacity-0">You have entered more than 200 characters.</p>
                </div>
                <span>
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
                        <button id="signatureButton" class="btn collapse-150 mr-1">
                            <span class="bg-{{ $brand }} text-white corners-10 short">
                                Save
                            </span>
                        </button>

                        <a class="btn collapse-150 close-modal corners-10 flat text-black flat short">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    @endslot
@endcomponent
