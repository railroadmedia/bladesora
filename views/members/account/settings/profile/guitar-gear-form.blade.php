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
                    "Played Guitar Since" => $playedGuitarSince,
                    "Guitars" => $guitars,
                    "Amps" => $amps,
                    "Pedals" => $pedals,
                    "Strings" => $strings,
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
                                "brand" => $brand ?? "guitareo",
                                "inputId" => "playedGuitarSince",
                                "inputName" => "played_guitar_since",
                                "inputLabel" => "Played Guitar Since",
                                "inputValue" => '',
                                "inputOptions" => array_reverse(range(1900, date('Y'))),
                                "inputErrors" => [],
                            ], $playedGuitarSinceInput ?? []))
                        </div>
                    </div>
                    <div class="flex flex-row ph-3 inline-inputs">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand ?? "guitareo",
                                "type" => "text",
                                "inputId" => "guitars",
                                "inputName" => "guitars",
                                "inputLabel" => "Guitars",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $guitarsInput ?? []))
                        </div>
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand ?? "guitareo",
                                "type" => "text",
                                "inputId" => "amps",
                                "inputName" => "amps",
                                "inputLabel" => "Amps",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $ampsInput ?? []))
                        </div>
                    </div>

                    <div class="flex flex-row ph-3 inline-inputs">
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand ?? "guitareo",
                                "type" => "text",
                                "inputId" => "pedals",
                                "inputName" => "pedals",
                                "inputLabel" => "Pedals",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $pedalsInput ?? []))
                        </div>
                        <div class="flex flex-column">
                            @include('bladesora::members.inputs.text-input', array_merge([
                                "brand" => $brand ?? "guitareo",
                                "type" => "text",
                                "inputId" => "strings",
                                "inputName" => "strings",
                                "inputLabel" => "strings",
                                "inputValue" => "",
                                "inputErrors" => [],
                            ], $stringsInput ?? []))
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
