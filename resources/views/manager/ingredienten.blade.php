<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Ingredienten beheren</title>
</head>

<body class="bg-yellow-50">
    <header class="bg-green-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">
                StonksPizza
            </div>
        </div>
    </header>

    <div class="container mx-auto p-4 overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Ingredient</th>
                    <th class="py-2 px-4 border-b">Eenheid</th>
                    <th class="py-2 px-4 border-b">Prijs</th>
                    <th class="py-2 px-4 border-b">Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ingredients as $ingredient)
                    @foreach($ingredient->units as $unit)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $ingredient->name }}</td>
                            <td class="py-2 px-4 border-b max-w-4xl">{{ $unit->name }}</td>
                            <td class="py-2 px-4 border-b">€{{ number_format($ingredient->price, 2, ',', '.') }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ url('ingredienten/' . $ingredient->id . '/edit') }}"
                                    class="bg-blue-600 hover:bg-blue-300 text-yellow-50 py-1 px-1 rounded">Pas ingredient
                                    aan</a>
                                <form action="{{ url('ingredienten/' . $ingredient->id) }}" method="post" class="inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="bg-red-600 hover:bg-red-500 text-yellow-50 py-1 px-1 rounded">Verwijder
                                        ingredient</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>

        <button class="bg-green-800 text-yellow-50 py-1 px-1 mt-3 rounded">
            <a href="ingredienten/create">Voeg nieuw ingredient toe</a>
        </button>
    </div>
</body>

</html>