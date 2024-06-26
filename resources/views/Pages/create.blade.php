<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reglog.css">
    @vite('resources/css/app.css')
    <title>Registrations</title>
</head>
<body>
    <div class="container">
        <form class="form" action="/register" method="post">
            @csrf
            <h1>RealEstate Registration</h1>
           @if ($error->any())
                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                    Something went wrong......
                </div>
                    <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-5 text-red-700 ">
                        @foreach ($error->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
           @endif
            <label for="email">Email</label>
            <input type="email" id="email" value="{{ old('email') }}" name="email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" value="{{ old('password') }}" name="password" required>
           
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <button type="submit">Sign Up</button>
            <p>Already have an account? <a href="login.html">Sign In</a></p>
        </form>
    </div>
</body>
</html>