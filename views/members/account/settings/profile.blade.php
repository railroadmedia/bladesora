@extends('bladesora::members.account.settings.layout')

@section('activePage', 'profile')

@section('edit-forms')
    <div class="flex flex-column pa-3 flex-auto">
        <h1 class="heading">Profile</h1>
    </div>
    <div id="editForm" class="flex flex-column">
        <div class="flex flex-row pa-3 flex-auto bt-light-1">
            @include('bladesora::members.account.settings.profile.display-name-form')
        </div>

        <div class="flex flex-row pa-3 flex-auto bt-light-1">
            @include('bladesora::members.account.settings.profile.about-form')
        </div>
    </div>
@endsection