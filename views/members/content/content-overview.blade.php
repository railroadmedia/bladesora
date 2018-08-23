<div class="flex flex-row pv-3 content-overview {{ !empty($hideBorder) && $hideBorder ? '' : 'bt-grey-1-1' }}">
    <div class="flex flex-column align-v-center large-thumbnail {{ $themeColor }} {{ !empty($releaseDate) && \Carbon\Carbon::parse($releaseDate) > \Carbon\Carbon::now() ? 'desaturate' : '' }}">
        <div class="thumb-wrap">
            <div class="thumb-img bg-center corners-3 {{ $forceSquareThumb === true ? 'square' : 'widescreen' }}"
                 style="background-image:url({{ $itemThumbnail }});"></div>
        </div>
    </div>
    <div class="flex flex-column grow">
        <div class="flex flex-row align-v-center">
            <div class="flex flex-column align-v-center grow ph">
                @if(\Carbon\Carbon::parse($releaseDate) > \Carbon\Carbon::now())
                    <p class="tiny text-{{ $themeColor }} uppercase">
                        Opening {{ \Carbon\Carbon::parse($releaseDate)->format('l, F j \a\t g:i A') }}
                    </p>
                @endif

                <p class="body font-bold mb-1">{{ $itemTitle }}</p>
                <p class="tiny mb-1">{{ $itemDescription }}</p>

                <div class="flex flex-row align-v-center">
                    <a href="{{ $itemUrl }}"
                       class="btn bg-{{ $themeColor }} text-white collapse-250 go-to-button mr-1">
                        @if($itemProgress === 'started')
                            <i class="fas fa-play mr-1"></i>
                            Continue Next Lesson
                        @elseif($itemProgress === 'completed')
                            <i class="fas fa-check-circle mr-1"></i>
                            Completed
                        @else
                            <i class="fas fa-play mr-1"></i>
                            Start First Lesson
                        @endif
                    </a>

                    @if(!empty($lessonsUrl))
                        <a href="{{ $lessonsUrl }}" class="btn bg-black text-black inverted short collapse-200">
                            <i class="fas fa-arrow-circle-right mr-1"></i> See Lessons
                        </a>
                    @endif
                </div>

            </div>

            @if(!empty($itemDetails))
                <div class="flex flex-column align-center basic-col uppercase text-grey-3 font-italic x-tiny hide-sm-down">
                    {{ $itemDetails }}
                </div>
            @endif

            <div class="flex flex-column icon-col align-v-center hide-sm-down">
                <div class="body {{ \Carbon\Carbon::parse($releaseDate) > \Carbon\Carbon::now() ? 'addeventatc' : '' }}"
                     data-dropdown-y="up"
                     data-dropdown-x="right"
                     data-intel-apple="true">

                    @if(\Carbon\Carbon::parse($releaseDate) < \Carbon\Carbon::now())
                        @if(!empty($itemProgress))
                            <i class="fas {{ $itemProgress == 'completed' ? 'fa-check-circle' : 'fa-adjust' }} flex-center text-{{ $themeColor }} rounded"></i>
                        @else
                            <i class="fas fa-arrow-circle-right flex-center text-grey-2 rounded"></i>
                        @endif
                    @else
                        <i class="fas fa-calendar-plus flex-center text-grey-2 rounded"></i>

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