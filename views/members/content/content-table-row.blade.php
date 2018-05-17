<a href="{{ $url }}" class="content-table-row flex flex-row bt-light-1 no-decoration {{ !empty($compact) && $compact === true ? 'compact' : '' }}">
    <div class="flex flex-column thumbnail-col align-v-center pl-1">
        <div class="thumb-wrap">
            <div class="thumb-img widescreen bg-center corners-3" style="background-image:url({{ $thumbnail }});"></div>
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
        <p class="tiny text-dark text-truncate font-italic hide-md-up">
            @foreach($columnData as $index => $column)
                @if($index > 0)
                    <span style="margin:0 5px;">&#x25AA;</span>
                @endif

                {{ strtotime($column) ? \Carbon\Carbon::parse($column)->format('M j/y') : $column }}
            @endforEach
        </p>
    </div>

    @foreach($columnData as $column)
        <div class="flex flex-column align-center basic-col text-dark font-italic tiny hide-sm-down">
            {{ strtotime($column) ? \Carbon\Carbon::parse($column)->format('M j/y') : $column }}
        </div>
    @endforEach

    <div class="flex flex-column icon-col align-v-center">
        <div class="square body {{ !empty($releaseDate) && \Carbon\Carbon::parse($releaseDate) > \Carbon\Carbon::now() ? 'addeventatc' : '' }}"
             data-dropdown-y="up"
             data-dropdown-x="right"
             data-intel-apple="true">
            @if(!empty($releaseDate) && \Carbon\Carbon::parse($releaseDate) < \Carbon\Carbon::now())
                @if(!empty($progress))
                    <i class="fas {{ $progress == 'completed' ? 'fa-check-circle' : 'fa-adjust' }} flex-center text-recordeo rounded"></i>
                @else

                    @if(in_array($contentType, ['course', 'learning-path', 'pack', 'pack-bundle']))
                        <i class="fas fa-arrow-circle-right flex-center text-light rounded"></i>
                    @else
                        <i class="fas fa-play-circle flex-center text-light rounded"></i>
                    @endif
                @endif
            @else
                <i class="fas fa-calendar-plus flex-center text-light rounded"></i>

                <span class="start">{{ $releaseDate ?? ''}}</span>
                <span class="timezone">UTC</span>
                <span class="title">{{ $title }}</span>
            @endif
        </div>
    </div>
</a>