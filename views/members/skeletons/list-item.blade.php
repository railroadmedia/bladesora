<div class="{{ $overview ? 'content-overview' : 'content-table-row' }} flex flex-row bb-grey-1-1
     pa-1 pointer relative text-grey-3 hover-bg-grey-7 hover-text-black"
>
    @if($showNumbers)
        <div class="flex flex-column align-left number-col title text-black hide-xs-only">
            <div class="skeleton-loader corners-10" style="height:12px;width:8px;"></div>
        </div>
    @endif

    <div class="{{ $overview ? 'large-thumbnail' : 'thumbnail-col' }}
            flex flex-column align-v-center">
        <div class="thumb-wrap corners-10">
            <div class="thumb-img corners-10 {{ $thumbnailType ?? 'widescreen' }} skeleton-loader">
            </div>
        </div>
    </div>

    <div class="flex flex-column align-v-center ph-1 title-column overflow">
        <div
            class="skeleton-loader corners-10"
            style="height:8px;width:135px;margin-bottom:4px;"
        ></div>

        <div
            class="skeleton-loader corners-10"
            style="margin-bottom:4px;
                    {{ $overview ? 'height:16px;width:225px;' : 'height:8px;width:75px;' }}"
        ></div>

        @if($overview)
            <div
                class="skeleton-loader corners-10"
                style="height:6px;width:90%;margin-bottom:2px;"
            ></div>
            <div
                class="skeleton-loader corners-10"
                style="height:6px;width:90%;margin-bottom:2px;"
            ></div>
            <div
                class="skeleton-loader corners-10"
                style="height:6px;width:100px;margin-bottom:4px;"
            ></div>
        @endif
    </div>

    <div class="flex flex-column uppercase align-center basic-col text-center hide-sm-down">
        <div
            class="skeleton-loader corners-10"
            style="height:8px;width:75px;"
        ></div>
    </div>

    <div class="flex flex-column uppercase align-center basic-col text-center hide-sm-down">
        <div
            class="skeleton-loader corners-10"
            style="height:8px;width:75px;"
        ></div>
    </div>

    <div class="flex flex-column icon-col align-v-center pa hide-xs-only">
        <div class="skeleton-loader square corners-10"></div>
    </div>

    <div class="flex flex-column icon-col align-v-center pa {{ $overview ? 'hide-xs-only' : '' }}">
        <div class="skeleton-loader square corners-10"></div>
    </div>
</div>