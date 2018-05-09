@component('bladesora::members.account.settings.edit-form')
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
                    "Display Name" => "victor guidera",
                ]
            ])
            <p class="tiny text-dark font-italic">
                This is the name other users will see on your profile, comments and forum posts.
            </p>
        </div>
    @endslot

    @slot('formModal')
        <div id="displayNameModal" class="modal">
            <div class="flex flex-column bg-white corners-3 shadow">
                <div class="flex flex-row pa-3">
                    <h2 class="subheading">Editing About</h2>
                </div>

                <form>
                    <div class="flex flex-row ph-3 inline-inputs">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', [
                                "brand" => "recordeo",
                                "inputId" => "profileName",
                                "inputName" => "full_name",
                                "inputLabel" => "Full Name",
                                "inputValue" => "",
                                "inputErrors" => [
                                    'This field is required'
                                ],
                            ])
                        </div>
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.select-input', [
                                "brand" => "recordeo",
                                "inputId" => "profileCountry",
                                "inputName" => "country",
                                "inputLabel" => "Country",
                                "inputValue" => "Canada",
                                "inputOptions" => [
                                    'Canada',
                                    'United States',
                                ],
                                "inputErrors" => [],
                            ])
                        </div>
                    </div>

                    <div class="flex flex-row ph-3 inline-inputs">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.select-input', [
                                "brand" => "recordeo",
                                "inputId" => "profileGender",
                                "inputName" => "gender",
                                "inputLabel" => "Gender",
                                "inputValue" => "Male",
                                "inputOptions" => [
                                    'Male',
                                    'Female',
                                ],
                                "inputErrors" => [],
                            ])
                        </div>
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.datetime-input', [
                                "brand" => "recordeo",
                                "inputId" => "profileBirthday",
                                "inputName" => "birthday",
                                "inputLabel" => "Birthday",
                                "inputValue" => \Carbon\Carbon::now(),
                                "inputErrors" => [],
                            ])
                        </div>
                    </div>

                    <div class="flex flex-row ph-3 mb-1">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.textarea-input', [
                                "brand" => "recordeo",
                                "inputId" => "profileBio",
                                "inputName" => "biography",
                                "inputLabel" => "Biography",
                                "inputValue" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus deleniti laboriosam obcaecati quae quod ratione, recusandae rerum similique voluptates. Alias delectus dicta fugiat in laboriosam modi nihil quisquam ratione, veritatis.",
                                "inputErrors" => [],
                            ])
                        </div>
                    </div>

                    <div class="flex flex-row ph-3 pb-3">
                        <button class="btn collapse-150 mr-1">
                            <span class="bg-recordeo text-white corners-3 short">
                                Save
                            </span>
                        </button>

                        <button class="btn collapse-150 close-modal corners-3 flat">
                            <span class="text-black flat short">
                                Cancel
                            </span>
                        </button>
                    </div>
                </form>
            </div>

            <span class="close-modal close-button">
                <i class="fas fa-times"></i>
            </span>
        </div>
    @endslot
@endcomponent