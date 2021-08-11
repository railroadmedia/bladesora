<a @if(!empty($url) && !($isScheduled ?? false)) href="{{ $url }}" @endif
   class="content-table-row flex flex-row bt-grey-1-1 no-decoration pa-1 align-v-center
    {{ !empty($compact) && $compact === true ? 'compact' : '' }}
    {{ $isScheduled ?? false ? 'scheduled' : '' }}">

    @if(!empty($position))
        <div class="flex flex-column icon-col align-center">
            <p class="subheading text-black">
                {{ $position }}
            </p>
        </div>
    @endif

    <div class="flex flex-column thumbnail-col align-v-center">
        <div class="thumb-wrap">
            <div class="thumb-img bg-center corners-10 {{ $isScheduled ?? false ? 'desaturate' : '' }} {{ $contentType === 'song' ? 'square' : 'widescreen' }}"
                 style="background-image:url({{ $thumbnail }});"></div>

            @if(!empty($isNew) && $isNew === true)
                <span class="new-badge flex-center text-white bg-{{ $themeColor }}">
                    <i class="fas fa-star"></i>
                </span>
            @endif

            <span class="thumb-hover flex-center">
                <i class="fas {{ $contentType === 'course' ? 'fa-arrow-right' : 'fa-play' }}"></i>
            </span>
        </div>
    </div>

    <div class="flex flex-column align-v-center pl-1 title-column overflow">
        @if(!empty($colorTitle))
            <p class="tiny text-{{ $themeColor }} uppercase text-truncate">
                {{ ucwords($colorTitle) }}
            </p>
        @endif
        <p class="tiny text-black font-bold item-title">
            {{ $title }}
        </p>
        <p class="x-tiny text-grey-3 text-truncate font-italic uppercase hide-md-up">
            @foreach($columnData as $index => $column)
                @if($index > 0)
                    <span class="bullet">-</span>
                @endif

                {{ $column }}
            @endforEach
        </p>
    </div>

    @foreach($columnData as $column)
        <div class="flex flex-column uppercase align-center basic-col text-grey-3 font-italic x-tiny hide-sm-down">
            {{ $column }}
        </div>
    @endforEach

    <div class="flex flex-column icon-col align-v-center">
        <div class="body {{ $isScheduled ?? false ? 'addeventatc' : '' }}"
             data-dropdown-y="up"
             data-dropdown-x="right"
             data-intel-apple="true">
            @if($isScheduled ?? false)
                <i class="fas fa-calendar-plus flex-center text-grey-2 rounded"></i>

                <span class="start">{{ $releaseDate }}</span>
                <span class="timezone">UTC</span>
                <span class="title">{{ $title }}</span>
            @else
                @if(!empty($progress))
                    <i class="fas {{ $progress == 'completed' ? 'fa-check-circle' : 'fa-adjust' }} flex-center text-{{ $themeColor }} rounded"></i>
                @else

                    @if(in_array($contentType, ['course', 'learning-path', 'pack', 'pack-bundle']))
                        <i class="fas fa-arrow-circle-right flex-center text-grey-2 rounded"></i>
                    @else
                        <i class="fas fa-play-circle flex-center text-grey-2 rounded"></i>
                    @endif
                @endif
            @endif
        </div>
    </div>
</a>