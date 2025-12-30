<div>
    <h1>User Profile</h1>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <p>
        {{ session('user')['email'] }}
    </p>
    <a href="/logout">Logout</a>
</div>
