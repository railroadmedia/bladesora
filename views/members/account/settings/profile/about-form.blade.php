@component('bladesora::members.account.settings.edit-form')
    @slot('formTitle')
        About Victor
    @endslot

    @slot('modalId')
        aboutModal
    @endslot

    @slot('formData')
        <div class="flex flex-column">
            @include('bladesora::members.account.partials._text-fields', [
                "fields" => [
                    "Full Name" => "victor guidera",
                    "Location" => "Canada",
                    "Gender" => "Male",
                    "Birthday" => "May 21, 1990",
                ]
            ])
        </div>
    @endslot

    @slot('formModal')
    @endslot
@endcomponent