@component('bladesora::members.account.settings.edit-form')
    @slot('formTitle')
        My Gear
    @endslot

    @slot('modalId')
        gearModal
    @endslot

    @slot('formData')
        <div class="flex flex-column grow">
            @include('bladesora::members.account.partials._text-fields', [
                "fields" => [
                    "Drumming Since" => $drummingSince,
                    "Drums" => $drums,
                    "Cymbals" => $cymbals,
                    "Hardware" => $hardware,
                    "Sticks" => $sticks,
                ],
                "showEmpty" => true
            ])
        </div>
    @endslot

    @slot('formModal')
        <div id="gearModal" class="modal">
            <div class="flex flex-column bg-white corners-3 shadow">
                <div class="flex flex-row pa-3">
                    <h2 class="subheading">Edit: My Gear</h2>
                </div>

                <form method="POST" action="{{ $action }}" enctype="multipart/form-data">
                    {{ method_field($method) }}
                    {{ csrf_field() }}


                    <div class="flex flex-row ph-3 mb-1">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand,
                                "type" => "text",
                                "inputId" => "drummingSince",
                                "inputName" => "drumming_since",
                                "inputLabel" => "Drumming Since",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $drummingSinceInput ?? []))
                        </div>
                    </div>
                    <div class="flex flex-row ph-3 inline-inputs">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand,
                                "type" => "text",
                                "inputId" => "drumSet",
                                "inputName" => "drums",
                                "inputLabel" => "Drum Set",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $drumSetInput ?? []))
                        </div>
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand,
                                "type" => "text",
                                "inputId" => "cymbals",
                                "inputName" => "cymbals",
                                "inputLabel" => "Cymbals",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $cymbalsInput ?? []))
                        </div>
                    </div>

                    <div class="flex flex-row ph-3 inline-inputs">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand,
                                "type" => "text",
                                "inputId" => "hardware",
                                "inputName" => "hardware",
                                "inputLabel" => "Hardware",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $hardwareInput ?? []))
                        </div>
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand,
                                "type" => "text",
                                "inputId" => "drumsticks",
                                "inputName" => "sticks",
                                "inputLabel" => "Drumsticks",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $sticksInput ?? []))
                        </div>
                    </div>

                    <div class="flex flex-row ph-3 pv mb-1">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.file-input', array_merge([
                                "brand" => $brand,
                                "inputId" => "gearPhoto",
                                "inputName" => "profile-data[drumkit-image|user-profile-images]",
                                "inputLabel" => "Gear Photo",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $gearInput ?? []))
                        </div>
                    </div>

                    <div class="flex flex-row ph-3 pb-3">
                        <button class="btn collapse-150 mr-1"
                                type="submit">
                            <span class="bg-{{ $brand }} text-white corners-3 short">
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