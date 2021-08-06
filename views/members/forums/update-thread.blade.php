<div class="flex flex-column bg-white shadow corners-3">
    <div class="flex flex-column pa-3 bb-light-1">
        <h1 class="heading">
            <a href="{{ $forumUrl }}" class="no-decoration mr-1">
                <i class="fas fa-arrow-circle-left text-grey-2"></i>
            </a>
            Edit Thread Details
        </h1>
    </div>
    <div class="flex flex-column ph pv-3">
        <div class="flex flex-row">
            <div class="flex flex-column ph">
                <form action="{{ $formAction }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field($method) }}

                    <input type="hidden" name="redirect" value="{{ $forumUrl }}">
                    <div class="form-group mb-2">
                        <input type="text" name="title" id="title" value="{{ $thread['title'] }}">
                        <label for="title" class="{{ $brand }}">Title</label>

                        @include('bladesora::members.inputs.partials._errors', [
                            "inputErrors" => $errors->get('title')
                        ])
                    </div>

                    @if(!empty($topicOptions))
                    <div class="form-group mb-2">
                        <select id="postTopic" name="category_id">
                            @foreach($topicOptions as $topicId => $topic)
                                <option
                                    {{ $thread['category_id'] == ($topicId) ? 'selected' : '' }}
                                    value="{{ $topicId }}">{{ $topic }}</option>
                            @endforeach
                        </select>
                        <label for="postTopic" class="{{ $brand }}">Forum</label>

                        @include('bladesora::members.inputs.partials._errors', [
                            "inputErrors" => $errors->get('category_id')
                        ])
                    </div>
                    @endif

                    <div class="flex flex-row align-h-right mt-2">
                        <a href="{{ $forumUrl }}"
                           class="btn bg-black text-black no-decoration flat collapse-150 no-border mr-1">
                            Cancel
                        </a>

                        <button class="btn collapse-320" type="submit">
                            <span class="bg-{{ $brand }} text-white corners-3">
                                Edit Thread
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
