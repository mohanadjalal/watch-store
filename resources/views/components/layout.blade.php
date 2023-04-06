<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title ?? 'Watch Store' }}</title>

    <link rel="stylesheet" href="/../css/app.css">
    <link rel="stylesheet" href="/../css/{{ $css ?? '' }}">


</head>


<body>





    <div class="header">
        <div class="nav">
            <li class="nav-l"><a class="{{ request()->path() === '/' ? 'active' : '' }}" href="/">Home</a></li>
            <li class="nav-l"><a href="/products" class="{{ request()->path() === 'products' ? 'active' : '' }}">
                    Products</a></li>
        </div>

        @if (request()->path() === 'products')
            <div class="search">
                <form action="#" method="GET">
                    <label for="search"> Search: </label> <input type="text" id="search" name="search"
                        value="{{ request('search') }}">
                </form>
            </div>
        @endif

        <div class="auth">
            @auth


                <a class="link" href="/cart">
                    <img src="{{ asset('imgs/icons/cart.png') }}" alt="">
                </a>

                <div class="link" id="link" id="link">
                    <img src="{{ asset('imgs/icons/profile.png') }}" alt="">
                    <span>{{ auth()->user()->name }}</span>


                </div>


                <ul class="dropdown" id="dropdown">
                    <li><a href="/logout">Logout</a></li>
                    <li><a href="/logout">Profile</a></li>

                </ul>

            @endauth

            @guest
                <a class="link" href="/login">
                    <img src="{{ asset('imgs/icons/login.png') }}" alt="">
                </a>
                <span>Guest</span>
            @endguest
        </div>
    </div>


    @if (session()->has('auth'))
        <span class="flash"> {{ session()->get('auth') }} </span>
    @endif




    {{ $slot }}


    <footer>
        <h1>contactst </h1>

        @if (session()->has('success'))
            <span class="success-flash"> {{ session()->get('success') }} </span>
        @endif
    </footer>

    <x-cart></x-cart>

    <script src="{{ asset('js/cart.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>



</body>

</html>
