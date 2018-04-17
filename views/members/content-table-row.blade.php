<a href="{{ $item['url'] }}" class="content-table-row flex flex-row bt-light-1 no-decoration">
    <div class="flex flex-column thumbnail align-v-center pl-1">
        <div class="thumb-wrap">
            <div class="thumb-img widescreen bg-center corners-3" style="background-image:url({{ $item['thumbnail'] }});"></div>
        </div>
    </div>

    <div class="flex flex-column align-v-center pl-1 title-column overflow">
        <p class="tiny text-recordeo text-truncate">
            {{ ucwords($item['contentType']) }}
        </p>
        <p class="tiny text-black font-bold text-truncate">
            {{ $item['title'] }}
        </p>
        <p class="tiny text-dark text-truncate font-italic hide-md-up">
            @foreach($item['columnData'] as $index => $columnData)
                @if($index > 0)
                    <span style="margin:0 5px;">&#x25AA;</span>
                @endif

                {{ $columnData }}
            @endforEach
        </p>
    </div>

    @foreach($item['columnData'] as $columnData)
        <div class="flex flex-column align-center basic-col text-dark font-italic tiny hide-sm-down">
            {{ $columnData }}
        </div>
    @endforEach

    <div class="flex flex-column icon-col align-v-center">
        <div class="square body">
            @if(!empty($item['progress']))
                <i class="fas {{ $item['progress'] == 'completed' ? 'fa-check-circle' : 'fa-adjust' }} flex-center text-recordeo rounded"></i>
            @else
                <i class="fas fa-arrow-circle-right flex-center text-light rounded"></i>
            @endif
        </div>
    </div>
</a>