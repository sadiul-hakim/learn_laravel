<div>
    <h1>Login Form</h1>
    <form action="/login" method="post">
        @csrf
        <input type="email" name="email" id="email" placeholder="enter your email"><br/>
        <input type="password" name="password" id="password" placeholder="enter your password"><br/>
        <input type="submit" value="Login">
    </form>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
</div>
