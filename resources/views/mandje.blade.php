<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Mandje</title>
</head>
<body class="bg-yellow-50">
    <header class="bg-green-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">
                StonksPizza
            </div>
            <nav class="space-x-4">
                <div>
                    <a href="/menu" class="font-semibold hover:text-orange-300">Menu</a>

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
        @foreach($order as $item)
        <div class="flex-1 bg-yellow-50 p-4 m-10 shadow-md shadow-black rounded-sm">
            <h1 class="font-bold">{{ $item->name }}</h1>
            <div class="mt-4">
                <label class="block text-black mb-2" for="grootte">Kies grootte van de pizza</label>
            <select id="grootte" name="grootte">
                @foreach ($groottes as $grootte)
                  <option value="{{ $grootte->id }}">{{ $grootte->name }}</option>
                @endforeach
            </select>

            <label class="block text-black mb-2 mt-4" for="ingredient">Extra ingredient</label>
            <select id="ingredient" name="ingredient">
                @foreach ($ingredienten as $ingredient)
                  <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                @endforeach
            </select>

            <label class="block text-black mb-2 mt-4" for="ingredient2">Verwijder ingredient</label>
            <select id="ingredient2" name="ingredient2">
                @foreach ($ingredienten as $ingredient)
                  <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                @endforeach
            </select>
            </div>
            <form action="{{ url('mandje/' . $item->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="bg-red-600 hover:bg-red-500 text-yellow-50 py-1 px-1 mt-5 rounded">Verwijder van bestelling</button>
            </form>
        </div>
        @endforeach
    </div>

    <div class="flex-1 bg-yellow-50 p-4 m-10 shadow-md shadow-black rounded-sm">
        @if (isset($totaalprijs))
        <h1>Totaalprijs: {{ $Totaalprijs }}</h1>
        @endif

        <form action="/bereken" method="get">
            @csrf
            <input type="hidden" name="ingredient" id="ingredient1" value="{{ $ingredient->id }}">
            <input type="hidden" name="ingredient2" id="ingredient2" value="{{ $ingredient->id }}">
            <input type="hidden" name="grootte" id="grootte" value="{{ $grootte->id }}">
            <button type="submit" class="bg-orange-400 hover:bg-orange-300 text-white py-1 px-2 mt-5 rounded">Bereken prijs</button>
        </form>

        <button type="submit" class="bg-orange-400 hover:bg-orange-300 text-white py-1 px-2 mt-5 rounded">Bestellen</button>
    </div>

</body>
</html>
