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
                    "Playing Since" => $playingSince,
                    "Piano" => $piano,
                    "Keyboard" => $keyboard,
                ],
                "showEmpty" => true
            ])
        </div>
    @endslot

    @slot('formModal')
        <div id="gearModal" class="modal">
            <div class="flex flex-column bg-white corners-10 shadow">
                <div class="flex flex-row pa-3">
                    <h2 class="subheading">Edit: My Gear</h2>
                </div>

                <form method="POST" action="{{ $action }}" enctype="multipart/form-data">
                    {{ method_field($method) }}
                    {{ csrf_field() }}


                    <div class="flex flex-row ph-3 mb-1">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.select-input', array_merge([
                                "brand" => $brand ?? "pianote",
                                "inputId" => "playedSince",
                                "inputName" => "piano_playing_since_year",
                                "inputLabel" => "Played Since",
                                "inputValue" => '',
                                "inputOptions" => array_reverse(range(1900, date('Y'))),
                                "inputErrors" => [],
                            ], $playedSinceInput ?? []))
                        </div>
                    </div>
                    <div class="flex flex-row ph-3 inline-inputs">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand ?? "pianote",
                                "type" => "text",
                                "inputId" => "pianoBrand",
                                "inputName" => "piano_gear_piano_brands",
                                "inputLabel" => "Piano",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $pianoBrandInput ?? []))
                        </div>
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand ?? "pianote",
                                "type" => "text",
                                "inputId" => "keyboardBrand",
                                "inputName" => "piano_gear_keyboard_brands",
                                "inputLabel" => "Keyboard",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $keyboardBrandInput ?? []))
                        </div>
                    </div>

                    <div class="flex flex-row ph-3 pb-3">
                        <button class="btn collapse-150 mr-1"
                                type="submit">
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
