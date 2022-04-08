<html>
    <body>
        <form action="post" action="{{ route('login-result') }}">
            @csrf

            <input type="text" name="login_id" placeholder="ID"><br>
            <input type="text" name="password" placeholder="PASSWORD"><br>
            <input type="submit" value="ログイン">
        </form>
    </body>
</html>
