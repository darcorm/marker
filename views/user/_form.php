<form hx-post="user/create" class="user-form" name="user-form">
    <fieldset>
        <legend>Enter Details</legend>
        <input type="text" name="user-form[username]" id="username" placeholder="Create Username">
        <input type="password" name="user-form[password]" id="password" placeholder="Create Password">
        <input type="password" name="user-form[confirm-password]" id="confirm-password" placeholder="Confirm Password">
        <button>Create</button>
    </fieldset>
</form>