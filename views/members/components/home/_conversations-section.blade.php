<section class="flex flex-row tw-mb-6 md:tw-mb-8">
    <div class="flex flex-column grow">

        <div class="flex flex-row align-v-center pv-2">
            <span class="rounded bg-{{$brand}} text-white icon-bg-circle body mr-1">
                <i class="icon-forum"></i>
            </span>
            <h2 class="heading capitalize grow">
                <a
                        href="{{ $forumUrl }}"
                        class="text-black font-no-underline"
                >Popular Conversations</a>
            </h2>
            <a href="{{ $forumUrl }}"
                aria-label="See All Popular Conversations"
                class="text-{{ $brand }} tiny no-decoration nowrap raised-hover pa-1 dense font-bold uppercase corners-10">
                Forums
            </a>
        </div>

        <div class="flex flex-row flex-wrap">
            @foreach($forumPosts as $post)
                @include('bladesora::members.content._hot-forum-post', [
                    "themeColor" => $brand,
                    "xp" => $post->user_xp,
                    "rank" => $post->xp_rank,
                    "avatar" => $post->user->getProfilePictureUrl(),
                    "title" => $post->title,
                    "date" => \Carbon\Carbon::parse($post->updated_at)->diffForHumans(),
                    "author" => $post->user->getDisplayName(),
                    "post" =>  substr(strip_tags($post->content),0,255),
                    "url" => url()->route('forums.post.jump-to', ['id' => $post->id])
                ])
            @endforeach
        </div>
        
    </div>
</section>