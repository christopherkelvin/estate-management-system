<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssfile/reglog.css">
    <title>Registrations</title>
    <link rel="Website Icon" type="png" href="{{ asset('images/icon.png') }}">
</head>

<body>
    <x-navbar />
    <div class="container">
        <div class="ribon">
            <h1>RealEstate Registration</h1>
        </div>
        <div class="main">
            <form class="form" id="form" action="/register" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="left">
                    <label for="Fname" class="label">First Name</label>

                    <input type="text" id="Fname" class="input" value="{{ old('First_name') }}" name="First_name" required
                        >

                    @error('First_name')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <label for="Lname" class="label">Last Name</label>

                    <input type="text" id="Lname" class="input" value="{{ old('Last_name') }}" name="Last_name" required
                       >

                    @error('Last_name')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <label for="pnumber" class="label">Phone Number</label>

                    <input type="text" id="pnumber" class="input" value="{{ old('Phone_number') }}" name="Phone_number" required
                        >

                    @error('Phone_number')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <label for="email" class="label">Email</label>

                    <input type="email" id="email" class="input" value="{{ old('email') }}" name="email" required
                       >

                    @error('email')
                        <p class="error">{{ $message }}</p>
                    @enderror


                </div>
                <div class="right">
                    <label for="password" class="label">Password</label>

                    <input type="password" id="password" class="input" name="password" required>

                    @error('password')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <label for="password2" class="label"> Confirm Password</label>

                    <input type="password" id="password" class="input" name="password_confirmation" required >

                    @error('password_confirmation')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <label for="show" id="show" class="show">Show Password</label>
                    <input id="checkbox" type="checkbox" class="check">

                    <label for="" class="up">Upload Image</label>
                    <input type="file" name="photo" class="input">
                    <div class="divs">
                        <input type="submit" class="button" value="Submit">
                        <a href="/login" class="log">Log In</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <script src="{{ asset('jsfile/reg.js') }}"></script>
</body>

</html>
