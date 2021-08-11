<div class="flex flex-column pa-1 catalogue-card {{ $cardClass ?? '' }}">
    <div class="card-media active corners-10 mb-1 {{ $thumbnailType ?? 'widescreen' }}">
        <div class="thumb-img bg-center skeleton-loader"></div>
    </div>

    <div class="skeleton-loader corners-10" style="height:8px;width:100px;margin-bottom:5px;"></div>

    <div class="skeleton-loader corners-10 mb-1" style="height:10px;width:200px;"></div>

    <div class="skeleton-loader corners-10" style="height:8px;width:125px;"></div>
</div>