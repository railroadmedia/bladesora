<section id="loginForm" class="flex flex-column shadow bg-white pa-3 mb-3 corners-3">

    <form method="post" action="{{ $loginUrl }}" class="flex flex-column">
        @if($useCsrfToken ?? true)
            {{ csrf_field() }}
        @endif

        <div class="form-group mb">
            <input id="loginEmail" type="email" name="email">
            <label for="loginEmail" class="{{ $brand ?? '' }}">Email Address</label>
        </div>

        <div class="form-group mb">
            <input id="loginPassword" type="password" name="password">
            <label for="loginPassword" class="{{ $brand ?? '' }}">Password</label>
        </div>

        <button type="submit" class="btn mb-3">
            <span class="text-white bg-recordeo">Sign In</span>
        </button>
    </form>

    <a id="resetToggle" class="body text-center text-light">Forgot your password?</a>
</section>

<section id="resetForm" class="flex flex-column shadow bg-white pa-3 mb-3 corners-3 hide">

    <p class="body mb text-light">Please enter your email address and we will send you instructions to reset your
        password.</p>

    <form method="post" action="{{ $resetUrl }}" class="flex flex-column">
        @if($useCsrfToken ?? true)
            {{ csrf_field() }}
        @endif

        <div class="form-group mb">
            <input id="resetEmail" type="email" name="email">
            <label for="resetEmail" class="{{ $brand ?? '' }}">Email Address</label>
        </div>

        <button type="submit" class="btn mb-3">
            <span class="text-white bg-recordeo">Get New Password</span>
        </button>
    </form>

    <a id="loginToggle" class="body text-center text-light">Back to Login</a>
</section>

<p class="body">
    <strong>Not a member yet?</strong>
    <a href="{{ $joinUrl }}">Join the community here!</a>
</p>