@component('bladesora::members.account.settings.edit-form')
    @slot('formTitle')
        Profile Picture
    @endslot

    @slot('modalId')
        avatarModal
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
        <div id="avatarModal" class="modal">
            <div class="flex flex-column bg-white corners-3 shadow">
                <div class="flex flex-row pa-3">
                    <h2 class="subheading">Edit: Profile Picture</h2>
                </div>

                <input type="hidden" id="vuePropData"
                       data-s3-upload-endpoint=""
                       data-save-endpoint="">

                <div id="avatarUpload"></div>
            </div>

            <span class="close-modal close-button">
                <i class="fas fa-times"></i>
            </span>
        </div>
    @endslot
@endcomponent