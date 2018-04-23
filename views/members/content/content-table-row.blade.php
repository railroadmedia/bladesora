<a href="{{ $url }}" class="content-table-row flex flex-row bt-light-1 no-decoration">
    <div class="flex flex-column thumbnail align-v-center pl-1">
        <div class="thumb-wrap">
            <div class="thumb-img widescreen bg-center corners-3" style="background-image:url({{ $thumbnail }});"></div>
        </div>
    </div>

    <div class="flex flex-column align-v-center pl-1 title-column overflow">
        @if(!empty($colorTitle))
            <p class="tiny text-recordeo text-truncate">
                {{ ucwords($colorTitle) }}
            </p>
        @endif
        <p class="tiny text-black font-bold text-truncate">
            {{ $title }}
        </p>
        <p class="tiny text-dark text-truncate font-italic hide-md-up">
            @foreach($columnData as $index => $columnData)
                @if($index > 0)
                    <span style="margin:0 5px;">&#x25AA;</span>
                @endif

                {{ $columnData }}
            @endforEach
        </p>
    </div>

    @foreach($columnData as $columnData)
        <div class="flex flex-column align-center basic-col text-dark font-italic tiny hide-sm-down">
            {{ $columnData }}
        </div>
    @endforEach

    <div class="flex flex-column icon-col align-v-center">
        <div class="square body">
            @if(!empty($progress))
                <i class="fas {{ $progress == 'completed' ? 'fa-check-circle' : 'fa-adjust' }} flex-center text-recordeo rounded"></i>
            @else

                @if(in_array($contentType, ['course', 'learning-path', 'pack', 'pack-bundle']))
                    <i class="fas fa-arrow-circle-right flex-center text-light rounded"></i>
                @else
                    <i class="fas fa-play-circle flex-center text-light rounded"></i>
                @endif
            @endif
        </div>
    </div>
</a>