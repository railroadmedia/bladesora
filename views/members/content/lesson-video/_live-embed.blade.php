<div class="flex flex-row flex-wrap">
    <div id="video-container" class="flex flex-column" dusk="video-player">
        <div class="widescreen">
            <iframe id="player" frameborder="0" allowfullscreen="1" allow="autoplay; encrypted-media" title="YouTube video player" src="https://www.youtube.com/embed/{{ $youtubeId }}?rel=0&autoplay=1&playsinline=1&modestthemeColoring=1"></iframe>
        </div>
        <div class="video-title flex flex-column pt-1">
            <div class="flex flex-row">
                <h1 class="flex heading text-white">{{ $lessonTitle }}</h1>
                <div class="">
                    <span id="liveIndicator" class="bg-error text-white tiny font-bold corners-3 text-center uppercase pr-1 pl-1">live</span>
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