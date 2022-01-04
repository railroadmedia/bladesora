<section class="tw-flex tw-mb-6 md:tw-mb-8">
    <div class="tw-flex tw-flex-col grow">

        <div class="flex flex-row align-v-center tw-mt-4">
            <span class="rounded bg-{{$brand}} text-white icon-bg-circle body mr-1">
                <i class="icon-my-list"></i>
            </span>
            <h2 class="heading capitalize grow">
                <a
                    href="{{ $myListUrl }}"
                    class="text-black font-no-underline"
                >My List</a>
            </h2>
            <a href="{{ $myListUrl }}"
                aria-label="See All Lessons In My List"
                class="text-{{$brand}} tiny no-decoration nowrap raised-hover pa-1 dense font-bold uppercase corners-10">
                See All
            </a>
        </div>

        <div class="tw-flex six-cards-row">
            <transition appear name="fade">
                <content-catalogue
                        theme-color="{{$brand}}"
                        :use-theme-color="true"
                        content-endpoint="{{ $contentEndpoint ? $contentEndpoint : '/railcontent/content' }}"
                        no-results-icon="happy"
                        no-results-message="You haven't added any lessons yet, once you add a lesson of this type it will show up here for you to access later."
                        catalogue-type="grid"
                        limit="16"
                        :six-wide="true"
                        :lock-unowned="true"
                        :force-wide-thumbs="true"
                        :pre-loaded-content="{{ $usersList }}"
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