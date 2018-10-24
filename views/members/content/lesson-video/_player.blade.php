<div class="flex flex-row mb-2">
    <div id="videoContainer" class="flex flex-column">
        <div id="lessonVideoWrap" class="widescreen">
            <div id="videoPlayer" class="load-before-render expand text-{{ $themeColor }}"
                 data-theme-color="{{ $themeColor }}"
                 data-video-poster="{{ $videoPoster ?? "" }}"
                 data-video-sources="{{ json_encode($videoSources) }}"
                 data-video-id="{{ $videoId }}"
                 data-current-second="{{ $currentSecond ?? 0 }}"
                 data-progress-state="{{ $progressState }}"
                 data-video-length="{{ $videoLength }}"
                 data-cast-title="{{ $lessonTitle }}"
                 data-check-for-timecode="true"></div>
        </div>
        @if(!empty($qaVideoSources))
            <div id="qaVideoWrap" class="widescreen hide">
                <div id="qaVideoPlayer"
                     data-theme-color="{{ $themeColor }}"
                     data-video-poster="{{ $qaVideoPoster ?? "" }}"
                     data-video-sources="{{ json_encode($qaVideoSources) }}"></div>
            </div>
        @endif
    </div>
</div>