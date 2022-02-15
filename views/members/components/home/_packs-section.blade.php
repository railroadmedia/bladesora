@if($hasPacks)
<section class="flex flex-row tw-mb-6 md:tw-mb-8">
    <div class="flex flex-column grow">

        <div class="flex flex-row align-v-center pv-2">
            <span class="rounded bg-{{$brand}} text-white icon-bg-circle body mr-1">
                <i class="icon-packs"></i>
            </span>
            <h2 class="heading capitalize grow">
                <a
                    href="{{ $packsUrl }}"
                    class="text-black font-no-underline"
                >Your Training Packs</a>
            </h2>
            <a href="{{ $packsUrl }}"
                aria-label="See All Packs"
                class="text-{{$brand}} tiny no-decoration nowrap raised-hover pa-1 dense font-bold uppercase corners-10">
                See All
            </a>
        </div>

        <div class="flex flex-row flex-wrap">
            @foreach($packs as $index => $pack)
                @include('bladesora::members.content.content-overview', [
                    "themeColor" => $brand,
                    "hideBorder" => $index === 0,
                    "itemThumbnail" => $pack->fetch('data.thumbnail_url'),
                    "itemTitle" => $pack->fetch('fields.title'),
                    "itemDescription" => $pack->fetch('data.description'),
                    "itemProgress" => $pack->fetch('progress_state'),
                    "itemType" => $pack->fetch('type'),
                    "itemUrl" => $pack->fetch('next_lesson_url'),
                    "lessonsUrl" => $pack->fetch('url'),
                    "forceSquareThumb" => true,
                    "logoImage" => $pack->fetch('data.logo_image_url'),
                    "releaseDate" => $pack->fetch('published_on'),
                    "isOwned" => true,
                ])
            @endforeach
        </div>
        
    </div>
</section>
@endif