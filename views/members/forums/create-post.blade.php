<div class="flex flex-column bg-white shadow corners-3">
    <div class="flex flex-column pa-3 bb-light-1">
        <h1 class="heading">
            <a href="{{ $forumUrl }}" class="no-decoration mr-1">
                <i class="fas fa-arrow-circle-left text-grey-2"></i>
            </a>
            Create a Discussion
        </h1>
    </div>
    <div class="flex flex-column ph pv-3">
        <div class="flex flex-row">
            <div class="flex flex-column avatar-column hide-xs-only">
                <img class="rounded" src="{{ $userAvatar }}">
            </div>
            <div class="flex flex-column ph">
                <form action="{{ $formAction }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field($method) }}

                    <input type="hidden" name="category_id" value="1">
                    <div class="form-group mb-2">
                        <input type="text" name="title" id="title">
                        <label for="title" class="{{ $brand }}">Title</label>

                        @include('bladesora::members.inputs.partials._errors', [
                            "inputErrors" => $errors->get('title')
                        ])
                    </div>

                    <div class="form-group mb-2">
                        <select id="postTopic" name="category_id">
                            <option selected disabled style="display:none;">
                            @foreach($topicOptions as $index => $topic)
                                <option value="{{ $index + 1 }}">{{ $topic }}</option>
                            @endforeach
                        </select>
                        <label for="postTopic" class="{{ $brand }}">Topic</label>

                        @include('bladesora::members.inputs.partials._errors', [
                            "inputErrors" => $errors->get('category_id')
                        ])
                    </div>

                    <div id="textEditor"></div>

                    <div class="flex flex-row align-h-right mt-2">
                        <a href="{{ $forumUrl }}"
                           class="btn bg-black text-black no-decoration flat collapse-150 no-border mr-1">
                            Cancel
                        </a>

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