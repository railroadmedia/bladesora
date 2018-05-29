<a @if(!empty($url) && (!empty($releaseDate) && \Carbon\Carbon::parse($releaseDate) < \Carbon\Carbon::now())) href="{{ $url }}" @endif
   class="content-table-row flex flex-row bt-grey-1-1 no-decoration {{ !empty($compact) && $compact === true ? 'compact' : '' }}">

    @if(!empty($position))
        <div class="flex flex-column icon-col align-center">
            <p class="subheading text-black">
                {{ $position }}
            </p>
        </div>
    @endif

    <div class="flex flex-column thumbnail-col align-v-center {{ empty($position) ? 'pl-1' : '' }}">
        <div class="thumb-wrap">
            <div class="thumb-img box-4-by-3 bg-center corners-3 {{ !empty($releaseDate) && \Carbon\Carbon::parse($releaseDate) > \Carbon\Carbon::now() ? 'desaturate' : '' }}"
                 style="background-image:url({{ $thumbnail }});"></div>
        </div>
    </div>

    <div class="flex flex-column align-v-center pl-1 title-column overflow">
        @if(!empty($colorTitle))
            <p class="tiny text-recordeo uppercase text-truncate">
                {{ ucwords($colorTitle) }}
            </p>
        @endif
        <p class="tiny text-black font-bold item-title">
            {{ $title }}
        </p>
        <p class="x-tiny text-dark text-truncate font-italic hide-md-up">
            @foreach($columnData as $index => $column)
                @if($index > 0)
                    <span class="bullet">&#x25CF;</span>
                @endif

                {{ $column }}
            @endforEach
        </p>
    </div>

    @foreach($columnData as $column)
        <div class="flex flex-column uppercase align-center basic-col text-dark font-italic x-tiny hide-sm-down">
            {{ $column }}
        </div>
    @endforEach

    <div class="flex flex-column icon-col align-v-center">
        <div class="square body {{ !empty($releaseDate) && \Carbon\Carbon::parse($releaseDate) > \Carbon\Carbon::now() ? 'addeventatc' : '' }}"
             data-dropdown-y="up"
             data-dropdown-x="right"
             data-intel-apple="true">
            @if(!empty($releaseDate) && \Carbon\Carbon::parse($releaseDate) > \Carbon\Carbon::now())
                <i class="fas fa-calendar-plus flex-center text-light rounded"></i>

                <span class="start">{{ $releaseDate ?? ''}}</span>
                <span class="timezone">UTC</span>
                <span class="title">{{ $title }}</span>
            @else
                @if(!empty($progress))
                    <i class="fas {{ $progress == 'completed' ? 'fa-check-circle' : 'fa-adjust' }} flex-center text-recordeo rounded"></i>
                @else

                    @if(in_array($contentType, ['course', 'learning-path', 'pack', 'pack-bundle']))
                        <i class="fas fa-arrow-circle-right flex-center text-light rounded"></i>
                    @else
                        <i class="fas fa-play-circle flex-center text-light rounded"></i>
                    @endif
                @endif
            @endif
        </div>
    </div>
</a>