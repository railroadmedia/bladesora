@component('bladesora::members.account.settings.edit-form', ["brand" => "recordeo"])
    @slot('formTitle')
        Display Name
    @endslot

    @slot('modalId')
        displayNameModal
    @endslot

    @slot('formData')
        <div class="flex flex-column">
            @include('bladesora::members.account.partials._text-fields', [
                "fields" => [
                    "Display Name" => $displayName,
                ],
                "showEmpty" => true
            ])
            <p class="tiny text-grey-3 font-italic">
                This is the name other users will see on your profile, comments and forum posts.
            </p>
        </div>
    @endslot

    @slot('formModal')
        <div id="displayNameModal" class="modal">
            <div class="flex flex-column bg-white corners-10 shadow">
                <div class="flex flex-row pa-3">
                    <h2 class="subheading">Edit: Display Name</h2>
                </div>

                <form method="POST" action="{{ $action }}">
                    {{ method_field($method) }}
                    {{ csrf_field() }}

                    <div class="flex flex-row ph-3 mb-1">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand,
                                "type" => "text",
                                "inputId" => "displayName",
                                "inputName" => "display_name",
                                "inputLabel" => "Display Name",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $displayNameInput ?? []))
                        </div>
                    </div>

                    <div class="flex flex-row ph-3 pb-3">
                        <button class="btn collapse-150 mr-1">
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