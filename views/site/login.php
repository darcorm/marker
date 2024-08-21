<section class="login-page">
    <form hx-post="site/login" class="login-form">
        <fieldset>
            <legend>Login Details</legend>
            <input type="text" name="username" id="username" placeholder="Enter Username">
            <input type="password" name="password" id="password" placeholder="Enter Password">
            <button>Login</button>
            <small>
                If you don't have an account you can <a hx-get="user/create" hx-target="#content">Create One</a>
            </small>
        </fieldset>
    </form>
</section>