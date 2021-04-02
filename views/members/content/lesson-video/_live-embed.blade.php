<div class="flex flex-row flex-wrap">
    <div id="videoContainer" class="flex flex-column" dusk="video-player">
            <div class="widescreen">
                <iframe id="player" frameborder="0" allowfullscreen="1" allow="autoplay; encrypted-media" title="YouTube video player" src="https://www.youtube.com/embed/{{ $youtubeId }}?rel=0&autoplay=1&playsinline=1&modestthemeColoring=1"></iframe>
            </div>

        <div class="mt-2">
            <email-form
                    email-subject="{{ $emailSubjectOverride ?? 'Question on Live Lesson: "' . $lessonTitle . '" from ' . $userName . ' (' . $userEmail . ')' }}"
                    brand="{{ $brand ?? 'pianote' }}"
                    user-avatar="{{ $userAvatar }}"
                    recipient="{{ $emailRecipient }}"
                    email-type="layouts/inline/alert"
                    email-endpoint="/mailora/secure/send"
                    email-logo="{{ $emailLogo ?? 'https://dmmior4id2ysr.cloudfront.net/logos/pianote-logo-red.png' }}"
                    email-alert="{{ $emailSubjectOverride ?? 'Question on Live Lesson: ' . $lessonTitle . ' from ' . $userName . " (" . $userEmail . ")" }}"
                    theme-color="{{ $brand }}"
                    success-message="Your question has been sent!"
                    :lesson-page="true"
            ></email-form>
        </div>
    </div>
    <div id="chatContainer" class="flex flex-column" dusk="chat-container">
        <div class="inside flex flex-column shadow bg-white" style="height: 690px;">
            <chat
                api-key="{{ $apiKey }}"
                token="{{ $token }}"
                user-id="{{ current_user()->getId() }}"
                chat-channel-name="{{ $chatChannelName }}"
                questions-channel-name="{{ $questionsChannelName }}"
                :is-administrator="{{ json_encode(boolval($isAdministrator)) }}"
                :user-data="{{ json_encode($userData) }}"
            ></chat>
        </div>
    </div>
</div>