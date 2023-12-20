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
                <a href="/menu" class="hover:text-orange-300">menu</a>
                <a href="#" class="bg-orange-400 hover:bg-orange-300 text-white py-1 px-2 m-10 rounded">Inloggen</a>
            </nav>
        </div>
    </header>

    <div class="flex">
        @foreach($pizzas as $pizza)
        <div class="flex-1 bg-yellow-50 p-4 m-10 shadow-md shadow-black rounded-sm">
            <h1 class="font-bold">{{ $pizza->name }}</h1>
            <p>{{ $pizza->beschrijving }}</p><h1></h1>
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
        </div>     
        @endforeach     
    </div>

    <button type="submit" class="bg-orange-400 hover:bg-orange-300 text-white py-1 px-2 m-10 rounded">Bestellen</button>

</body>
</html>