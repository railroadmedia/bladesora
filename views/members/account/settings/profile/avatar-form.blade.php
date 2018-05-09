@component('bladesora::members.account.settings.edit-form')
    @slot('formTitle')
        Profile Picture
    @endslot

    @slot('modalId')
        profilePictureModal
    @endslot

    @slot('formData')
        <div class="flex flex-column">
            <div class="flex flex-row flex-wrap align-center">
                <div class="flex flex-column image-col align-center">
                    <img class="rounded" src="https://placehold.it/250x250">
                </div>
                <div class="flex flex-column align-center pa">
                    <p class="tiny text-dark">For best results upload a square photo.</p>
                    <p class="tiny text-dark font-italic">Max file size: 5MB</p>
                </div>
            </div>
        </div>
    @endslot

    @slot('formModal')
    @endslot
@endcomponent