<section id="loginForm" class="flex flex-column shadow bg-white pa-3 mb-3 corners-3">

    <form action="{{ $loginUrl }}" class="flex flex-column">
        <div class="form-group mb">
            <input id="loginEmail" type="email" name="email">
            <label for="loginEmail" class="{{ $brand ?? '' }}">Email Address</label>
        </div>

        <div class="form-group mb">
            <input id="loginPassword" type="password" name="password">
            <label for="loginPassword" class="{{ $brand ?? '' }}">Password</label>
        </div>

        <button type="submit" class="text-white btn bg-recordeo mb-3">
            Sign In
        </button>
    </form>

    <a id="resetToggle" class="body text-center text-light">Forgot your password?</a>
</section>

<section id="resetForm" class="flex flex-column shadow bg-white pa-3 mb-3 corners-3 hide">

    <p class="body mb-3 text-light">Please enter your email address and we will send you instructions to reset your password.</p>

    <form action="{{ $resetUrl }}" class="flex flex-column">
        <div class="form-group mb">
            <input id="resetEmail" type="email" name="email">
            <label for="resetEmail" class="{{ $brand ?? '' }}">Email Address</label>
        </div>

        <button type="submit" class="text-white btn bg-recordeo mb-3">
            Get New Password
        </button>
    </form>

    <a id="loginToggle" class="body text-center text-light">Back to Login</a>
</section>

<p class="body">
    <strong>Not a member yet?</strong>
    <a href="{{ $joinUrl }}">Join the community here!</a>
</p>