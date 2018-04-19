<div id="subHeader" class="container collapsed-h fluid bg-x-dark pt-1">
    <div class="container collapsed">
        <div class="flex flex-row align-center flex-wrap ph">
            <div class="flex flex-column body uppercase align-v-center text-white mb-2">
                @foreach($infoData as $index => $info)
                    @if($index > 0)
                        |
                    @endif
                    {{ $info }}
                @endforeach
            </div>
            @if(!empty($addToList) && $addToList === true)
                <div class="flex flex-column button-col mb-1">
                    <button class="addToList btn" title="Add To List">
                        <span class="text-white bg-white inverted">
                            <i class="fas fa-plus"></i>
                            <span class="hide-md-up uppercase flex-auto ml-1" style="width:auto;">Add To List</span>
                        </span>
                    </button>
                </div>
            @endif

            @if(!empty($resetProgress) && $resetProgress === true)
                <div class="flex flex-column button-col mb-1">
                    <button class="resetProgress btn" title="Reset Progress">
                        <span class="text-white bg-white inverted">
                            <i class="fas fa-redo-alt fa-flip-horizontal"></i>
                            <span class="hide-md-up uppercase flex-auto ml-1" style="width:auto;">Reset Progress</span>
                        </span>
                    </button>
                </div>
            @endif
        </div>
    </div>
</div>