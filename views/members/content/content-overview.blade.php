<div class="flex flex-row pv-3 bt-grey-1-1 content-overview">
    <div class="flex flex-column large-thumbnail ph-1 {{ !empty($releaseDate) && \Carbon\Carbon::parse($releaseDate) > \Carbon\Carbon::now() ? 'desaturate' : '' }}">
        <div class="thumb-wrap">
            <div class="thumb-img box-4-by-3 bg-center corners-3"
                 style="background-image:url({{ $itemThumbnail }});"></div>
        </div>
    </div>
    <div class="flex flex-column grow">
        <div class="flex flex-row">
            <div class="flex flex-column align-v-center grow ph">
                @if(\Carbon\Carbon::parse($releaseDate) > \Carbon\Carbon::now())
                    <p class="tiny text-{{ $brand }} uppercase">
                        Opening {{ \Carbon\Carbon::parse($releaseDate)->format('l, F j \a\t g:i A') }}
                    </p>
                @endif

                <p class="body font-bold mb-1">{{ $itemTitle }}</p>
                <p class="tiny mb-1">{{ $itemDescription }}</p>

                @if(\Carbon\Carbon::parse($releaseDate) < \Carbon\Carbon::now())
                    @if(!empty($itemUrl))
                        <a href="{{ $itemUrl }}" class="btn bg-{{ $brand }} text-white collapse-250 go-to-button">
                            @if($itemProgress === 'started')
                                <i class="fas fa-play mr-1"></i>
                                Continue Next Lesson
                            @elseif($itemProgress === 'completed')
                                <i class="fas fa-check-circle mr-1"></i>
                                Completed
                            @else
                                <i class="fas fa-play mr-1"></i>
                                Start {{ str_replace('-', ' ', ucwords($itemType)) }}
                            @endif
                        </a>
                    @else
                        <button class="btn collapse-250" disabled style="pointer-events: none;">
                            <span class="bg-grey-2 corners-3 text-white">Next Course Coming Soon</span>
                        </button>
                    @endif
                @endif
            </div>
            <div class="flex flex-column align-center basic-col text-dark font-italic x-tiny hide-sm-down">
                {{ $itemDetails }}
            </div>
            <div class="flex flex-column icon-col align-v-center hide-sm-down">
                <div class="square body {{ \Carbon\Carbon::parse($releaseDate) > \Carbon\Carbon::now() ? 'addeventatc' : '' }}"
                     data-dropdown-y="up"
                     data-dropdown-x="right"
                     data-intel-apple="true">

                    @if(\Carbon\Carbon::parse($releaseDate) < \Carbon\Carbon::now())
                        @if(!empty($itemProgress))
                            <i class="fas {{ $itemProgress == 'completed' ? 'fa-check-circle' : 'fa-adjust' }} flex-center text-{{ $brand }} rounded"></i>
                        @else
                            <i class="fas fa-arrow-circle-right flex-center text-light rounded"></i>
                        @endif
                    @else
                        <i class="fas fa-calendar-plus flex-center text-light rounded"></i>

                        <span class="start">{{ $releaseDate }}</span>
                        <span class="timezone">UTC</span>
                        <span class="title">{{ $itemTitle }}</span>
                        <span class="description">{{ $itemDescription }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>