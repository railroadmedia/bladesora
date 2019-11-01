<div
    class="container fluid collapsed-h pv-5 relative bg-black bg-center"
    style="background-image:url({{ $backgroundImage }});z-index:1;"
>
    <div class="header-gradient-overlay absolute-fill"></div>
    <div class="container relative" style="z-index:2;">
        <div class="flex flex-row align-center">
            <div class="flex flex-column" style="max-width:540px;">
                {{ $content }}
            </div>
        </div>
    </div>
</div>