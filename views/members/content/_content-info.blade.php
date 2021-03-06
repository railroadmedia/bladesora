<div id="instructorInfo" class="container fluid bg-grey-5">
    <div class="container">
        @if(!empty($contentDescription))
        <div  class="flex flex-row">
            <div class="flex flex-column text-white pv">
                <div id="collapsableInfo">
                    <p class="body">
                        {!! nl2br($contentDescription) !!}
                    </p>
                </div>
            </div>
        </div>
        @endif

        @if(!empty($instructorName) && !empty($instructorBio))
            <div  class="flex flex-row">
                <div class="flex flex-column text-white pv">
                    <div id="collapsableInfo">
                        <h6 class="body font-bold uppercase">About {{ $instructorName }}</h6>
                        <p class="body">
                            {{ $instructorBio }}
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
<div class="container fluid">
    <div class="flex flex-column align-center">
        <div id="toggleInstructorInfo" class="text-center bg-grey-5 text-white pointer">
            <span class="x-tiny uppercase font-bold">Info</span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>
</div>
