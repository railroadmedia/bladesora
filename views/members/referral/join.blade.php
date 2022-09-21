@php
    $cardImages = [
        'drumeo' => 'https://drumeo-assets.s3.amazonaws.com/redeem/referral/30-day-guest-pass.png',
        'pianote' => 'https://drumeo-assets.s3.amazonaws.com/redeem/referral/pianote-guest-pass.png',
        'singeo' => 'https://drumeo-assets.s3.amazonaws.com/redeem/referral/singeo-guest-pass.png',
        'guitareo' => 'https://drumeo-assets.s3.amazonaws.com/redeem/referral/guitareo-guest-pass.png',
    ];

    $cardImage = $cardImages[$brand];
@endphp

<div class="referral-sections">
    <section class="text-center text-white py-6 md:py-10 lg:pt-12 lg:pb-16" style="background:linear-gradient(to bottom, #010e2c, #000c17);">
        <div class="container mx-auto max-w-6xl">
            @if ($canRefer && !$errors->has('email-invite-message'))
                <h1 class="leading-tight lg:mb-14"><strong>{{ $referredByUserName }} gifted you 30 days<br class="hidden md:inline"> of free lessons!</strong></h1>
                <div class="flex flex-wrap xl:flex-nowrap items-center px-4">
                    <div class="flex-shrink-0 w-full xl:w-auto my-5 md:my-6 xl:my-0">
                        <div class="relative">
                            <img class="inline-block w-full max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl" src="{{ $cardImage }}">
                        </div>

                        <ul class="fa-ul text-left mb-0 mt-4 md:mt-6 xl:mt-14 ml-6 md:ml-7 xl:ml-8 w-auto inline-block">
                            <li class="mb-4 xl:mb-6 leading-tight"><i class="fas fa-li fa-check text-drumeo"></i> Organized step-by-step lessons for all skill levels.</li>
                            <li class="mb-4 xl:mb-6 leading-tight"><i class="fas fa-li fa-check text-drumeo"></i> Play your favorite songs with better practice tools.</li>
                            <li class="leading-tight"><i class="fas fa-li fa-check text-drumeo"></i> Get your questions answered by helpful teachers.</li>
                        </ul>
                    </div>


                    <div class="xl:pl-10 max-w-md xl:max-w-none mx-auto">
                        <form id="join-form" name="join-form" method="post" action="{{ url()->route('referral.claiming-join') }}">
                            <input type="hidden" name="_token" class="sort-input" value="{{ csrf_token() }}" />
                            <input type="hidden" name="redirect" value="/members">
                            <input type="hidden" name="referral_code" value="{{ $referralCode ?? request()->get('rsCode') }}">

                            <label class="inline-block w-full text-left @if($errors->has('name')) text-red-600 @endif" for="name"><strong>Your name</strong> <em class="opacity-70 text-xs md:float-right">@if($errors->has('name')) {{ $errors->first('name') }} @else Used to say hello! @endif</em></label>
                            <input class="main-form pt-0 inline-block w-full mt-1 mb-4 default-form-field @if($errors->has('name')) text-red-600 @else text-black @endif" type="text" id="name" name="name" placeholder="Your name..." value="{{ old('name') }}">

                            <label class="inline-block w-full text-left @if($errors->has('email')) text-red-600 @endif" for="email"><strong>Email address</strong> <em class="opacity-70 text-xs md:float-right">@if($errors->has('email')) {{ $errors->first('email') }} @else Used for member communication. @endif</em></label>
                            <input class="main-form pt-0 inline-block w-full mt-1 mb-4 default-form-field @if($errors->has('email')) text-red-600 @else text-black @endif" type="email" id="email" name="email" placeholder="Email address..." value="{{ old('email') }}">

                            <label class="inline-block w-full text-left @if($errors->has('password')) text-red-600 @endif" for="password"><strong>Password</strong> <em class="opacity-70 text-xs md:float-right">@if($errors->has('password')) {{ $errors->first('password') }} @else Used to access your lessons. @endif</em></label>
                            <input class="main-form pt-0 inline-block w-full mt-1 mb-4 default-form-field @if($errors->has('password')) text-red-600 @else text-black @endif" type="password" id="password" name="password" placeholder="Password..." value="{{ old('password') }}">

                            <label class="inline-block w-full text-left" for="password_confirmation"><strong>Password confirm</strong> <em class="opacity-70 text-xs md:float-right">No typos.</em></label>
                            <input class="main-form pt-0 inline-block w-full mt-1 mb-4 default-form-field text-black" type="password" id="password_confirmation" name="password_confirmation" placeholder="Password Confirm..." value="{{ old('password_confirmation') }}">

                            @if(!empty($googleRecaptchaSiteKey))
                                @if($errors->has('g-recaptcha-response')) <label class="inline-block w-full text-left  text-red-600">  <em class="text-red-600 opacity-70 text-xs md:float-right"> {{ $errors->first('g-recaptcha-response') }}</em></label>@endif
                                <div class="g-recaptcha mx-auto @if($errors->has('g-recaptcha-response')) text-red-600 @endif " name="recaptcha" style="display: inline-block;" id='recaptcha_token' data-sitekey="{{ $googleRecaptchaSiteKey }}"></div>
                            @endif
                            <input name="button" type="submit" id="button" class="mt-2 text-white bg-{{ $brand }} leading-none text-base font-bold border-0 rounded-full select-none cursor-pointer text-center py-4 px-16 uppercase font-roboto" value="Redeem Guest Pass"/>
                        </form>

                    </div>
                </div>
            @else
                <h1 class="leading-tight lg:mb-14"><strong>Referral link has expired.</strong></h1>
            @endif
        </div>
    </section>
</div>