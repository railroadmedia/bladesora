@php
    $vimeoVideo = $coachOfTheMonth->fetch('fields.video.fields.vimeo_video_id');
@endphp

@if (isset($coachOfTheMonth))
    @component('bladesora::members.components.coach-header-template', [
        'brand' => $brand,
        'backgroundImage' => $coachOfTheMonth->fetch('coach_top_banner_image'),
        'vimeoVideo' => $vimeoVideo,
        ])
        @slot('topSubtitle')
            Coach of The Month
        @endslot
        @slot('title')
            @php
                $fullName = $coachOfTheMonth->fetch('fields.name');
                $exploded = explode(' ', $fullName);
                $firstName = array_shift($exploded);
            @endphp
            <span class="tw-font-normal">{{ $firstName }}</span>
            <span class="tw-font-bold">{{ implode($exploded, ' ') }}</span>
        @endslot
        @slot('shortBio')
            {!! $coachOfTheMonth->fetch('data.short_bio', '') !!}
        @endslot
        @slot('actions')
            <a href="{{ $coachOfTheMonth->fetch('url', '') }}"
               class="tw-btn tw-btn-primary tw-transition tw-bg-{{ $brand }} hover:tw-bg-{{ $brand }}-600 sm:tw-mr-4 tw-box-border tw-mb-4"  style="font-size: 16px; line-height: 24px; height: 50px; width: 200px;">
                See Coach
            </a>
            @if($vimeoVideo != null)
                <button onclick="onModalButtonClick()" class="tw-btn tw-btn-secondary tw-transition hover:tw-bg-opacity-10 hover:tw-bg-white tw-box-border tw-mb-4"
                style="font-size: 16px; line-height: 24px; height: 50px; width: 200px;"
                    data-open-modal="coach-trailer-modal">
                    <span>
                        <i aria-hidden="true" class="fa fa-play tw-px-0.5"></i>
                        <span>Play Trailer</span></span>
                </button>
            @endif
        @endslot
    @endcomponent
@endif
