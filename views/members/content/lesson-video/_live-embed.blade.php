<div class="flex flex-row flex-wrap">
    <div id="videoContainer" class="flex flex-column">
            <div class="widescreen">
                <iframe id="player" frameborder="0" allowfullscreen="1" allow="autoplay; encrypted-media" title="YouTube video player" src="https://www.youtube.com/embed/{{ $youtubeId }}?rel=0&autoplay=1&playsinline=1&modestthemeColoring=1"></iframe>
            </div>

        <div class="mt-2">
            <email-form
                    email-subject="{{ $emailSubjectOverride ?? 'Question on Live Lesson: ' . $lessonTitle . ' from ' . $userEmail }}"
                    email-type="{{ $emailTypeOverride ?? 'ask-question' }}"
                    @if(!empty($emailRecipient))
                    recipient="{{ $emailRecipient }}"
                    @endif
                    success-message="Your question has been sent!"
                    user-avatar="{{ $userAvatar }}"
                    email-endpoint="/mailora/secure/send"
                    :lesson-page="true"
                    theme-color="{{ $themeColor }}"></email-form>
        </div>
    </div>
    <div id="chatContainer" class="flex flex-column">
        <div class="inside flex flex-column corners-3 shadow bg-white">
            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowtransparency="true" src="{{ $chatrollUrl }}"></iframe>
        </div>
    </div>
</div>