<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('cssfile/login.css') }}">
  <link rel="Website Icon" type="png" href="{{ asset('images/icon.png') }}">

    <title>Login</title>
</head>
<body>
    <x-navbar />
    <div class="container">
        <div class="ribon">
            <h1>RealEstate login</h1>
        </div>
        <div class="main">
            <form class="form" action="/authenticate" method="POST">
                @csrf
                <label for="email" class="label">Email</label>
                <input type="email" id="email" name="email" class="input" required>
                @error('email')
                    <p class="error">{{$message}}</p>
                @enderror
                <label for="password" class="label">Password</label>
                <input type="password" id="password" name="password" class="input" required>
                <button name="sign_in" class="sign" type="submit">Sign In</button>
                <p>Don't have an account? <a href="/register">Sign Up</a></p>
            </form>

        </div>
    </div>
</body>
</html>
