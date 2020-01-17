<div class="flex flex-row">
    <div id="videoContainer" class="flex flex-column" dusk="video-player">
        <div id="lessonVideoWrap">
            <div id="videoPlayer" class="load-before-render widescreen text-{{ $themeColor }}"
                 data-element-id="lessonPlayer"
                 data-brand="{{ $brand }}"
                 data-theme-color="{{ $themeColor }}"
                 data-poster="{{ $videoPoster ?? "" }}"
                 data-sources="{{ json_encode($videoSources) }}"
                 data-video-id="{{ $videoId }}"
                 data-content-id="{{ $contentId }}"
                 data-current-second="{{ $currentSecond ?? 0 }}"
                 data-progress-state="{{ $progressState }}"
                 data-video-length="{{ $videoLength }}"
                 data-cast-title="{{ $lessonTitle }}"
                 data-chapters="{{ $chapters }}"
                 data-user-id="{{ $userId }}"
                 data-like-count="{{ $likeCount }}"
                 data-is-liked="{{ $isLiked }}"
                 data-check-for-timecode="true"></div>
        </div>
        @if(!empty($qaVideoSources))
            <div id="qaVideoWrap" class="widescreen mb-2 hide">
                <div id="qaVideoPlayer"
                     data-element-id="lessonPlayer"
                     data-theme-color="{{ $themeColor }}"
                     data-video-poster="{{ $qaVideoPoster ?? "" }}"
                     data-video-sources="{{ json_encode($qaVideoSources) }}"></div>
            </div>
        @endif
    </div>
</div>