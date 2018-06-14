<header id="pageHeader" class="container fluid pv-4" style="background-image:url({{ $backgroundImage }});">
    <div class="container">
        <div class="flex flex-row">
            <div class="flex flex-column grow pr-2">
                @if(!empty($pageType))
                    <p class="body text-{{ $brand }} font-bold uppercase">{{ $pageType }}</p>
                @endif

                <h1 class="heading text-white mb-2">
                    @if(!empty($pageIcon))
                        <i class="{{ $pageIcon }} text-{{ $brand }}"></i>
                    @endif

                    {{ $pageTitle }}
                </h1>
                <p class="body text-white">{{ $pageDescription }}</p>


                @if(!empty($forumButtons) && $forumButtons === true)
                    <div class="flex flex-row align-v-center mt-2 flex-wrap forum-buttons">
                        <a href="{{ $createDiscussionUrl }}" class="btn bg-{{ $brand }} collapse-250 no-decoration text-white">
                            <i class="fas fa-pencil mr-1"></i> Create a Discussion
                        </a>

                        <a href="{{ $forumRulesUrl }}" class="btn bg-white inverted text-white short collapse-150 ml-1">
                            <i class="fas fa-list-ul mr-1"></i> Forum Rules
                        </a>
                    </div>
                @endif

                @if(!empty($timezoneSelector) && $timezoneSelector === true)
                    <div class="flex flex-row align-v-center mt-2 flex-wrap forum-buttons">
                        <form id="timezoneForm"
                              class="flex flex-column"
                              method="POST"
                              action="{{ url()->route('usora.user-field.update-or-create-by-key') }}">
                            {{ method_field('patch') }}
                            {{ csrf_field() }}
                            <input type="hidden" name="key" value="timezone">

                            <div class="form-group xs-12 sm-6">
                                <select id="timezoneSelector"
                                        class="text-white"
                                        name="value">
                                    @foreach($timezones as $timezone)
                                        <option class="text-black" {{ $timezone === $usersTimezone ? 'selected' : '' }}>{{ $timezone }}</option>
                                    @endforeach
                                </select>
                                <label for="timezoneSelector" class="{{ $brand }}">Timezone</label>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
            <div class="flex flex-column sm-2 hide-xs-only"></div>
            <div class="header-avatar flex flex-column hide-xs-only">
                <div class="square">
                    <img class="rounded inset-border" src="{{ $avatarImage }}">
                </div>
            </div>
        </div>
    </div>
</header>