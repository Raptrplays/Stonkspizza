<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Ingredienten beheren</title>
</head>
<body class="bg-yellow-50">
    <header class="bg-green-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">
                StonksPizza
            </div>

            <nav class="space-x-4">
                <div>
                    @auth
                    <a href="/mandje" class="font-semibold hover:text-orange-300">Mandje</a>
                    @endauth

                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-orange-400 hover:text-orange-300 ml-1">Account</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-orange-400 hover:text-orange-300 ml-1">Inloggen</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-semibold text-orange-400 hover:text-orange-300 ml-1">Registreren</a>
                        @endif
                    @endauth
                </div>
                @endif
            </nav>
        </div>
    </header>

    <div class="flex">
        @foreach($pizzas as $pizza)
        <div class="flex-1 bg-yellow-50 p-4 m-10 shadow-md shadow-black rounded-sm">
            <h1>{{ $pizza->name }}</h1>
            <br>
            <p>{{ $pizza->beschrijving}}</p>
            @guest
            <button type="button" disabled class="bg-orange-400 text-white py-1 px-2 mt-2 rounded">Log in om toe te voegen aan je bestelling</button>
            @endguest
            @auth
            <form id="orderForm" action="/bestel" method="get">
                @csrf
                <input type="hidden" name="pizza_id" value="{{ $pizza->id }}">
                <button type="submit" class="bg-orange-400 hover:bg-orange-300 text-white py-1 px-2 mt-2 rounded">Voeg toe aan bestelling</button>
            </form>
            @endauth
        </div>
        @endforeach
    </div>

</body>
</html>
