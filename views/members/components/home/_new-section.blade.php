<section class="flex flex-row tw-mb-6 md:tw-mb-8">
    <div class="flex flex-column grow">

        <div class="flex flex-row align-v-center pv-2">
            <span class="rounded bg-{{$brand}} text-white icon-bg-circle body mr-1">
                <i class="fas fa-star"></i>
            </span>
            <h2 class="heading capitalize grow">
                <a
                    href="{{ $allLessonsUrl }}"
                    class="text-black font-no-underline"
                >New</a>
            </h2>
            <a href="{{ $allLessonsUrl }}"
                aria-label="See All New Lessons"
                class="text-{{$brand}} tiny no-decoration nowrap raised-hover pa-1 dense font-bold uppercase corners-10">
                See All
            </a>
        </div>

        <div class="flex flex-row six-cards-row">
            <transition appear name="fade">
                <content-catalogue
                        theme-color="{{$brand}}"
                        :use-theme-color="true"
                        content-endpoint="{{ $contentEndpoint ? $contentEndpoint : '/railcontent/content' }}"
                        catalogue-type="grid"
                        limit="16"
                        :lock-unowned="true"
                        :six-wide="true"
                        :force-wide-thumbs="true"
                        :pre-loaded-content="{{ $newContent }}"
                >
                    <div class="flex flex-row nmh-1">
                        @for($i = 0; $i < 6; $i++)
                            @include('bladesora::members.skeletons.card-item', [
                                "cardClass" => 'six-wide',
                            ])
                        @endfor
                    </div>
                </content-catalogue>
            </transition>
        </div>
        
    </div>
</section>