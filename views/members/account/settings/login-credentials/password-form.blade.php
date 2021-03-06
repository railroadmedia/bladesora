@component('bladesora::members.account.settings.edit-form')
    @slot('formTitle')
        Login Password
    @endslot

    @slot('modalId')
        loginPasswordModal
    @endslot

    @slot('formData')
        <div class="flex flex-column">
            @include('bladesora::members.account.partials._text-fields', [
                "fields" => [
                    "Current Password" => "********",
                ],
                "showEmpty" => true
            ])
        </div>
    @endslot

    @slot('formModal')
        <div id="loginPasswordModal" class="modal">
            <div class="flex flex-column bg-white corners-3 shadow">
                <div class="flex flex-row pa-3">
                    <h2 class="subheading">Edit: Login Password</h2>
                </div>

                <form method="POST" action="{{ $action }}">
                    {{ method_field($method) }}
                    {{ csrf_field() }}

                    <div class="flex flex-row ph-3 mb-3">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand,
                                "type" => "password",
                                "inputId" => "currentPassword",
                                "inputName" => "current_password",
                                "inputLabel" => "Current Password",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $currentPasswordInput ?? []))
                        </div>
                    </div>

                    <div class="flex flex-row ph-3 mb-1">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand,
                                "type" => "password",
                                "inputId" => "loginPassword",
                                "inputName" => "login_password",
                                "inputLabel" => "New Password",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $newPasswordInput ?? []))
                        </div>
                    </div>

                    <div class="flex flex-row ph-3 mb-1">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand,
                                "type" => "password",
                                "inputId" => "loginPasswordConfirm",
                                "inputName" => "login_password_confirm",
                                "inputLabel" => "Confirm Password",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $newPasswordConfirmationInput ?? []))
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