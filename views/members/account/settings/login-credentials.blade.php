@extends('bladesora::members.account.settings.layout')

@section('edit-forms')
    <div class="flex flex-column pa-3 flex-auto">
        <h1 class="heading">Login Credentials</h1>
    </div>
    <div id="editForm" class="flex flex-column">
        <div class="flex flex-row pa-3 flex-auto bt-light-1">
            @include('bladesora::members.account.settings.login-credentials.email-form')
        </div>

        <div class="flex flex-row pa-3 flex-auto bt-light-1">
            @include('bladesora::members.account.settings.login-credentials.password-form')
        </div>
    </div>
@endsection