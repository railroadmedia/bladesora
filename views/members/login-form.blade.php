<section id="loginForm" class="flex flex-column shadow bg-white pa-3 mb-3 corners-3">

    <form method="post" action="{{ $loginUrl }}" class="flex flex-column">
        @if($useCsrfToken ?? true)
            {{ csrf_field() }}
        @endif

        @if(session()->has('status'))
            <ul class="flex flex-column mb-2 tiny text-success list-style-none">
                <li>{{ session()->get('status') }}</li>
            </ul>
        @endif

        <div class="flex flex-column mb-2">
            @include('bladesora::members.inputs.text-input', [
               "brand" => $brand,
               "type" => "email",
               "inputId" => "loginEmail",
               "inputName" => "email",
               "inputLabel" => "Email Address",
               "inputValue" => "",
               "inputErrors" => []
           ])
        </div>

        <div class="flex flex-column mb-2">
            @include('bladesora::members.inputs.text-input', [
                "brand" => $brand,
                "type" => "password",
                "inputId" => "loginPassword",
                "inputName" => "password",
                "inputLabel" => "Password",
                "inputValue" => "",
                "inputErrors" => []
            ])
        </div>

        <ul class="flex flex-column mb-2 tiny text-error list-style-none">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        <button type="submit" class="btn mb-3">
            <span class="text-white bg-{{ $brand }}">Sign In</span>
        </button>
    </form>

    <a id="resetToggle" class="body text-center text-grey-2 noselect">Forgot your password?</a>
</section>

<section id="resetForm" class="flex flex-column shadow bg-white pa-3 mb-3 corners-3 hide">

    <p class="body mb text-grey-2">Please enter your email address and we will send you instructions to reset your
        password.</p>

    <form method="post" action="{{ $resetUrl }}" class="flex flex-column">
        @if($useCsrfToken ?? true)
            {{ csrf_field() }}
        @endif

        <div class="form-group mb-2">
            <input id="resetEmail" type="email" name="email">
            <label for="resetEmail" class="{{ $brand ?? '' }}">Email Address</label>
        </div>

        <button type="submit" class="btn mb-3">
            <span class="text-white bg-{{ $brand }}">Get New Password</span>
        </button>
    </form>

    <a id="loginToggle" class="body text-center text-grey-2 noselect">Back to Login</a>
</section>

<p class="body">
    <strong>Not a member yet?</strong>
    <a href="{{ $joinUrl }}">Join the community here!</a>
</p>