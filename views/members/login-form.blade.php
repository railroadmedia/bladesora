<div id="loginForm" class="flex flex-column shadow bg-white pa-3 mb-3 corners-3">

    <div class="form-group mb">
        <input id="loginEmail" type="email">
        <label for="loginEmail" class="{{ $brand ?? '' }}">Email Address</label>
    </div>

    <div class="form-group mb">
        <input id="loginPassword" type="password">
        <label for="loginPassword" class="{{ $brand ?? '' }}">Password</label>
    </div>

    <button type="submit" class="text-white btn bg-recordeo mb-3">
        Sign In
    </button>

    <a class="body text-center text-light">Forgot your password?</a>
</div>

<p class="body">
    <strong>Not a member yet?</strong>
    <a href="">Join the community here!</a>
</p>