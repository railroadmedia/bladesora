@component('bladesora::members.account.settings.edit-form')
    @slot('formTitle')
        Gear Photo
    @endslot

    @slot('modalId')
        gearPhotoModal
    @endslot

    @slot('formData')
        <div class="flex flex-column">
            <div class="flex flex-row flex-wrap align-center">
                <div class="flex flex-column gear-photo-col align-center relative">
                    <img src="{{ !empty($gearPhotoUrl) ? $gearPhotoUrl : 'https://dmmior4id2ysr.cloudfront.net/assets/images/default-gear-photo.jpg' }}"
                         data-gear-update="true">

                    @if($canClear)
                        <span id="clearGearPhoto" class="rounded clear-button">
                            <i class="fas fa-times"></i>
                        </span>
                    @endif
                </div>
                <div class="flex flex-column align-center pa">
                    <p class="tiny text-grey-3">For best results upload photo larger than 1280x720.</p>
                    <p class="tiny text-grey-3 font-italic">Max file size: <strong>5MB</strong></p>
                </div>
            </div>
        </div>
    @endslot

    @slot('formModal')
        <div id="gearPhotoModal" class="modal">
            <div class="flex flex-column bg-white corners-10 shadow">
                <div class="flex flex-row pa-3">
                    <h2 class="subheading">Edit: Gear Photo</h2>
                </div>

                <image-cropper
                    theme-color="{{ $brand }}"
                    brand="{{ $brand }}"
                    :aspect-ratio="1.78"
                    upload-endpoint="{{ $uploadRequestEndpoint }}"
                    save-endpoint="{{ $fieldSaveRequestEndpoint }}"
                    user-id="{{ $userId }}"
                    @image-uploaded="gearPhotoUploaded"></image-cropper>
            </div>
        </div>
    @endslot
@endcomponent