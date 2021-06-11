<div class="flex flex-column">
    <div class="flex flex-column pa-3 bb-light-1">
        <h1 class="heading">
            <a href="{{ $forumUrl }}" class="no-decoration mr-1">
                <i class="fas fa-arrow-circle-left text-grey-2"></i>
            </a>
            Create a Forum
        </h1>
    </div>
    <div class="flex flex-column ph pv-3">
        <div class="flex flex-row">
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

                    <div class="form-group mb-2">
                        <input type="text" name="description" id="description" value="{{ old('description') }}">
                        <label for="description" class="{{ $brand }}">Description</label>

                        @include('bladesora::members.inputs.partials._errors', [
                            "inputErrors" => $errors->get('description')
                        ])
                    </div>

                    <div class="form-group mb-2">
                        <input type="text" name="weight" id="weight" value="{{ old('weight') }}">
                        <label for="weight" class="{{ $brand }}">Weight (order), any number</label>

                        @include('bladesora::members.inputs.partials._errors', [
                            "inputErrors" => $errors->get('weight')
                        ])
                    </div>

                    <div class="form-group mb-2">
                        <input type="text" name="icon-class" id="icon-class" value="{{ old('icon-class') }}">
                        <label for="icon-class" class="{{ $brand }}">Icon class</label>

                        @include('bladesora::members.inputs.partials._errors', [
                            "inputErrors" => $errors->get('icon-class')
                        ])
                    </div>

                    <div class="flex flex-row align-h-right mt-2">
                        <a href="{{ $forumUrl }}"
                           class="btn bg-black text-black no-decoration flat collapse-150 no-border mr-1" dusk="cancel-button">
                            Cancel
                        </a>

                        <button class="btn collapse-320" type="submit" dusk="submit-button">
                            <span class="bg-{{ $brand }} text-white corners-3">
                                Create Forum
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>