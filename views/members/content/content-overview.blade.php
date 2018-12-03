<div class="flex flex-row pv-3 content-overview {{ !empty($hideBorder) && $hideBorder ? '' : 'bt-grey-1-1' }}">
    <div class="flex flex-column align-v-center large-thumbnail {{ !empty($showBackgroundCards) && $showBackgroundCards === true ? 'background-cards' : '' }} {{ $themeColor }} {{ !empty($releaseDate) && \Carbon\Carbon::parse($releaseDate) > \Carbon\Carbon::now() ? 'desaturate' : '' }}">
        <div class="thumb-wrap corners-3">
            <a @if((empty($noLink) || $noLink === false) && $isOwned) href="{{ $lessonsUrl }}" @endif>
                <div class="thumb-img bg-center corners-3 {{ $forceSquareThumb === true ? 'square' : 'widescreen' }}"
                     style="background-image:url({{ $itemThumbnail }});">
                    @if(!empty($logoImage))
                        <div class="logo-image pa-1 corners-bottom-3">
                            <img src="{{ $logoImage }}">
                        </div>
                    @endif

                    @if(!empty($progressPercent))
                        <div class="lesson-progress overflow">
                            <span class="progress bg-{{ $themeColor }}"
                                  style="width:{{ $progressPercent }}%"></span>
                        </div>
                    @endif

                    @if(\Carbon\Carbon::parse($releaseDate) < \Carbon\Carbon::now() && $isOwned)
                        <span class="thumb-hover flex-center">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    @endif
                </div>
            </a>
        </div>
    </div>
    <div class="flex flex-column grow">
        <div class="flex flex-row align-v-center
                    {{ !$isOwned && \Carbon\Carbon::parse($releaseDate) < \Carbon\Carbon::now() ? 'flex-wrap-xs-only' : '' }}">
            <div class="flex flex-column align-v-center grow ph">
                @if(\Carbon\Carbon::parse($releaseDate) > \Carbon\Carbon::now())
                    <p class="tiny text-{{ $themeColor }} uppercase">
                        Opening {{ \Carbon\Carbon::parse($releaseDate)->format('l, F j \a\t g:i A') }}
                    </p>
                @endif

                <a @if((empty($noLink) || $noLink === false) && $isOwned) href="{{ $lessonsUrl }}" @endif
                   class="body font-bold text-black no-decoration mb-1">{{ $itemTitle }}</a>
                <div class="tiny mb-1 item-description">{!! $itemDescription !!}</div>

                @if(\Carbon\Carbon::parse($releaseDate) < \Carbon\Carbon::now() && $isOwned)
                    <div class="flex flex-row align-v-center overview-links">
                        <a href="{{ $itemUrl }}"
                           class="btn bg-{{ $themeColor }} text-white collapse-250 go-to-button mr-1">
                            @if($itemProgress === 'started')
                                <i class="fas fa-play mr-1"></i>
                                Next Lesson
                            @elseif($itemProgress === 'completed')
                                <i class="fas fa-check-circle mr-1"></i>
                                Completed
                            @else
                                <i class="fas fa-play mr-1"></i>
                                First Lesson
                            @endif
                        </a>

                        @if(!empty($lessonsUrl))
                            <a href="{{ $lessonsUrl }}"
                               class="btn bg-black text-black inverted short collapse-200">
                                <i class="fas fa-arrow-circle-right mr-1"></i> See Lessons
                            </a>
                        @endif
                    </div>
                @endif

            </div>

            @if(!empty($itemDetails) && $isOwned)
                <div class="flex flex-column align-center basic-col uppercase text-grey-3 font-italic x-tiny hide-sm-down">
                    {{ $itemDetails }}
                </div>
            @endif

            @if(!$isOwned && \Carbon\Carbon::parse($releaseDate) < \Carbon\Carbon::now())
                <div class="flex flex-column buy-col align-center">
                    <a  href="/#customize-anchor"
                        target="_blank"
                        class="btn bg-{{ $themeColor }} text-white no-decoration mb-1">
                        <i class="fas fa-plus mr-1"></i>
                        Upgrade Membership
                    </a>

                    <p class="tiny font-bold uppercase text-black dense">
                        <a href="{{ $salesUrl }}"
                           target="_blank"
                           class="text-black">Or Get a Single Learning Path</a>
                        ($97)
                    </p>
                </div>
            @endif

            @if($isOwned || \Carbon\Carbon::parse($releaseDate) > \Carbon\Carbon::now())
                <div class="flex flex-column icon-col align-v-center hide-sm-down">
                    <div class="body {{ \Carbon\Carbon::parse($releaseDate) > \Carbon\Carbon::now() ? 'addeventatc' : '' }}"
                         data-dropdown-y="up"
                         data-dropdown-x="right"
                         data-intel-apple="true">

                        @if(\Carbon\Carbon::parse($releaseDate) < \Carbon\Carbon::now())
                            <a @if(empty($noLink) || $noLink === false) href="{{ $lessonsUrl }}" @endif class="no-decoration">
                                @if(!empty($itemProgress))
                                    <i class="fas {{ $itemProgress == 'completed' ? 'fa-check-circle' : 'fa-adjust' }} flex-center text-{{ $themeColor }} rounded"></i>
                                @else
                                    <i class="fas fa-arrow-circle-right flex-center text-grey-2 rounded"></i>
                                @endif
                            </a>
                            @else
                            <i class="fas fa-calendar-plus flex-center text-grey-2 rounded"></i>

                            <span class="start">{{ $releaseDate }}</span>
                            <span class="timezone">UTC</span>
                            <span class="title">{{ $itemTitle }}</span>
                            <span class="description">{{ $itemDescription }}</span>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>