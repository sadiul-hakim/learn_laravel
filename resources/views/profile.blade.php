<div>
    <h1>User Profile</h1>
    <img src="{{ url('/storage/uploads/'.$file) }}"/>
    <a href="/upload_profile_age">Upload Profile Pic</a>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <p>
        {{ session('user')['email'] }}
    </p>
    <a href="/logout">Logout</a>
</div>
