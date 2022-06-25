<doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="{{ asset('css/img-src/logo.png') }}">
	<title>Sign in</title>
	<link rel="stylesheet" href="{{ asset('css/reg-auth.css') }}">
</head>
<body>
    @if($errors->any())
        <div class="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>
        Авторизация
    </h2>
	<form action="auth/check" method="post">
        @csrf
		<label>Username</label>
		<input type="text" name="login" placeholder="Введите свой логин">
		<label>Password</label>
		<input type="password" name="password" placeholder="Введите свой пароль">
		<button type="submit">Sign in</button>
        <p>
            No account yet? <a href="register">Sign up</a>
        </p>
	</form>
</body>
</html>