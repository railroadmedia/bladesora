<div class="flex flex-row">
    <div id="videoContainer" class="flex flex-column">
        <div id="lessonVideoWrap">
            <div id="videoPlayer" class="load-before-render expand text-{{ $themeColor }}"
                 data-theme-color="{{ $themeColor }}"
                 data-video-poster="{{ $videoPoster ?? "" }}"
                 data-video-sources="{{ json_encode($videoSources) }}"
                 data-video-id="{{ $videoId }}"
                 data-content-id="{{ $contentId }}"
                 data-current-second="{{ $currentSecond ?? 0 }}"
                 data-progress-state="{{ $progressState }}"
                 data-video-length="{{ $videoLength }}"
                 data-cast-title="{{ $lessonTitle }}"
                 data-chapters="{{ $chapters }}"
                 data-user-id="{{ $userId }}"
                 data-like-count="{{ $likeCount }}"
                 data-check-for-timecode="true"></div>
        </div>
        @if(!empty($qaVideoSources))
            <div id="qaVideoWrap" class="widescreen mb-2 hide">
                <div id="qaVideoPlayer"
                     data-theme-color="{{ $themeColor }}"
                     data-video-poster="{{ $qaVideoPoster ?? "" }}"
                     data-video-sources="{{ json_encode($qaVideoSources) }}"></div>
            </div>
        @endif
    </div>
</div>