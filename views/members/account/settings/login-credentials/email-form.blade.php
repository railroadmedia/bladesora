@component('bladesora::members.account.settings.edit-form')
    @slot('formTitle')
        Login Email
    @endslot

    @slot('modalId')
        loginEmailModal
    @endslot

    @slot('formData')
        <div class="flex flex-column">
            @include('bladesora::members.account.partials._text-fields', [
                "fields" => [
                    "Login Email" => "victor@mailinator.com",
                ]
            ])

            @if(!empty($pending))
                <p class="tiny text-error font-italic">
                    Email change pending confirmation
                </p>
            @endif
        </div>
    @endslot

    @slot('formModal')
        <div id="loginEmailModal" class="modal">
            <div class="flex flex-column bg-white corners-3 shadow">
                <div class="flex flex-row pa-3">
                    <h2 class="subheading">Edit: Login Email</h2>
                </div>

                <form method="POST" action="{{ $action }}">
                    {{ method_field($method) }}
                    {{ csrf_field() }}

                    <div class="flex flex-row ph-3 mb-1">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => "recordeo",
                                "inputId" => "loginEmail",
                                "inputName" => "login_email",
                                "inputLabel" => "Login Email",
                                "inputValue" => "",
                                "inputErrors" => [],
                                "type" => "email",
                            ], $emailInput ?? []))
                        </div>
                    </div>

                    <div class="flex flex-row ph-3 pb-3">
                        <button class="btn collapse-150 mr-1">
                            <span class="bg-recordeo text-white corners-3 short">
                                Save
                            </span>
                        </button>

                        <a class="btn collapse-150 close-modal corners-3 flat text-black flat short">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>

            <span class="close-modal close-button">
                <i class="fas fa-times"></i>
            </span>
        </div>
    @endslot
@endcomponent