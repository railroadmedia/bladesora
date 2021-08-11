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
                <div class="flex flex-column image-col align-center relative">
                    <img class="rounded"
                         src="{{ $profilePictureUrl }}"
                         data-avatar-update="true">

                    @if($canClearAvatar)
                        <span id="clearAvatar" class="rounded clear-button">
                            <i class="fas fa-times"></i>
                        </span>
                    @endif
                </div>
                <div class="flex flex-column align-center pa">
                    <p class="tiny text-grey-3">For best results upload a square photo.</p>
                    <p class="tiny text-grey-3 font-italic">Max file size: <strong>5MB</strong></p>
                </div>
            </div>
        </div>
    @endslot

    @slot('formModal')
        <div id="avatarModal" class="modal">
            <div class="flex flex-column bg-white corners-10 shadow">
                <div class="flex flex-row pa-3">
                    <h2 class="subheading">Edit: Profile Picture</h2>
                </div>

                <image-cropper
                    theme-color="{{ $brand }}"
                    brand="{{ $brand }}"
                    :aspect-ratio="1"
                    upload-endpoint="{{ $uploadRequestEndpoint }}"
                    save-endpoint="{{ $fieldSaveRequestEndpoint }}"
                    user-id="{{ $userId }}"
                    @image-uploaded="avatarUploaded"></image-cropper>
            </div>
        </div>
    @endslot
@endcomponent