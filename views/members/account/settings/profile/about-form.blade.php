@component('bladesora::members.account.settings.edit-form')
    @slot('formTitle')
        About Victor
    @endslot

    @slot('modalId')
        aboutModal
    @endslot

    @slot('formData')
        <div class="flex flex-column grow">
            @include('bladesora::members.account.partials._text-fields', [
                "fields" => [
                    "Full Name" => "Victor Guidera",
                    "Location" => "Canada",
                    "Gender" => "Male",
                    "Birthday" => "May 21, 1990",
                ]
            ])

            <p class="body font-bold mb-1 mt-3">Biography</p>
            <p class="body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto debitis ea enim fuga fugit illum labore molestiae obcaecati odit optio placeat quidem quis ratione rerum similique soluta, totam unde voluptates?
                <br><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur cum debitis dignissimos, ea eveniet fugiat in magnam nemo nihil nobis nostrum officia perspiciatis porro quam, sint tempore ut voluptate.
                <br><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laborum nostrum quas quia reiciendis totam ullam? Accusamus deserunt, dolorum eum expedita illum maxime nam, nemo quam quos sit ullam vel.
            </p>
        </div>
    @endslot

    @slot('formModal')
        <div id="aboutModal" class="modal">
            <div class="flex flex-column bg-white corners-3 shadow">
                <div class="flex flex-row pa-3">
                    <h2 class="subheading">Edit: About</h2>
                </div>

                <form>
                    <div class="flex flex-row ph-3 inline-inputs">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', [
                                "brand" => "recordeo",
                                "type" => "text",
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
                        <button class="btn collapse-150 mr-1"
                                type="submit">
                            <span class="bg-recordeo text-white corners-3 short">
                                Save
                            </span>
                        </button>

                        <a class="btn collapse-150 close-modal corners-3 flat text-black flat short">
                            Cancel
                        </a>
                    </div>
                </form>

                <span class="close-modal close-button">
                    <i class="fas fa-times"></i>
                </span>
            </div>
        </div>
    @endslot
@endcomponent