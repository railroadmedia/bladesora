<div id="subHeader" class="container collapsed-h fluid bg-grey-5 pt-1">
    <div class="container">
        <div class="flex flex-row align-center flex-wrap">
            <div class="flex flex-column align-v-center text-white mb-1 meta-info-col hide-xs-only">
                <div class="flex flex-row align-v-center">
                    @foreach($infoData as $key => $value)
                        <p class="subheading uppercase mr-3">
                            {{ $value  }}  <span>{{ $key }}</span>
                        </p>
                    @endforeach
                </div>
            </div>

            @if(!empty($downloadableResources))
                <div class="flex flex-column button-col mb-1">
                    <div class="is-dropdown">
                        <button class="btn"
                                title="Download Resources"
                                tabindex="0"
                                aria-pressed="false">
                            <span class="bg-white inverted text-white">
                                <i class="unopen fas fa-download no-events text-white"></i>
                                <i class="open fas fa-download no-events text-grey-5"></i>
                            </span>
                        </button>

                        <div class="dropdown-content bg-white shadow tiny text-black"
                             aria-expanded="false">
                            <ul>
                                @foreach($downloadableResources as $index => $resources)
                                    @if(!empty($resources))
                                        <li class="dense font-bold mt-1 ph-1">
                                            {{ $index }}
                                        </li>
                                        @foreach($resources as $resource)
                                            <li class="hover-bg-grey-1 bb-grey-2-1 pointer">
                                                <a class="no-decoration text-black pa-1"
                                                   href="{{ $resource['resource_url'] }}"
                                                   target="_blank"
                                                   download>
                                                    <i class="fas {{ get_resource_icon($resource['resource_url']) }} mr-1" style="width:20px;text-align:center;"></i>  {{ $resource['resource_name'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            @if(!empty($addToList) && $addToList === true)
                <div class="flex flex-column button-col mb-1">
                    <button class="addToList btn {{ $isAdded ? 'added' : '' }}"
                            data-content-id="{{ $contentId }}">
                        <span class="un-added bg-white inverted text-white">
                            <i class="fas fa-plus"></i>
                        </span>

                        <span class="is-added bg-white text-x-dark">
                            <i class="fas fa-plus rotate-45"></i>
                        </span>
                    </button>
                </div>
            @endif

            @if(!empty($resetProgress) && $resetProgress === true)
                <div class="flex flex-column button-col mb-1">
                    <button class="resetProgress btn" title="Reset Progress"
                            data-content-id="{{ $contentId }}"
                            data-brand="{{ $brand }}">
                        <span class="text-white bg-white inverted">
                            <i class="fas fa-redo-alt fa-flip-horizontal"></i>
                        </span>
                    </button>
                </div>
            @endif
        </div>
    </div>
</div>