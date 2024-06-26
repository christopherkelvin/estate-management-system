<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Website Icon" type="png" href="{{ asset('images/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/nav.css') }}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Real eState</title>
</head>

<body>
    <header>
        <div>

            <div class="navigator" id="navigator">

               
                <nav class="side-nav">
                    <a href="/" class="{{ '/' == request()->path() ? 'active' : '' }}">Home</a>

                    @auth
                        <li class="dropdown">
                            <span class="dropdown">Business</span>
                            <ul class="dropdown-menu">
                                <li><a class="{{ 'sell' == request()->path() ? 'active' : '' }}" href="/sell">Sell</a>
                                </li>
                                <li> <a class="{{ 'buy' == request()->path() ? 'active' : '' }}"
                                        href="/buy">Available</a></li>
                                <li><a href="/argent">Agents</a></li>
                                <li><a class="" href="/rental">Rentals</a></li>
                            </ul>

                        </li>
                        <a href="/advertise"
                            class="{{ '/advertise' == request()->path() ? 'active' : '' }}"><span>Advertise</span> </a>

                        <span class="Welcomeword">
                            <p>Welcome {{ auth()->user()->Fname }}</p>
                        </span>
                        <a href="/help" class="{{ '/help' == request()->path() ? 'active' : '' }}"><span>Help</span> </a>
                        <form action="/logout" method="POST">
                            @csrf
                            <button>
                                <a class="logout">logout</a>

                            </button>
                        </form>
                        @else
                        <a href="/login"
                            class="{{ '/login' == request()->path() ? 'active' : '' }}"><span>Login</span> </a>
                            <a href="/register"
                            class="{{ '/register' == request()->path() ? 'active' : '' }}"><span>Register</span> </a>
                         <li> <a class="{{ 'buy' == request()->path() ? 'active' : '' }}"
                                        href="/buy">Available</a></li>
                        <a href="/help" class="{{ '/help' == request()->path() ? 'active' : '' }}"><span>Help</span> </a>

                    @endauth

                </nav>


            </div>
        </div>
    </header>
    <x-flash-message />
    <script>
        var bug = document.querySelector(".hambuger");
        var nav = document.querySelector(".side-nav");

        bug.addEventListener("click", () => {
            bug.classList.toggle("active");
            nav.classList.toggle("show");

        });
    </script>
