<div class="flex flex-column">
    <div class="flex flex-column pa-3 bb-light-1">
        <h1 class="heading">
            <a href="{{ $forumUrl }}" class="no-decoration mr-1">
                <i class="fas fa-arrow-circle-left text-grey-2"></i>
            </a>
            Create a Thread
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

                    <div class="form-group mb-2">
                        <input type="text" name="title" id="title" value="{{ old('title') }}">
                        <label for="title" class="{{ $brand }}">Title</label>

                        @include('bladesora::members.inputs.partials._errors', [
                            "inputErrors" => $errors->get('title')
                        ])
                    </div>

                    @if(!empty($topicOptions))
                        <div class="form-group mb-2">
                            <select id="forum" name="category_id">
                                <option selected disabled style="display:none;">
                                @foreach($topicOptions as $index => $topic)
                                    <option value="{{ $index }}" {!! (app('request')->input('thread-title') === $topic) ? 'selected' : '' !!} >{{ $topic }}</option>
                                @endforeach
                            </select>
                            <label for="forum" class="{{ $brand }}">Forum</label>

                            @include('bladesora::members.inputs.partials._errors', [
                                "inputErrors" => $errors->get('category_id')
                            ])
                        </div>
                    @else
                        <input type="hidden" name="category_id" value="1">
                    @endif

                    <text-editor field-key="first_post_content"
                                 initial-value="{{ old('first_post_content') }}"></text-editor>

                    @if(!empty($errors->get('first_post_content')))
                        <p class="tiny text-error pa">* The post content field is required</p>
                    @endif

                    <div class="flex flex-row align-h-right mt-2">
                        <a href="{{ $forumUrl }}"
                           class="btn bg-black text-black no-decoration flat collapse-150 no-border mr-1" dusk="cancel-button">
                            Cancel
                        </a>

                        <button class="btn collapse-320" type="submit" dusk="submit-button">
                            <span class="bg-{{ $brand }} text-white corners-3">
                                Create Thread
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>