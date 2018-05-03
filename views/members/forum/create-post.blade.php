<div class="flex flex-column bg-white shadow corners-3">
    <div class="flex flex-column pa-3 bb-light-1">
        <h1 class="heading">
            <a href="{{ $forumUrl }}" class="no-decoration mr-1">
                <i class="fas fa-arrow-circle-left text-light"></i>
            </a>
            Create a Discussion
        </h1>
    </div>
    <div class="flex flex-column pa">
        <div class="flex flex-row">
            <div class="flex flex-column pa avatar-column hide-xs-only">
                <div class="square">
                    <img class="rounded" src="{{ $userAvatar }}">
                </div>
            </div>
            <div class="flex flex-column pa">
                <form action="{{ $formAction }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group mb-2">
                        <input type="text" id="postTitle">
                        <label for="postTitle" class="{{ $brand }}">Title</label>
                    </div>

                    <div class="form-group mb-2">
                        <select id="postTopic">
                            <option selected disabled style="display:none;">
                            @foreach($topicOptions as $topic)
                                <option>{{ $topic }}</option>
                            @endforeach
                        </select>
                        <label for="postTopic" class="{{ $brand }}">Topic</label>
                    </div>

                    <div id="textEditor"></div>

                    <div class="flex flex-row align-h-right mt-2">
                        <a href="{{ $forumUrl }}"
                           class="btn bg-black text-black no-decoration flat collapse-150 no-border mr-1">Cancel</a>

                        <button class="btn collapse-320" type="submit">
                                <span class="bg-{{ $brand }} text-white corners-3">
                                    Create Discussion
                                </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>