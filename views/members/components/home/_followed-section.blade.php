@if($hasfollowedLessons)
    <section class="flex flex-row tw-mb-6 md:tw-mb-8">
        <div class="flex flex-column grow">

            <div class="flex flex-row align-v-center pv-2">
                <span class="rounded bg-{{$brand}} text-white icon-bg-circle body mr-1">
                    <i class="fas fa-bell"></i>
                </span>
                <h2 class="heading capitalize grow">
                    <a
                        href="{{ $subscribedLessons }}"
                        class="text-black font-no-underline"
                    >From Subscribed Coaches</a>
                </h2>
                <a href="{{ $subscribedLessons }}"
                    aria-label="See All Subscribed Lessons"
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
                            no-results-icon="happy"
                            no-results-message="You haven't added any lessons yet, once you add a lesson of this type it will show up here for you to access later."
                            catalogue-type="grid"
                            limit="16"
                            :four-wide="true"
                            :lock-unowned="true"
                            :force-wide-thumbs="true"
                            :pre-loaded-content="{{ $followedLessons }}"
                    >
                        <div class="flex flex-row nmh-1">
                            @for($i = 0; $i < 4; $i++)
                                @include('bladesora::members.skeletons.card-item', [
                                    "cardClass" => 'four-wide',
                                ])
                            @endfor
                        </div>
                    </content-catalogue>
                </transition>
            </div>
            
        </div>
    </section>
@endif