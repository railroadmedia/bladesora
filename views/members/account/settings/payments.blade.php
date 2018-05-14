@extends('bladesora::members.account.settings.layout')

@section('edit-forms')
    <div class="flex flex-column pa-3 flex-auto">
        <h1 class="heading">Payment Details</h1>
    </div>
    <div id="editForm" class="flex flex-column">
        <div class="flex flex-row flex-auto bt-light-1">
            @include('bladesora::members.account.settings.payments.active-methods', [
                "activeMethods" => $activeMethods
            ])
        </div>
    </div>
@endsection