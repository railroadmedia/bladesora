@extends('bladesora::members.account.settings.layout')

@section('edit-forms')
    <div class="flex flex-row">
        <div class="flex flex-column pa-3 flex-auto">
            <h1 class="heading">Notification Settings</h1>
        </div>
    </div>
    <div class="flex flex-row">
        <div id="editForm" class="flex flex-column">
            <div class="flex flex-row flex-auto bt-light-1 pa-3">
                <h2 class="subheading">When would you like to receive emails?</h2>
            </div>
            <form>
                <div class="flex flex-row ph-3 pb-3">
                    <div class="flex flex-column">
                        <div class="flex flex-row mb-2">
                            @include('bladesora::members.inputs.toggle-input', [
                                "inputID" => "repliesComment",
                                "inputName" => "replies_comment",
                                "inputLabel" => "When a user replies to my comment.",
                                "checked" => true
                            ])
                        </div>

                        <div class="flex flex-row mb-2">
                            @include('bladesora::members.inputs.toggle-input', [
                                "inputID" => "repliesThread",
                                "inputName" => "replies_thread",
                                "inputLabel" => "When a user replies to a thread I'm following.",
                                "checked" => true
                            ])
                        </div>

                        <div class="flex flex-row mb-2">
                            @include('bladesora::members.inputs.toggle-input', [
                                "inputID" => "repliesPost",
                                "inputName" => "replies_post",
                                "inputLabel" => "When a user replies to my post in the forums.",
                                "checked" => true
                            ])
                        </div>

                        <div class="flex flex-row mb-2">
                            @include('bladesora::members.inputs.toggle-input', [
                                "inputID" => "courseRelease",
                                "inputName" => "course_release",
                                "inputLabel" => "When a new Course is released.",
                                "checked" => false
                            ])
                        </div>
                    </div>
                </div>

                <div class="flex flex-row flex-auto bt-light-1 pa-3">
                    <h2 class="subheading">How often would you like to receive emails?</h2>
                </div>
                <div class="flex flex-row ph-3 pb-3">
                    <div class="flex flex-column">
                        <div class="flex flex-row mb-2">
                            @include('bladesora::members.inputs.radio-input', [
                                "inputID" => "rightAway",
                                "inputName" => "notification_frequency",
                                "inputLabel" => "Email me notifications right away.",
                                "inputValue" => "right-away",
                                "checked" => true
                            ])
                        </div>

                        <div class="flex flex-row mb-2">
                            @include('bladesora::members.inputs.radio-input', [
                                "inputID" => "perDay",
                                "inputName" => "notification_frequency",
                                "inputLabel" => "Email me notifications once per day.",
                                "inputValue" => "once",
                                "checked" => false
                            ])
                        </div>
                    </div>
                </div>
                <div class="flex flex-row pa-3">
                    <button class="btn collapse-150" type="submit">
                        <span class="bg-recordeo text-white short">
                            Save
                        </span>
                    </button>
                    <button class="btn collapse-150 ml-1" type="reset">
                        <span class="flat text-black short">
                            Cancel
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection