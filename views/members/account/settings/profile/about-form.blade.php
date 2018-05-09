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
    @endslot
@endcomponent