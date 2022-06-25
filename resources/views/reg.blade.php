<?php
	session_start();
?>

<doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="{{ asset('css/img-src/logo.png') }}">
	<title>Sing up</title>
	<link rel="stylesheet" href="{{ asset('css/reg-auth.css') }}">
</head>
<body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>
        Регистрация
    </h2>
	<form action="reg/check" method="post">
        @csrf
		<label>Login</label>
		<input type="text" name="login" placeholder="Your username...">
		<label>Email</label>
		<input type="email" name="email" placeholder="Your email...">
		<label>Password</label>
		<input type="password" name="password" placeholder="Password...">
		<label>Confirm password</label>
		<input type="password" name="password_confirmation" placeholder="Confirm password...">
		<button type="submit">Sign up</button>
        <p>
            Already have an account?      <a href="auth">Sign in</a>
        </p>

	</form>

</body>
</html>