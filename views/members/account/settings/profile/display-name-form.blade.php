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
                This is the name other users will see on your profile, comments and forum posts
            </p>
        </div>
    @endslot

    @slot('formModal')
    @endslot
@endcomponent