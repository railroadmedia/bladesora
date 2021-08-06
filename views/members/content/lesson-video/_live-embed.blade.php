<div class="flex flex-row flex-wrap">
    <div id="video-container" class="flex flex-column" dusk="video-player">
        <div class="widescreen">
            <iframe id="player" frameborder="0" allowfullscreen="1" allow="autoplay; encrypted-media" title="YouTube video player" src="https://www.youtube.com/embed/{{ $youtubeId }}?rel=0&autoplay=1&playsinline=1&modestthemeColoring=1"></iframe>
        </div>
        <div class="video-title pt-1">
            <div class="flex flex-row">
                <h1 class="flex heading text-white">{{ $lessonTitle }}</h1>

                @if(!empty($lessonResources))
                    <div class="flex flex-column align-top sq-btn-col mr-2">
                        <div class="btn bg-{{ $brand }} inverted text-{{ $brand }} is-dropdown"
                             data-tooltip="Download Resources">
                            <i class="unopen fas fa-download no-events text-{{ $brand }}"></i>
                            <i class="open fas fa-download no-events text-white"></i>

                            <div class="dropdown-content bg-white shadow tiny text-black">
                                <ul>
                                    @foreach($lessonResources as $resource)
                                        <li>
                                            <a class="no-decoration text-black pa-1"
                                               href="{{ $resource['resource_url'] }}"
                                               target="_blank"
                                               download>
                                                <i class="fas {{ get_resource_icon($resource['resource_url']) }} mr-1" style="width:20px;text-align:center;"></i>  {{ $resource['resource_name'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="">
                    <p id="liveIndicator" class="bg-error text-white tiny font-bold corners-3 text-center uppercase pr-1 pl-1">live</p>
                </div>
            </div>
            <h4 class="body text-grey-3 {{ $contentType }}">
            @if(!empty($parentTitle))
                From <a href="{{ $courseUrl }}" class="text-{{ $brand }} no-decoration">
                    {{ $parentTitle }}
                </a>
            @else
                With
                @foreach($instructors as $index => $instructor)
                    {{ $instructor->fetch('fields.name') }}
                    @if($index < (count($instructors) - 1)),@endif
                @endforeach
            @endif
            </h4>
        </div>
    </div>
    <div id="chat-container" class="flex flex-column" dusk="chat-container">
        <chat
            api-key="{{ $apiKey }}"
            token="{{ $token }}"
            user-id="{{ current_user()->getId() }}"
            chat-channel-name="{{ $chatChannelName }}"
            questions-channel-name="{{ $questionsChannelName }}"
            :is-administrator="{{ json_encode(boolval($isAdministrator)) }}"
            :user-data="{{ json_encode($userData) }}"
            embed-url="{{ $embedUrl }}"
        ></chat>
    </div>
</div>